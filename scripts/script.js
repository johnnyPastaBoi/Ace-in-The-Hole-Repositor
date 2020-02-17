$(document).ready(function() {

    $(".hamburger-box").on("click", function() {

        $(".hamburger").toggleClass("is-active");

        $("#nav_ul").slideToggle();
    });

    var $window = $(window);
    var $pane = $('#pane1');

    function checkWidthDesktop() {
        var windowsize = $window.width();
        if (windowsize > 800) {
            $("#nav_ul").css("display", "inline-block");
            $(".hamburger").css('display', 'none');
            let active = $(".hamburger").hasClass("is-active");
            if (active == true) {
                $(".hamburger").toggleClass("is-active");
            }
        }
    }
    checkWidthDesktop();
    $(window).resize(checkWidthDesktop);

    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize < 800) {
            $("#nav_ul").css("display", "none");
            $(".hamburger").css('display', 'block');

        }
    }
    checkWidth();
    $(window).resize(checkWidth);
});
//Slick initializer.
$(document).ready(function() {
    $('.slide_show').slick({
        autoplay: true,
        autoplaySpeed: 3500,
        swipe: false,
        arrows: true,
        dots: false,
        responsive: [{

            breakpoint: 800,
            settings: {
                dots: true,
            },
            breakpoint: 1200,
            settings: {
                swipe: true,
                arrows: false

            }
        }]
});
//Width changer for social and weather sections
$(window).load(function() {
    let section_height = $(".para").height();
    let screen_width = $(window).width();
    
    if (screen_width < 800) {
        console.log("height change works");
    } else {
        $(".weather").css("height", section_height + 20);
    }

    $(".social").css("height", section_height + 20);
    });

});
//Weather initializer.
! function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (!d.getElementById(id)) {
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://weatherwidget.io/js/widget.min.js';
        fjs.parentNode.insertBefore(js, fjs);
    }
}(document, 'script', 'weatherwidget-io-js');