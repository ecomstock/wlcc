import utilities from "./utilities.js";

$(document).ready(function(){

    loadHeader();
    loadFooter();
    loadDate();

    function loadHeader () {
        const $header = $(".header");
        $header.load("header.html", activateNav);
    }

    function loadFooter () {
        const $footer = $("#footer");
        $footer.load("footer.html", loadDate);
    }

    function loadDate () {
        const year = utilities.getYear().toString();
        const $date = $("#date");
        $date.html(`&copy; WLCC ${year}`);
    }

    function activateNav () {
        const clippedPath = location.pathname.split("westlinnchorus.org/")[1];
        const $activeElement = $(`a[href='${clippedPath}']`);
        $activeElement.addClass("active");
    }
});