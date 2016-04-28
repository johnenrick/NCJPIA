<script>
    /*global system_data*/
    $(document).ready(function(){
        load_module(system_data.data.default_page, system_data.data.default_page);
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