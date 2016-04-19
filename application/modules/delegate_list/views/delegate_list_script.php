<script>
    var delegateList = {};
    
    $(document).ready(function(){
        $.post(api_url("C_local_chapter/retrieveLocalChapter"), {}, function(data){
            var response = JSON.parse(data);
            if(!response["error"].length){
                
                for(var x =0; x < response["data"].length;x++){
                    $("#delegateListTableFilter").find("select[name='condition[local_chapter__ID]']").append("<option value='"+response["data"][x]["ID"]+"'>"+response["data"][x]["description"]+"</option>");
                }
            }
        });
        $("#delegateListTableFilter").attr("action", api_url("C_account/retrieveAccount"));
        $("#delegateListTableFilter").ajaxForm({
            beforeSubmit : function(data, $form, options){
                
                //payment status 3                
                if(data[3]["value"] === "Unpaid"){
                    data.push({
                        name : "condition[is_null__payment_receipt_file_uploaded_name]",
                        required : false,
                        type : "text",
                        value : "null"
                    });
                }else if(data[3]["value"] === "Paid"){
                    data.push({
                        name : "condition[greater_equal__registration_fee_total_amount]",
                        required : false,
                        type : "text",
                        value : 5600
                    });
                }else{
                    data.push({
                        name : "condition[not_null__payment_receipt_file_uploaded__name]",
                        required : false,
                        type : "text",
                        value : "null"
                    });
                }
                console.log(data);
            },
            success : function(data){
                var response = JSON.parse(data);
                console.log(response);
                $("#delegateListTable tbody").empty();
                if(!response["error"].length){
                   
                    for(var x = 0; x < response["data"].length; x++){
                        var newRow = $(".prototype .delegateListRow").clone();
                        newRow.find(".delegateListFullName").text(response["data"][x]["last_name"]+", "+response["data"][x]["first_name"]);
                        newRow.find(".delegateListLocalChapter").text(response["data"][x]["local_chapter_description"]);
                        if(response["data"][x]["local_chapter_position_ID"]*1 === 1 && response["data"][x]["local_chapter_position_ID"]*1 === 2 && response["data"][x]["local_chapter_position_ID"]*1 === 3){
                            if(response["data"][x]["registration_fee_total_amount"]*1 >= 5700){
                                newRow.find(".label-success").show();
                            }else if(response["data"][x]["payment_receipt_file_uploaded_name"] !== null){
                                newRow.find(".label-warning").show();
                            }else{
                                newRow.find(".label-danger").show();
                            }
                        }else{
                            if(response["data"][x]["registration_fee_total_amount"]*1 >= 5600){
                                newRow.find(".label-success").show();
                            }else if(response["data"][x]["payment_receipt_file_uploaded_name"] !== null){
                                newRow.find(".label-warning").show();
                            }else{
                                newRow.find(".label-danger").show();
                            }
                        }
                        $("#delegateListTable tbody").append(newRow);
                    }
                }else{
                    
                }
            }
        });
    });
</script>