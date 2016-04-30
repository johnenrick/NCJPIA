<script>
   var serverScript = {};
   $(document).ready(function(){
       $("#delegateListServingNext").click(function(){
          $.post(api_url("C_account_queue/nextAccountQueue"), {}, function(data){
                var response = JSON.parse(data);
                console.log(response);
                if(!response["error"].length){
                    $("#delegateListServingNumber").text(response["data"][0]["ID"]);
                    if(response["data"][0]["local_chapter_description"] !== null){
                        $("#delegateListServingLocalChapter").text(response["data"][0]["local_chapter_description"]);
                    }else{
                        $("#delegateListServingLocalChapter").text("None");
                    }
                }else{
                    $("#delegateListServingNumber").text(0);
                    $("#delegateListServingLocalChapter").text("");
                }
              
          }) ;
       });
   });
</script>