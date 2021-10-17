import { toggleMenu, makeHeaderSticky, scrollDown } from "./headerFuntions";

var $ = jQuery;

export function initiateEvents() {
    $(".deskop_menu").click(toggleMenu);
    $(".mobile_menu").click(toggleMenu);
    $(window).scroll(makeHeaderSticky);
    $(".scroller").click(scrollDown);
}
