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
        $("#systemNameSearch").keyup(function(e){
            if(e.keyCode === 13){
                if($("#delegateListTableFilter button[type='submit']").is(":visible")){
                    $("#delegateListTableFilter button[type='submit']").trigger("click");
                }else if($("#userManagementTableFilter button[type='submit']").is(":visible")){
                    $("#userManagementTableFilter button[type='submit']").trigger("click");
                }
            }
        });
    });
</script>