$( document ).ready(function() {
    $(window).on("load", function () {
        $('.flexslider').flexslider({
            animation: "slide",
            slideshowSpeed: 5000,
            controlNav: false, 
            directionNav: true,
            animationSpeed: 1000, 
        });
    });
});
