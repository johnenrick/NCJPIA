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
                console.log($("select[name='group_member_list[0][local_chapter_position_ID]']").val())
                $("#reg-form-1-id").validator("validate");
                if($("select[name='group_member_list[0][local_chapter_position_ID]']").val()*1 === 7){
                    $("input[name='local_chapter_description']").val($("#regionalChapterRegion option:selected").text());
                    $("input[name='local_chapter_address']").val($("#regionalChapterRegion option:selected").text());
                    $("input[name='local_chapter_chapter_type']").val(2);
                    $("select[name='local_chapter_region']").val($("#regionalChapterRegion select").val());
                    $('#button-step2').trigger("click");
                }
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
            $("select[name='group_member_list[0][local_chapter_position_ID]']").change(function(){
                console.log($(this).val());
                if($(this).val()*1 === 7){
                    $("#regionalChapterRegion").show();
                    $("#regionalChapterRegion").find("select").attr("required", true);
                }else{
                    $("#regionalChapterRegion").hide();
                    $("#regionalChapterRegion").val(0);
                    $("#regionalChapterRegion").find("select").attr("required", false);
                }
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