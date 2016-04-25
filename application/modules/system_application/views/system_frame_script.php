<script>
    $(document).ready(function(){
        load_module("delegate_list", "delegate_list");
        $("#logout").click(function(){
            window.location = base_url("portal/logout");
        });
        $(".sidebar-nav").on("click", ".moduleNavigation", function(){
            load_module($(this).attr("module_link"), $(this).attr("module_name"));
            $(".moduleNavigation").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>