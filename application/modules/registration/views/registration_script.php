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
            $("#reg-form-1-id").on("invalid.bs.validator", function(){
                $('#button-step1').attr("disabled", true);
            });
            $('#button-step1').click(function(){
                
                nextPage($(this));
                $("#reg-form-1-id").validator("validate");
                return false;
	    }); 
            
            $("#reg-form-2-id").validator();
            $("#reg-form-2-id").on("valid.bs.validator", function(){
                    $('#button-step2').removeAttr("disabled");
            });
	    $('#button-step2').click(function(){
                nextPage($(this));
	        $(".reg-form-2").validator("validate");
                return false;
	    });
            $('#button-step3').click(function(){
                nextPage($(this));
                return false;
	    });
            $('#button-step4').click(function(){
                nextPage($(this));
                return false;
	    });
	});
        function nextPage(button){
            if(button.hasClass("disabled")){
                return false;
            }
            var ths = button;
            var container = ths.closest('.reg-form');
            container.hide();
            container.next().fadeIn();
        }
</script>