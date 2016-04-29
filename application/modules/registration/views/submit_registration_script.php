<script type="text/javascript">
    $(document).ready(function(){
        $("#registrationFormFull").attr("action", api_url("C_registration/createRegistration"));
        $("#registrationFormFull").ajaxForm({
            beforeSubmit : function(data, $form, options){
                clear_form_error($("#registrationFormFull"));
                /*Group Member*/
                $("#groupMemberTable tbody").find("tr[class!='noGroupMember']").each(function(){
                    data.push({
                        name : "group_member_list["+($(this).index()+1)+"][first_name]",
                        required : true,
                        type : "text",
                        value : $(this).find(".groupMemberFirstName").text()
                    });
                    data.push({
                        name : "group_member_list["+($(this).index()+1)+"][last_name]",
                        required : true,
                        type : "text",
                        value : $(this).find(".groupMemberLastName").text()
                    });
                    data.push({
                        name : "group_member_list["+($(this).index()+1)+"][local_chapter_position_ID]",
                        required : true,
                        type : "text",
                        value : $(this).attr("local_chapter_position_ID")
                    });
                    data.push({
                        name : "group_member_list["+($(this).index()+1)+"][contact_number]",
                        required : true,
                        type : "text",
                        value : $(this).attr("contact_number")
                    });
                    data.push({
                        name : "group_member_list["+($(this).index()+1)+"][complete_address]",
                        required : true,
                        type : "text",
                        value : $(this).attr("complete_address")
                    });
                    data.push({
                        name : "group_member_list["+($(this).index()+1)+"][email_address]",
                        required : true,
                        type : "text",
                        value : $(this).attr("email_address")
                    });
                    data.push({
                        name : "group_member_list["+($(this).index()+1)+"][tshirt_size]",
                        required : true,
                        type : "text",
                        value : $(this).attr("tshirt_size")
                    });
                    data.push({
                        name : "group_member_list["+($(this).index()+1)+"][member_type]",
                        required : true,
                        type : "text",
                        value : $(this).attr("member_type")
                    });
                    var academic = ($(this).attr("academic_event_participation")).split(" ");
                    
                    for(var x = 0;x < academic.length; x++){
                        if(academic[x]*1){
                            data.push({
                                name : "group_member_list["+($(this).index()+1)+"][event_participation][academic]["+x+"]",
                                required : true,
                                type : "text",
                                value : academic[x]
                            });
                        }
                    }
                    var nonAcademic = ($(this).attr("non_academic_event_participation")).split(" ");
                    for(var x = 0;x < nonAcademic.length; x++){
                        if(nonAcademic[x]*1){
                            data.push({
                                name : "group_member_list["+($(this).index()+1)+"][event_participation][non_academic]["+x+"]",
                                required : true,
                                type : "text",
                                value : nonAcademic[x]
                            });
                        }
                    }
                });
                /*Leader Event Participation*/
                var nonAcademicEventCtr = 0;
                $(".reg-form-3 .nonAcademicEvent").find("input:checked").each(function(){
                    data.push({
                        name : "group_member_list[0][event_participation][non_academic]["+nonAcademicEventCtr+"]",
                        required : true,
                        type : "text",
                        value : $(this).val()
                    });
                    nonAcademicEventCtr++;
                });
                var academicEventCtr = 0;
                $(".reg-form-3 .academicEvent").find("input:checked").each(function(){
                    data.push({
                        name : "group_member_list[0][event_participation][academic]["+academicEventCtr+"]",
                        required : true,
                        type : "text",
                        value : $(this).val()
                    });
                    academicEventCtr++;
                });
                $("#submitRegistration").button("loading");
                
            },
            success : function(data){
                $("#submitRegistration").button("reset");
                var response = JSON.parse(data);
                if(!response["error"].length){
                    $(".hide-module:not(#success-module)").hide();
                    $("#success-module").fadeIn();
                    $("#registrationNumberMessage").show();
                    $("#registrationNumber").text(pad(response["data"]*1, 5));
                }else{
                    show_form_error($("#registrationFormFull"), response["error"]);
                }
                
            }
        });
        
        $("#agreement").on("click", "input", function(){
           if($("#agreement input[name=first_agreement]").is(":checked") && $("#agreement input[name=second_agreement]").is(":checked")){
               $("#submitRegistration").removeAttr("disabled");
           }else{
               $("#submitRegistration").attr("disabled", true);
           }
        });
        $("#submitRegistration").click(function(){
            $("#registrationFormFull").trigger("submit");
            return false; 
        });
    });
    
</script>
