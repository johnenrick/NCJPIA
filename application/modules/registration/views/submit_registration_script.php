<script type="text/javascript">
    $(document).ready(function(){
        $("#reg-module form").ajaxForm({
            beforeSubmit : function(data, $form, options){
                console.log(data);
            },
            success : function(data){
                
            }
        });
    });
</script>
