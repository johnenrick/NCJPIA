$(document).ready(function () {

    $(".reg-btn-next").click(function () {
//        var ths = $(this);
//        var container = ths.closest('.reg-form');
//
//        container.hide();
//        container.next().fadeIn();
    });

    $(".reg-btn-prev").click(function () {
        var ths = $(this);
        var container = ths.closest('.reg-form');

        container.hide();
        container.prev().fadeIn();
    });

    

    $(".btn-form-cancel").click(function () {
        var con = $(this).closest(".btn-form-con");
        con.slideUp();
    });

    $(".reg-form-4 .reg-btn-prev, .reg-form-4 .reg-btn-next").click(function () {
//        var con = $(".reg-form-4 .btn-form-con");
////        if (con.css("display") == "block") {
////            con.hide();
////        }
    });

    $("#reg-option button[name=op-reg]").click(function(){
        var btn = $(this);
        btn.parent().hide();
        $("#reg-module").fadeIn();
    });
    $("#reg-option button[name=op-con]").click(function(){
        var btn = $(this);
        btn.parent().hide();
        $("#con-module").fadeIn();
    });

//    $(".reg-btn-submit").click(function(){
//        $(".hide-module:not(#success-module)").hide();
//        $("#success-module").fadeIn();
//    })
});
