jQuery(function () {
    jQuery(window).scroll(function () {
        if(jQuery(this).scrollTop() > 100) {
            $("mobilenav").addClass("mobilemenu");
        } else {
            $("mobilenav").removeClass("mobilemenu");
        }
    });
});
