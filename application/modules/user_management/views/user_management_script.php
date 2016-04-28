<script>
    var userManagement = {};
    
    $(document).ready(function(){
        $("#userManagementAddUser").click(function(){
            $(".userManagementButton[action_id='2']").hide();
            $(".userManagementButton[action_id='3']").show();
            $("#userManagementAccountDetail").attr("action", api_url("C_account/createAccount"));
            $("#userManagementAccountDetail input").each(function(){
                $(this).attr("name", $(this).attr("input_name"));
                $(this).attr("initial_value", "");
            });
            $("#userManagementAccountDetail input[name='id']").val("0");
            $("#userManagementAccountDetail select").each(function(){
                $(this).attr("name", $(this).attr("input_name"));
            });
            $("#userManagementAccountDetail").trigger("reset");
            $("#userManagementInformation").modal("show");
        });
        $(".userManagementButton").click(function(){
           switch($(this).attr("action_id")*1){
               case 1 ://Close
                   $("#userManagementInformation").modal("hide");
                   break;
               case 2 ://Save
                   $("#userManagementAccountDetail").trigger("submit");
                   break;
               case 3 ://Create
                   $("#userManagementAccountDetail").trigger("submit");
                   break;
           } 
        });
        $("#userManagementTableFilter").attr("action", api_url("C_account/retrieveAccount"));
        $("#userManagementTableFilter").ajaxForm({
            beforeSubmit : function(data, $form, options){
                if(data[0]["value"] === ""){//User Type
                    data.splice(0,1);
                    data.push({
                        name : "condition[not__account__account_type_ID]",
                        required : false,
                        type : "text",
                        value : "9"
                    });
                }
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
                        newRow.find(".userManagementUserType").text(response["data"][x]["account_type_description"]);
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
        
        $("#userManagementAccountDetail").ajaxForm({
            beforeSubmit : function(data, $form, options){
                if(data[3]["value"] === ""){//password
                    data.splice(3,1);
                }
                if(data[2]["value"] === $("#userManagementAccountDetail input[input_name='username']").attr("initial_value")){//username
                    data.splice(2,1);
                }
                $("#userManagementAddUser").button("loading");
            },
            success : function(data){
                var response = JSON.parse(data);
                if(!response["error"].length){
                    $("#userManagementInformation").modal("hide");
                    $("#userManagementTableFilter").trigger("submit");
                }else{
                    show_form_error($("#userManagementAccountDetail"), response["error"]);
                }
                $("#userManagementAddUser").button("reset");
            }
        });
        $("#userManagementTable tbody").on("click", "tr", function(){
            $.post(api_url("C_account/retrieveAccount"), {ID : $(this).attr("account_id"), with_event_participation : true}, function(data){
                var response = JSON.parse(data);
                if(!response["error"].length){
                    $(".userManagementButton[action_id='2']").show();
                    $(".userManagementButton[action_id='3']").hide();
                    $("#userManagementAccountDetail input").each(function(){
                        $(this).attr("name", "updated_data["+$(this).attr("input_name")+"]");
                    });
                    $("#userManagementAccountDetail select").each(function(){
                        $(this).attr("name", "updated_data["+$(this).attr("input_name")+"]");
                    });
                    $("#userManagementAccountDetail input[input_name='ID']").attr("name", "ID");
                    $("#userManagementAccountDetail input[name='ID']").val(response["data"]["account_ID"]);
                    $("#userManagementAccountDetail input[input_name='password']").val("");
                    
                    $("#userManagementAccountDetail input[name='updated_data[ID]']").val(response["data"]["account_ID"]);
                    $("#userManagementAccountDetail input[name='updated_data[username]']").val(response["data"]["username"]);
                    $("#userManagementAccountDetail input[name='updated_data[username]']").attr("initial_value", response["data"]["username"]);
                    
                    $("#userManagementAccountDetail input[name='updated_data[first_name]']").val(response["data"]["first_name"]);
                    $("#userManagementAccountDetail input[name='updated_data[last_name]']").val(response["data"]["last_name"]);
                    $("#userManagementAccountDetail input[name='updated_data[contact_number]']").val(response["data"]["contact_number"]);
                    $("#userManagementAccountDetail input[name='updated_data[complete_address]']").val(response["data"]["complete_address"]);
                    $("#userManagementAccountDetail input[name='updated_data[email_address]']").val(response["data"]["email_address"]);
                    $("#userManagementAccountDetail").attr("action", api_url("C_account/updateAccount"));
                    $("#userManagementInformation").modal("show");
                }
            });
        });
        $("#userManagementTableFilter").trigger("submit");
        
    });
</script>