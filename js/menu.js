jQuery(function () {
    jQuery(window).scroll(function () {
        if(jQuery(this).scrollTop() > 400) {
            $("nav").addClass("menu");
        } else {
            $("nav").removeClass("menu");
        }
    });
});

