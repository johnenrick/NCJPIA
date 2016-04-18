<script type="text/javascript">
	var registration = {}, count = 0;
	registration.eventLimit = 2;

	$(document).ready(function(){
		$('.checkbox-control input.checkbox').on('change', function(evt) {
			if($(this).closest(".checkbox-control").find('.checkbox :checked').length > registration.eventLimit) {
				this.checked = false;
		   	}
		});

		$('#button-step1').click(function(event){
	        if(!this.checkValidity()){
	            event.preventDefault();
	            $('.reg-form-1 :input:visible[required="required"]').each(function(){
				    if(!this.validity.valid){
				        $(this).focus();
				        // break
				        return false;
				    }
				});
	        }
	    });

	    $('#button-step2').click(function(event){
	        if(!this.checkValidity()){
	            event.preventDefault();
	            $('.reg-form-2 :input:visible[required="required"]').each(function(){
				    if(!this.validity.valid){
				        $(this).focus();
				        // break
				        return false;
				    }
				});
	        }
	    });

	    $('#button-step3').click(function(event){
	        if(!this.checkValidity()){
	            event.preventDefault();
	            $('.reg-form-3 :input:visible[required="required"]').each(function(){
				    if(!this.validity.valid){
				        $(this).focus();
				        // break
				        return false;
				    }
				});
	        }
	    });
	});
</script>