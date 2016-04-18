<script type="text/javascript">
	var registration = {}, count = 0;
	registration.eventLimit = 2;

	$(document).ready(function(){
		$(document).on('change', '.control-checkbox input.checkbox', function(evt) {
			if($(this).closest(".control-checkbox").find('.checkbox :checked').length > registration.eventLimit) {
				this.checked = false;
		   	}
		});

		$("#reg-form-1-id").validator();
		$("#reg-form-1-id").on("valid.bs.validator", function(){
			$('#button-step1').removeAttr("disabled");
		});
		$('#button-step1').click(function(event){
			$("#reg-form-1-id").validator("validate");
	    });

		$("#reg-form-2-id").validator();
		$("#reg-form-2-id").on("valid.bs.validator", function(){
			$('#button-step2').removeAttr("disabled");
		});
	    $('#button-step2').click(function(event){
	        $(".reg-form-2").validator("validate");
	    });

	    $("#reg-form-member-id").validator();
		$("#reg-form-member-id").on("valid.bs.validator", function(){
			$('#button-add-group-member').removeAttr("disabled");
		});
		$('#button-add-group-member').click(function(event){
			$("#reg-form-member-id").validator("validate");
	    });	    
	});
</script>