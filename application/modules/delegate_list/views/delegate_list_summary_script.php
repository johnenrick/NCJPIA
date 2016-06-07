<script>
	var summaryList = {};
        
	var url = "C_account/";

	summaryList.retrieveRegisteredList = function(){
            var temp = {
                    condition : {
                            "account__account_type_ID" : "9"
                    },
                    has_payment : true
                    
            }
            $.post(api_url(url + "retrieveAccount"), temp, function(data){
                var response = JSON.parse(data);
                var paidCtr = 0;
                var pendingCtr = 0;
                var nonJpianCnt = 0;
                var paidNonJpianCnt = 0;
                if(!response["error"].length){
                    for(var x = 0 ; x < response["data"].length; x++){
                        
                        if(response["data"][x]["local_chapter_position_ID"]*1 === 1 || response["data"][x]["local_chapter_position_ID"]*1 === 2 || response["data"][x]["local_chapter_position_ID"]*1 === 3){
                            nonJpianCnt++;
                            if(response["data"][x]["registration_fee_total_amount"]*1 >= 5700){
                                paidCtr++;
                                paidNonJpianCnt++;
                            }else if(response["data"][x]["payment_receipt_file_uploaded_name"] !== null){
                                pendingCtr++;
                            }else{
                                
                            }
                        }else{
                            if(response["data"][x]["registration_fee_total_amount"]*1 >= 5600){
                                paidCtr++;
                            }else if(response["data"][x]["payment_receipt_file_uploaded_name"] !== null){
                                pendingCtr++;
                            }else{
                            }
                        }
                    }
                    $("#delegateListRegistered").text((response["data"]).length+"("+nonJpianCnt+" NJ)");
                }else{
                    $("#delegateListRegistered").text("0");
                }
                $("#delegateListPaid").text(paidCtr + "("+paidNonJpianCnt+" NJ)");
                $("#delegateListPending").text(pendingCtr);
                
            });
	};

	$(document).ready(function(){
            summaryList.retrieveRegisteredList();
            setInterval(function(){
                    summaryList.retrieveRegisteredList();
            }, 200000);
	});
</script>