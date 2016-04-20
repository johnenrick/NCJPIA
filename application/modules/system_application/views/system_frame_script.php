<script>
    $(document).ready(function(){
        load_module("delegate_list", "delegate_list");
        $("#logout").click(function(){
            window.location = base_url("Portal/logout");
        });
    });
</script>