<script type="text/javascript">
	var registration = {}, count = 0;
	registration.eventLimit = 2;
	var button1 = false;

	$(document).ready(function(){
		$('.checkbox-control input.checkbox').on('change', function(evt) {
			if($(this).closest(".checkbox-control").find('.checkbox :checked').length > registration.eventLimit) {
				this.checked = false;
		   	}
		});

		$('#button-step1').click(function(event){
			$(".reg-form-1").validator("validate");
	    });

	    $('#button-step2').click(function(event){
	        $(".reg-form-2").validator("validate");
	    });

	    $('#button-step3').click(function(event){
	        $(".reg-form-3").validator("validate");
	    });
	});
</script>