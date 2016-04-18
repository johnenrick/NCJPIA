<script type="text/javascript">
    $(document).ready(function(){
        $("#reg-module form").ajaxForm({
            beforeSubmit : function(data, $form, options){
                $("#groupMemberTable tbody").find("tr").each(function(){
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
                        value : $(this).find(".groupMemberLocalChapterPositionDescription").attr("local_chapter_position_ID")
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
                    var academic = ($(this).attr("academic_event_participation")).split(",");
                    if(academic[0] !== ""){
                        for(var x = 0;x < academic.length; x++){
                            data.push({
                                name : "group_member_list["+($(this).index()+1)+"][academic]["+x+"]",
                                required : true,
                                type : "text",
                                value : academic[x]
                            });
                        }
                    }
                    var nonAcademic = ($(this).attr("non_academic_event_participation")).split(",");
                    if(nonAcademic[0] !== ""){
                        for(var x = 0;x < nonAcademic.length; x++){
                            data.push({
                                name : "group_member_list["+($(this).index()+1)+"][non_academic]["+x+"]",
                                required : true,
                                type : "text",
                                value : nonAcademic[x]
                            });
                        }
                    }
                });
                console.log(data);
            },
            success : function(data){
                
            }
        });
    });
</script>
