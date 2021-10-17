var $ = jQuery;

export function toggleMenu(e) {
    let target = $(e.currentTarget);

    if (target.hasClass("deskop_menu")) {
        target.toggleClass("active");
        $(".mobile_menu").toggleClass("active");
        $(".primary_menu").toggleClass("active");

        if ($(".backgroud_overlay").hasClass("active")) {
            $(".backgroud_overlay").removeClass("active");
        }

        if ($("header").hasClass("sticky_header")) {
            $("header").addClass("mobile_view");
        }
    }

    if (target.hasClass("mobile_menu")) {
        target.toggleClass("active");
        $(".deskop_menu").toggleClass("active");
        $(".primary_menu").toggleClass("active");

        if (!$(".backgroud_overlay").hasClass("active")) {
            $(".backgroud_overlay").addClass("active");
        } else {
            target.find(".fas").css({
                color: "#afcb05",
            });
        }

        if ($("header").hasClass("sticky_header")) {
            $("header").removeClass("mobile_view");
        }
    }
}

export function makeHeaderSticky(e) {
    let height = $(window).scrollTop(); //getting the scrolling height of window

    if ($(".primary_menu").hasClass("active")) return;

    if (height > 400) {
        $(".backgroud_overlay").addClass("active");
        $("header").addClass("sticky_header");
        $(".menu .links li:nth-child(2) > a").addClass("scroll_view_btn");
    } else {
        $(".backgroud_overlay").removeClass("active");
        $("header").removeClass("sticky_header");
        $(".menu .links li:nth-child(2) > a").removeClass("scroll_view_btn");
    }
}

export function scrollDown(e) {
    $("html, body").animate({ scrollTop: 600 }, "50");
}
