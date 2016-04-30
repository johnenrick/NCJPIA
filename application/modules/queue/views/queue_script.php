<script>
$(document).ready(function(){
    $("#joinQueue").click(function(){
        $("#joinQueue").button("loading");
        var data = {
            registration_number : $("#registrationNumber").val()
        };
        $.post(api_url("C_account_queue/createAccountQueue"), data, function(data){
            var response = JSON.parse(data);
            if(!response["error"].length){
                $("#userNumber").show();
                $("#userNumber").find("span").text(response["data"]);
            }else{
                
            }
            
            $("#joinQueue").button("reset");
        });
    });
    setInterval(function(){
        viewCurrentServing();
    }, 5000);
});
function viewCurrentServing(){
    var newData = {
        condition:{
            status : 2
        },
        limit : 1,
        sort : {
            ID : "desc"
        }
    };
    $.post(api_url("C_account_queue/retrieveAccountQueue"), newData, function(data){
        var response = JSON.parse(data);
        if(!response["error"].length){
            $("#currentServing span").text(response["data"][0]["ID"]);
        }else{
            $("#currentServing span").text("none");
        }
        
    });
}
</script>