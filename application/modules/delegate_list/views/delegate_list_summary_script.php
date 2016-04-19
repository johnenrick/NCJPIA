<script>
	var summaryList = {};
	var url = "C_account/";

	summaryList.retrieveRegisteredList = function(){
		$("#delegateListRegistered").text("...");
		var temp = {
			condition : {
				"account__account_type_ID" : "9"
			}
		}
		$.post(api_url(url + "retrieveAccount"), temp, function(data){
			var response = JSON.parse(data);
			if(!response["error"].length){
				$("#delegateListRegistered").text((response["data"]).length);
			}else{
				$("#delegateListRegistered").text("0");
			}
		});
	}

	summaryList.retrievePaidList = function(){

	}

	summaryList.retrievePendingList = function(){
		$("#delegateListPending").text("...");
		var temp = {
			condition : {
				"not_null__payment_receipt_file_uploaded__name" : "null"
			}
		}
		$.post(api_url(url + "retrieveAccount"), temp, function(data){
			var response = JSON.parse(data);
			if(!response["error"].length){
				$("#delegateListPending").text((response["data"]).length);
			}else{
				$("#delegateListPending").text("0");
			}
		});
	}

	$(document).ready(function(){
		summaryList.retrieveRegisteredList();
		summaryList.retrievePendingList();
	});
</script>