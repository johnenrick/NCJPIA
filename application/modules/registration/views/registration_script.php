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
			var temp = $(".prototype table tr").clone();
			var container = $("#reg-form-member-id");
			var academic = "";
			var nonacad = "";

			temp.attr("contact_number", container.find(".contact").val());
			temp.attr("complete_address", container.find(".address").val());
			temp.attr("email_address", container.find(".emailadd").val());
			temp.attr("tshirt_size", container.find("#shirtSize").val());
			temp.attr("member_type", "2");
			temp.attr("local_chapter_position_ID", container.find("#Position").val());

			$('#reg-form-4-id .academicEvent input:checked').each(function() {
			    academic += ($(this).val() + " ");
			});
			$('#reg-form-4-id .nonAcademicEvent input:checked').each(function() {
			    nonacad += ($(this).val() + " ");
			});

			temp.attr("academic_event_participation", academic);
			temp.attr("non_academic_event_participation", nonacad);
			temp.find(".groupMemberFirstName").text(container.find(".fname").val());
			temp.find(".groupMemberLastName").text(container.find(".lname").val());
			temp.find(".groupMemberLocalChapterPositionDescription").text(container.find("#Position option:selected").text());

			$(".registrationGroupMemberRow").append(temp);
			container.find(".contact").val("");
			container.find(".address").val("");
			container.find(".emailadd").val("");
			container.find("#shirtSize").val(1);
			container.find(".fname").val("");
			container.find(".lname").val("");
			container.find("#Position").val(1);
			$('#reg-form-4-id .academicEvent input').each(function() {
			    if($(this).is(':checked')) $(this).prop("checked", false); 
			});
			$('#reg-form-4-id .nonAcademicEvent input').each(function() {
			    if($(this).is(':checked')) $(this).prop("checked", false); 
			});
			academic = "";
			nonacad = "";
	    });	    
		
		$('#reg-form-4-id').on("click", ".editMember", function(){
			var location = $(this).index();
			$("#button-add-group-member").hide();
			$("#button-update-group-member").show();
			$(".reg-form-member").slideDown();

			var temp = $(".registrationGroupMemberRow").eq(location);
		});

		$('#reg-form-4-id').on("click", ".removeMember", function(){
			$(this).parent().parent().remove();
		});
	});
</script>