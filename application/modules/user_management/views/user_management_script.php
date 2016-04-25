<script>
    var userManagement = {};
    
    $(document).ready(function(){
        
        $.post(api_url("C_local_chapter_position/retrieveLocalChapterPosition"), {}, function(data){
            var response = JSON.parse(data);
            if(!response["error"].length){
                $(".localChapterPosition").empty();
                for(var x = 0; x < response["data"].length; x++){
                    $(".localChapterPosition").append("<option value='"+response["data"][x]["ID"]+"'>"+response["data"][x]["description"]+"</option>");
                }
            }else{
                alert("Please contact administrator");
            }
        });
        $.post(api_url("C_event/retrieveEvent"), {}, function(data){//non academic
            var response = JSON.parse(data);
            if(!response["error"].length){
                for(var x = 0; x < response["data"].length; x++){
                    var eventItem = $(".prototype .eventItem").clone();
                    eventItem.find(".eventDescription").text(response["data"][x]["description"]);
                    eventItem.find("input").val(response["data"][x]["ID"]);
                    if(response["data"][x]["event_type_ID"]*1 === 1){
                        $(".nonAcademicEvent").append(eventItem);
                    }else{
                        $(".academicEvent").append(eventItem);
                    }
                }
            }else{
                alert("Please contact administrator");
            }
        });
        
        $.post(api_url("C_local_chapter/retrieveLocalChapter"), {}, function(data){
            var response = JSON.parse(data);
            if(!response["error"].length){
                for(var x =0; x < response["data"].length;x++){
                    $("#userManagementTableFilter").find("select[name='condition[local_chapter__ID]']").append("<option value='"+response["data"][x]["ID"]+"'>"+response["data"][x]["description"]+"</option>");
                }
            }
        });
        $("#userManagementTableFilter").attr("action", api_url("C_account/retrieveAccount"));
        $("#userManagementTableFilter").ajaxForm({
            beforeSubmit : function(data, $form, options){
                
                
                $("#userManagementTableFilter").find("button[type=submit]").button("loading");
            },
            success : function(data){
                var response = JSON.parse(data);
                
                $("#userManagementTable tbody").empty();
                if(!response["error"].length){
                   
                    for(var x = 0; x < response["data"].length; x++){
                        var newRow = $(".prototype .userManagementRow").clone();
                        newRow.attr("account_id", response["data"][x]["account_ID"]);
                        newRow.find(".userManagementFullName").text(response["data"][x]["last_name"]+", "+response["data"][x]["first_name"]);
                        newRow.find(".userManagementLocalChapter").text(response["data"][x]["local_chapter_description"]);
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
                        $("#userManagementTable tbody").append(newRow);
                    }
                }
                $("#userManagementTableFilter").find("button[type=submit]").button("reset");
            }
        });
        $("#userManagementTable tbody").on("click", "tr", function(){
            $.post(api_url("C_account/retrieveAccount"), {ID : $(this).attr("account_id"), with_event_participation : true}, function(data){
                var response = JSON.parse(data);
                if(!response["error"].length){
                    $(".eventItem input").prop("checked", false);
                    $("#userManagementInformation").attr("account_id", response["data"]["account_ID"]);
                    $("#userManagementInformation").attr("local_chapter_position_ID", response["data"]["local_chapter_position_ID"]);
                    $("#userManagementName").text(response["data"]["first_name"]+" "+response["data"]["last_name"]);
                    $("#userManagementLocalChapter").text(response["data"]["local_chapter_description"]);
                    $("#userManagementRegion").text(response["data"]["region"]);
                    
                    $("#userManagementAccountDetail input[name='updated_data[first_name]']").val(response["data"]["first_name"]);
                    $("#userManagementAccountDetail input[name='updated_data[last_name]']").val(response["data"]["last_name"]);
                    $("#userManagementAccountDetail input[name='updated_data[local_chapter_position_ID]']").val(response["data"]["local_chapter_position_ID"]);
                    $("#userManagementAccountDetail input[name='updated_data[contact_number]']").val(response["data"]["contact_number"]);
                    $("#userManagementAccountDetail input[name='updated_data[complete_address]']").val(response["data"]["complete_address"]);
                    $("#userManagementAccountDetail input[name='updated_data[email_address]']").val(response["data"]["email_address"]);
                    $("#userManagementAccountDetail input[name='updated_data[tshirt_size]']").val(response["data"]["tshirt_size"]);
                    
                    $("#userManagementAccountDetail input[name='local_chapter_updated_data[description]']").val(response["data"]["local_chapter_description"]);
                    $("#userManagementAccountDetail input[name='local_chapter_updated_data[address]']").val(response["data"]["address"]);
                    $("#userManagementAccountDetail input[name='local_chapter_updated_data[region]']").val(response["data"]["region"]);
                    
                    $("#userManagementIdentificationImage").attr("src", asset_url("images\\identification_card\\"+response["data"]["account_identification_file_uploaded_name"]));
                    
                    if(response["data"]["payment_receipt_file_uploaded_name"]){
                        $("#userManagementConfirmationImage").attr("src", asset_url("images/payment_receipt/"+response["data"]["payment_receipt_file_uploaded_name"]));
                    }else{
                        $("#userManagementConfirmationImage").attr("src", asset_url("img/receipt.jpg"));
                    }
                    
                    if(response["data"]["event_participation"]){
                        for(var x = 0; x < response["data"]["event_participation"].length; x++){
                            $(".eventItem input[value='"+response["data"]["event_participation"][x]["event_ID"]+"']").prop("checked", true);
                        }
                    }
                    
                    $("#userManagementInformation").modal("show");
                    if(response["data"]["local_chapter_position_ID"]*1 === 1 || response["data"]["local_chapter_position_ID"]*1 === 2 || response["data"]["local_chapter_position_ID"]*1 === 3){
                        if(response["data"]["registration_fee_total_amount"]*1 >= 5700){
                            $(".userManagementConfirmPayment").hide();
                            $("#userManagementPaymentMode").show();
                            if(response["data"]["registration_fee_payment_mode"]){
                                $("#userManagementPaymentMode").text("Paid through bank");
                            }
                        }else{
                            $(".userManagementConfirmPayment").show();
                            $("#userManagementPaymentMode").hide();
                        }
                    }else{
                        if(response["data"]["registration_fee_total_amount"]*1 >= 5600){
                            $(".userManagementConfirmPayment").hide();
                            $("#userManagementPaymentMode").show();
                            if(response["data"]["registration_fee_payment_mode"]){
                                $("#userManagementPaymentMode").text("Paid through bank");
                            }
                        }else{
                            $(".userManagementConfirmPayment").show();
                            $("#userManagementPaymentMode").hide();
                        }
                    }
                }
            });
        });
        $(".userManagementConfirmPayment").click(function(){
            $(".userManagementConfirmPayment").button("loading");
            var amount = 0;
            if($("#userManagementInformation").attr("local_chapter_position_ID")*1 === 1 ||$("#userManagementInformation").attr("local_chapter_position_ID")*1 === 2 ||$("#userManagementInformation").attr("local_chapter_position_ID")*1 === 3 ){
                amount = 5700;
               
            }else{
                amount = 5600;
            }
            var newData = {
                assessment_item_ID  : 1,
                account_ID : $("#userManagementInformation").attr("account_id"),
                amount : amount,
                payment_mode : $(this).attr("payment_mode")
            };
            $.post(api_url("C_account_payment/createAccountPayment"), newData, function(data){
                var response = JSON.parse(data);
                if(!response["error"].length){
                    $(".userManagementConfirmPayment").hide();
                    $("#userManagementTableFilter").trigger("submit");
                }
                $(".userManagementConfirmPayment").button("reset");
            });
        });
        $("#userManagementTableFilter").trigger("submit");
    });
</script>