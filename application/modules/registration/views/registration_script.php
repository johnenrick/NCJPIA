<script type="text/javascript">
	var registration = {}, count = 0;
	registration.eventLimit = 2;

	$(document).ready(function(){
		$('.checkbox-control input.checkbox').on('change', function(evt) {
			if($(this).closest(".checkbox-control").find('.checkbox :checked').length > registration.eventLimit) {
				this.checked = false;
		   	}
		});

		$('#form-step1').submit(function(event){
	        if(!this.checkValidity()){
	            event.preventDefault();
	            $('#form-step1 :input:visible[required="required"]').each(function(){
				    if(!this.validity.valid){
				        $(this).focus();
				        // break
				        return false;
				    }else{
				    	$("#button-step1").addClass("reg-btn-next").trigger("click");
				    }
				});
	        }
	    });
	});
</script>