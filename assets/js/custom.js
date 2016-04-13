$(document).ready(function () {

    $(".reg-btn-next").click(function () {
        var ths = $(this);
        var container = ths.closest('.reg-form');

        container.hide();
        container.next().fadeIn();
    });

    $(".reg-btn-prev").click(function () {
        var ths = $(this);
        var container = ths.closest('.reg-form');

        container.hide();
        container.prev().fadeIn();
    });

    $("#reg-add-member").click(function () {
        var con = $(".reg-form-member");
        con.slideDown();
        con.find('form')[0].reset();
    });

    $(".btn-form-cancel, .btn-form-save").click(function () {
        var con = $(this).closest(".btn-form-con");
        con.slideUp();
        con.find('form')[0].reset();
    });

    $(".reg-form-4 .reg-btn-prev, .reg-form-4 .reg-btn-next").click(function () {
        var con = $(".reg-form-4 .btn-form-con");
        if (con.css("display") == "block") {
            con.hide();
            con.find('form')[0].reset();
        }
    });
});
