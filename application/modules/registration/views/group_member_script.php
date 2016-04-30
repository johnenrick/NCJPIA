<script type="text/javascript">
    $(document).ready(function(){
        $("#reg-form-member-id").validator();
        $("#reg-form-member-id").on("valid.bs.validator", function(){
                $('#saveGroupMember').removeAttr("disabled");
        });
        var isGroupFormError = false;
        $("#reg-form-member-id").on("invalid.bs.validator", function(){
                isGroupFormError = true;
        });
        $("#reg-add-member").click(function () {
            $("#saveGroupMember").show();
            $("#button-updae-group-member").hide();
            $(".reg-form-member").slideDown();
            $('#saveGroupMember').attr("disabled", true);
            $('#updateGroupMember').hide();
            $("#memberIdentificationCardList").append($(".prototype .memberIdentificationCard").clone().attr("name", "images[]"));
            $("#reg-add-member").hide();
            $(".reg-form-member").attr("row_index", -1);
            $("#groupMemberTable .editMember").hide();
        });
        $("#cancelGroupMember").click(function(){
            $("#reg-add-member").show();
            var container = $("#reg-form-member-id");
            container.find(".contact").val("");
            container.find(".address").val("");
            container.find(".emailadd").val("");
            container.find("#shirtSize").val("XXS");
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
            if($("#reg-form-member-id").attr("row_index") !== "-1"){
                $("#memberIdentificationCardList .memberIdentificationCard:nth-child("+($("#reg-form-member-id").attr("row_index")*1)+1+")").hide()
            }else{
                $("#memberIdentificationCardList .memberIdentificationCard:last-child").remove();
            }
            $("#groupMemberTable .editMember").show();
        });
        $('#saveGroupMember').click(function(event){
            $("#reg-form-member-id").validator("validate");
            if($(this).hasClass("disabled")){
                return false;
            }
            var temp = $(".prototype .groupMember").clone();
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
            $("#groupMemberTable").find(".noGroupMember").remove();
            $("#groupMemberTable tbody").append(temp);
            container.find(".contact").val("");
            container.find(".address").val("");
            container.find(".emailadd").val("");
            $("#shirtSize").val("XXS");
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
            $("#memberIdentificationCardList .memberIdentificationCard").hide();
            $(this).closest(".btn-form-con").slideUp();
            $("#reg-add-member").show();
            $("#groupMemberTable .editMember").show();
            return false;
        });
        $('#reg-form-4-id').on("click", ".removeMember", function(){
            $("#memberIdentificationCardList .memberIdentificationCard:nth-child("+$(this).parent().parent().index()+1+")").show()
            $(this).parent().parent().remove();
            if($("#groupMemberTable").find("tbody tr").length === 0){
                $("#groupMemberTable tbody").append($(".prototype .noGroupMember").clone());
            }
            $("#cancelGroupMember").trigger("click");
                
        });
        $('#reg-form-4-id').on("click", ".editMember", function(){
            var container = $("#reg-form-member-id");
            container.find(".contact").val("");
            container.find(".address").val("");
            container.find(".emailadd").val("");
            $("#shirtSize").val("XXS");
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
            
            var tr = $(this).parent().parent();
            $(".reg-form-member").attr("row_index", tr.index());
            $("#reg-add-member").hide();
            
            $("#saveGroupMember").hide();
            $("#updateGroupMember").show();
            $(".reg-form-member").slideDown();
            $("#reg-form-member-id .fname").val(tr.find(".groupMemberFirstName").text());
            $("#reg-form-member-id .lname").val(tr.find(".groupMemberLastName").text());
            $("#reg-form-member-id .localChapterPosition").val(tr.attr("local_chapter_position_id"));
            $("#reg-form-member-id .contact").val(tr.attr("contact_number"));
            $("#reg-form-member-id .address").val(tr.attr("complete_address"));
            $("#reg-form-member-id .emailadd").val(tr.attr("email_address"));
            $("#reg-form-member-id #shirtSize").val(tr.attr("tshirt_size"));
            $("#memberIdentificationCardList .memberIdentificationCard").hide();
            $("#memberIdentificationCardList .memberIdentificationCard:nth-child("+(tr.index()+1)+")").show();
            $("#reg-form-member-id").validator("validate");
            var academicEvent  = tr.attr("academic_event_participation").split(" ");
            for(var x = 0; x < academicEvent.length; x++){
                if(academicEvent[x] !== "")
                    $("#reg-form-member-id").find(".academicEvent").find("input[value='"+academicEvent[x]+"']").prop("checked", true);
            }
            var nonAcademicEvent  = tr.attr("non_academic_event_participation").split(" ");
            for(var x = 0; x < nonAcademicEvent.length; x++){
                if(nonAcademicEvent[x] !== "")
                    $("#reg-form-member-id").find(".nonAcademicEvent").find("input[value='"+nonAcademicEvent[x]+"']").prop("checked", true);
            }
        });
        $("#updateGroupMember").click(function(){
            $("#reg-form-member-id").validator("validate");
            if($(this).hasClass("disabled")){
                return false;
            }
            var temp = $("#groupMemberTable tbody tr:nth-child("+(($("#reg-form-member-id").attr("row_index")*1)+1)+")");
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
            container.find(".contact").val("");
            container.find(".address").val("");
            container.find(".emailadd").val("");
            $("#shirtSize").val("XXS");
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
            $("#memberIdentificationCardList .memberIdentificationCard").hide();
            $(this).closest(".btn-form-con").slideUp();
            $("#reg-add-member").show();
            return false;
        });
    });
</script>
