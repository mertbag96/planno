$(document).scroll( function () {
    if(window.scrollY > 0) {
        $("header").addClass("shadow-sm");
    }
    else {
        $("header").removeClass("shadow-sm");
    }
});
