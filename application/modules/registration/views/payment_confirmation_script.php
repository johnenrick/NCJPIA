<script type="text/javascript">
    $(document).ready(function(){
       $("#con-module form").attr("action", api_url("C_registration/createPaymentReceipt"));
       $("#con-module form").ajaxForm({
            beforeSubmit : function(){
                $("#con-module").find("button[type=submit]").button("loading");
                $("#con-module").find(".formMessage").hide();
            },
            success : function(data){
                console.log(data);
                var response = JSON.parse(data);
                console.log(response);
                if(!response["error"].length){
                    $(".hide-module:not(#success-module)").hide();
                    $("#success-module").fadeIn();
                    $("#confirmationMessage").show();
                }else{
                    $("#con-module").find(".formMessage").show();
                    $("#con-module").find(".formMessage").empty();
                    show_form_error($("#con-module form"), response["error"]);
                }
                $("#con-module").find("button[type=submit]").button("reset");
            }
       });
    });
</script>
