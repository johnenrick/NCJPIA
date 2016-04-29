<script>
    var delegateList = {};
    delegateList.viewDelegate = function(accountID){
        $.post(api_url("C_account/retrieveAccount"), {ID : accountID, with_event_participation : true}, function(data){
            var response = JSON.parse(data);
            console.log(response);
            if(!response["error"].length){
                $(".eventItem input").prop("checked", false);
                $("#delegateInformation").attr("local_chapter_group_id", response["data"]["local_chapter_group_ID"]);
                $("#delegateListAccountDetail input[name='ID']").val(response["data"]["account_ID"]);
                $("#delegateInformation").attr("account_id", response["data"]["account_ID"]);
                $("#delegateInformation").attr("local_chapter_position_ID", response["data"]["local_chapter_position_ID"]);
                $("#delegateName").text(response["data"]["first_name"]+" "+response["data"]["last_name"]);
                $("#delegateLocalChapter").text(response["data"]["local_chapter_description"]);
                $("#delegateRegion").text(response["data"]["region"]);
                $("#delegateRegistrationNumber").text(pad(response["data"]["local_chapter_group_ID"], 5));
                $("#delegateListAccountDetail input[name='updated_data[first_name]']").val(response["data"]["first_name"]);
                $("#delegateListAccountDetail input[name='updated_data[last_name]']").val(response["data"]["last_name"]);
                $("#delegateListAccountDetail select[name='updated_data[local_chapter_position_ID]']").val(response["data"]["local_chapter_position_ID"]);
                $("#delegateListAccountDetail input[name='updated_data[contact_number]']").val(response["data"]["contact_number"]);
                $("#delegateListAccountDetail input[name='updated_data[complete_address]']").val(response["data"]["complete_address"]);
                $("#delegateListAccountDetail input[name='updated_data[email_address]']").val(response["data"]["email_address"]);
                $("#delegateListAccountDetail input[name='updated_data[tshirt_size]']").val(response["data"]["tshirt_size"]);

                $("#delegateListAccountDetail input[name='local_chapter_updated_data[description]']").val(response["data"]["local_chapter_description"]);
                $("#delegateListAccountDetail input[name='local_chapter_updated_data[address]']").val(response["data"]["address"]);
                $("#delegateListAccountDetail input[name='local_chapter_updated_data[region]']").val(response["data"]["region"]);

                $("#delegateListIdentificationImage").attr("src", asset_url("images\\identification_card\\"+response["data"]["account_identification_file_uploaded_name"]));

                if(response["data"]["payment_receipt_file_uploaded_name"]){
                    $("#delegateConfirmationImage").attr("src", asset_url("images/payment_receipt/"+response["data"]["payment_receipt_file_uploaded_name"]));
                }else{
                    $("#delegateConfirmationImage").attr("src", asset_url("img/receipt.jpg"));
                }

                if(response["data"]["event_participation"]){
                    for(var x = 0; x < response["data"]["event_participation"].length; x++){
                        $(".eventItem input[value='"+response["data"]["event_participation"][x]["event_ID"]+"']").prop("checked", true);
                    }
                }
                $("#delegateListAccountDetail select[name='updated_data[local_chapter_position_ID]']").trigger("change");
                $("#delegateListAccountDetail input[name='updated_data[local_chapter_name]']").val(response["data"]["local_chapter_name"]);
                $("#delegateLocalChapterName").text(" : "+response["data"]["local_chapter_name"]);
                
                $("#delegateInformation").modal("show");
                if(response["data"]["local_chapter_position_ID"]*1 === 1 || response["data"]["local_chapter_position_ID"]*1 === 2 || response["data"]["local_chapter_position_ID"]*1 === 3){
                    if(response["data"]["registration_fee_total_amount"]*1 >= 5700){
                        $(".delegateConfirmPayment").hide();
                        $("#delegatePaymentMode").show();
                        if(response["data"]["registration_fee_payment_mode"]){
                            $("#delegatePaymentMode").text("Paid through bank");
                        }
                    }else{
                        $(".delegateConfirmPayment").show();
                        $("#delegatePaymentMode").hide();
                    }
                }else{
                    if(response["data"]["registration_fee_total_amount"]*1 >= 5600){
                        $(".delegateConfirmPayment").hide();
                        $("#delegatePaymentMode").show();
                        if(response["data"]["registration_fee_payment_mode"]){
                            $("#delegatePaymentMode").text("Paid through bank");
                        }
                    }else{
                        $(".delegateConfirmPayment").show();
                        $("#delegatePaymentMode").hide();
                    }
                }
                if(response["data"]["account_attendance_ID"]*1){
                    $("#delegateConfirmAttendance").hide();
                    $("#delegateAttendanceConfirmed").show();
                }else{
                    $("#delegateConfirmAttendance").show();
                    $("#delegateAttendanceConfirmed").hide();
                }
                if(response["data"]["penalty_fee_total_amount"]*1){
                    $("#delegatePenaltyAmount").val(response["data"]["penalty_fee_total_amount"]*1);
                    $("#delegatePenaltyDescription").val(response["data"]["penalty_fee_description"]);
                    $("#delegatePenaltyDescription").attr("disabled", true);
                    $("#delegatePenaltyAmount").attr("disabled", true);
                    $("#delegateGivePenalty").hide();
                }else{
                    $("#delegatePenaltyAmount").val("");
                    $("#delegatePenaltyDescription").val("");
                    $("#delegatePenaltyDescription").attr("disabled", false);
                    $("#delegatePenaltyAmount").attr("disabled", false);
                    $("#delegateGivePenalty").show();
                }
                if(response["data"]["registration_discount_total_amount"]*1){
                    $("#delegateRegistrationDiscountAmount").val(response["data"]["registration_discount_total_amount"]*1);
                    $("#delegateRegistrationDiscountDescription").val(response["data"]["registration_discount_description"]);
                    $("#delegateRegistrationDiscountAmount").attr("disabled", true);
                    $("#delegateRegistrationDiscountDescription").attr("disabled", true);
                    $("#delegateGiveRegistrationDiscount").hide();
                }else{
                    $("#delegateRegistrationDiscountAmount").val("");
                    $("#delegateRegistrationDiscountDescription").val("");
                    $("#delegateRegistrationDiscountAmount").attr("disabled", false);
                    $("#delegateRegistrationDiscountDescription").attr("disabled", false);
                    $("#delegateGiveRegistrationDiscount").show();
                }
            }
            if(user_type()*1 === 4 && user_type()*1 === 8){
                $(".delegateConfirmPayment").hide();
                $("#delegateConfirmAttendance").parent().parent().hide();
            }
        });
    };
    $(document).ready(function(){
        if(user_type()*1 === 4 && user_type()*1 === 8){
            $(".delegateConfirmPayment").hide();
            $("#delegateConfirmAttendance").parent().parent().hide();
        }
        /*var currentDate = new Date();
        (currentDate.getTime()/1000 < 1462064400) ? $("#delegateConfirmAttendance").parent().parent().hide() : null;
        */
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
                    if(user_type()*1 !== 2){
                        eventItem.find("input").attr("disabled", true);
                    }
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
                    $("#delegateListTableFilter").find("select[name='condition[local_chapter__ID]']").append("<option value='"+response["data"][x]["ID"]+"'>"+response["data"][x]["description"]+"</option>");
                }
            }
        });
        $("#delegateListTableFilter").attr("action", api_url("C_account/retrieveAccount"));
        $("#delegateListTableFilter").ajaxForm({
            beforeSubmit : function(data, $form, options){
                
                //payment status 3
                if(data[3]["value"] === "1"){ //Unpaid
                    data.push({
                        name : "condition[is_null__payment_receipt_file_uploaded__name]",
                        required : false,
                        type : "text",
                        value : "null"
                    });
                }else if(data[3]["value"] === "2"){ //Paid
                    data.push({
                        name : "having[greater_equal__SUM__registration_fee__amount]",
                        required : false,
                        type : "text",
                        value : 5600
                    });
                }else if(data[3]["value"] === "0"){ //Pending
                    data.push({
                        name : "condition[not_null__payment_receipt_file_uploaded__name]",
                        required : false,
                        type : "text",
                        value : "null"
                    });
                    data.push({
                        name : "condition[is_null__registration_fee__amount]",
                        required : false,
                        type : "text",
                        value : 5600
                    });
                }else if(data[3]["value"] === "0"){//completed
                    data.push({
                        name : "condition[account_information__confirmation]",
                        required : false,
                        type : "text",
                        value : 2
                    });
                }
                if($("#systemNameSearch").val() !== ""){
                    var accountName = ($("#systemNameSearch").val()).split(" ");
                    for(var y = 0; y < accountName.length; y++){
                        data.push({
                            name : "condition["+"like__account_information__first_name__CONCAT__account_information__middle_name__CONCAT__account_information__last_name"+"]["+y+"]",
                            value : accountName[y],
                            type : "text",
                            required : false
                        });
                    }
                }
                $("#delegateListTableFilter").find("button[type=submit]").button("loading");
            },
            success : function(data){
                var response = JSON.parse(data);
                
                $("#delegateListTable tbody").empty();
                if(!response["error"].length){
                    for(var x = 0; x < response["data"].length; x++){
                        var newRow = $(".prototype .delegateListRow").clone();
                        newRow.attr("account_id", response["data"][x]["account_ID"]);
                        newRow.find(".delegateListFullName").text(response["data"][x]["last_name"]+", "+response["data"][x]["first_name"]);
                        newRow.find(".delegateListLocalChapter").text(response["data"][x]["local_chapter_description"]);
                        newRow.find(".delegateListLocalChapterPosition").text(response["data"][x]["local_chapter_position_description"]);
                        if(response["data"][x]["confirmation"]*1 === 2){
                            newRow.find(".label-primary").show();
                        }else if(response["data"][x]["local_chapter_position_ID"]*1 === 1 && response["data"][x]["local_chapter_position_ID"]*1 === 2 && response["data"][x]["local_chapter_position_ID"]*1 === 3){
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
                }
                $("#delegateListTableFilter").find("button[type=submit]").button("reset");
            }
        });
        $("#delegateListTable tbody").on("click", "tr", function(){
            delegateList.viewDelegate($(this).attr("account_id"));
        });
        $(".delegateConfirmPayment").click(function(){
            $(".delegateConfirmPayment").button("loading");
            var amount = 0;
            if($("#delegateInformation").attr("local_chapter_position_ID")*1 === 1 ||$("#delegateInformation").attr("local_chapter_position_ID")*1 === 2 ||$("#delegateInformation").attr("local_chapter_position_ID")*1 === 3 ){
                amount = 5700;
               
            }else{
                amount = 5600;
            }
            if($(this).attr("payment_mode") === "1" || $(this).attr("payment_mode") === "2"){
                var newData = {
                    assessment_item_ID  : 1,
                    local_chapter_group_ID : $("#delegateInformation").attr("local_chapter_group_id"),
                    amount : amount,
                    payment_mode : $(this).attr("payment_mode"),
                    description : "Registration Fee"
                };
                $.post(api_url("C_account_payment/createGroupAccountPayment"), newData, function(data){
                    console.log(data);
                    var response = JSON.parse(data);
                    if(!response["error"].length){
                        $(".delegateConfirmPayment").hide();
                        $("#delegateListTableFilter").trigger("submit");
                    }
                    $(".delegateConfirmPayment").button("reset");
                });
            }else{
                console.log($(this).attr("payment_mode"));
                var newData = {
                    assessment_item_ID  : 1,
                    account_ID : $("#delegateInformation").attr("account_id"),
                    amount : amount,
                    payment_mode : $(this).attr("payment_mode"),
                    description : "Registration Fee"
                };
                $.post(api_url("C_account_payment/createAccountPayment"), newData, function(data){
                    console.log(data);
                    var response = JSON.parse(data);
                    if(!response["error"].length){
                        $(".delegateConfirmPayment").hide();
                        $("#delegateListTableFilter").trigger("submit");
                    }
                    $(".delegateConfirmPayment").button("reset");
                });
            }
        });
        $("#delegateListTableFilter").trigger("submit");
        $("#delegateConfirmAttendance").click(function(){
            $(this).button("loading");
            $.post(api_url("C_account_attendance/createAccountAttendance"), {account_ID : $("#delegateInformation").attr("account_id")}, function(data){
                var response = JSON.parse(data);
                if(!response["error"].length){
                    $("#delegateConfirmAttendance").hide();
                    $("#delegateAttendanceConfirmed").show();
                }else{
                    console.log(response);
                    
                }
                $("#delegateConfirmAttendance").button("reset");
            });
        });
        $("#delegateGivePenalty").click(function(){
            $(this).button("loading");
            var data = {
                account_ID : $("#delegateInformation").attr("account_id"),
                payment_mode : 2,
                assessment_item_ID : 2,
                amount : $("#delegatePenaltyAmount").val(),
                description : $("#delegatePenaltyDescription").val()
            };
            $.post(api_url("C_account_payment/createAccountPayment"), data, function(data){
                var response = JSON.parse(data);
                if(!response["error"].length){
                    $("#delegatePenaltyAmount").attr("disabled", true);
                    $("#delegatePenaltyDescription").attr("disabled", true);
                    $("#delegateGivePenalty").hide();
                }else{
                    
                }
                $("#delegateGivePenalty").button("reset");
            });
        });
        $("#delegateGiveRegistrationDiscount").click(function(){
            $(this).button("loading");
            var data = {
                account_ID : $("#delegateInformation").attr("account_id"),
                payment_mode : 2,
                assessment_item_ID : 3,
                amount : $("#delegateRegistrationDiscountAmount").val(),
                description : $("#delegateRegistrationDiscountDescription").val()
            };
            $.post(api_url("C_account_payment/createAccountPayment"), data, function(data){
                var response = JSON.parse(data);
                if(!response["error"].length){
                    $("#delegateRegistrationDiscountDescription").attr("disabled", true);
                    $("#delegateRegistrationDiscountAmount").attr("disabled", true);
                    $("#delegateGiveRegistrationDiscount").hide();
                }else{
                    
                }
                $("#delegateGiveRegistrationDiscount").button("reset");
            });
        });
        $("#delegateSaveChanges").click(function(){
            $("#delegateListAccountDetail").trigger("submit");
        });
        $("#delegateListAccountDetail").attr("action", api_url("C_account/updateAccount"));
        $("#delegateListAccountDetail").ajaxForm({
            beforeSubmit : function(data, $form, options){
                $("#delegateSaveChanges").button("loading");
                var eventCounter = 0;
                $("#delegateListAccountDetail .nonAcademicEvent").find("input:checked").each(function(){
                    data.push({
                        name : "event_participation["+eventCounter+"]",
                        required : true,
                        type : "text",
                        value : $(this).val()
                    });
                    eventCounter++;
                });
                $("#delegateListAccountDetail .academicEvent").find("input:checked").each(function(){
                    data.push({
                        name : "event_participation["+eventCounter+"]",
                        required : true,
                        type : "text",
                        value : $(this).val()
                    });
                    eventCounter++;
                });
            },
            success : function(data){
                var response = JSON.parse(data);
                if(!response["error"].length){
                    delegateList.viewDelegate($("#delegateListAccountDetail input[name='ID']").val());
                    $("#delegateListTableFilter").trigger("submit");
                    
                }else{
                    
                }
                $("#delegateSaveChanges").button("reset");
            }
        });
        $("#delegateListAccountDetail select[name='updated_data[local_chapter_position_ID]']").change(function(){
            if($(this).val()*1 === 7){
                $("#delegateListAccountDetail input[name='updated_data[local_chapter_name]']").show();
                $("#delegateLocalChapterName").show();
            }else{
                $("#delegateListAccountDetail input[name='updated_data[local_chapter_name]']").hide();
                $("#delegateLocalChapterName").hide();
            }
        });
    });
</script>