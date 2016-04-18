<script type="text/javascript">
    $(document).ready(function(){
        $.post(api_url("C_local_chapter_position/retrieveLocalChapterPosition"), {}, function(data){
            var response = JSON.parse(data);
            if(!response["error"].length){
                $(".localChapterPosition").empty();
                for(var x = 0; x < response["data"].length; x++){
                    $(".localChapterPosition").append("<option value='"+response["data"][x]["ID"]+"'>"+response["data"][x]["description"]+"</option>")
                }
            }else{
                alert("Please contact administrator");
            }
        });
        $.post(api_url("C_event/retrieveEvent"), {}, function(data){//non academic
            var response = JSON.parse(data);
            if(!response["error"].length){
                $(".localChapterPosition").empty();
                for(var x = 0; x < response["data"].length; x++){
                    var eventItem = $(".prototype .eventItem").clone();
                    eventItem.find(".eventDescription").text(response["data"][x]["description"]);
                    eventItem.find("input").val(response["data"][x]["ID"]);
                    if(response["data"][x]["event_type_ID"]*1 === 1){
                        $(".nonAcademicEvent").append(eventItem);
                    }else{
                        $(".academicEvent").append(eventItem);
                    }
                }
            }else{
                alert("Please contact administrator");
            }
        });
    });
</script>
