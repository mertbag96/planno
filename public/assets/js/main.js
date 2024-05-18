$(document).scroll( function () {
    if(window.scrollY > 0) {
        $("header").addClass("shadow-sm");
    }
    else {
        $("header").removeClass("shadow-sm");
    }
});

$(".cookie-allow").on("click", function () {
    $(".cookie-setting input").prop("checked", true);
    setTimeout( function () {
        $(".cookie").hide();
    }, 250);
});

$(".cookie-customize").on("click", function () {
    $(".cookie-description").hide();
    $(".cookie-customize").hide();
    $(".cookie-selection").show();
    $(".cookie-settings").show();
});

$(".cookie-selection").on("click", function () {
    $(".cookie").hide();
});
