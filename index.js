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
        const path = findPath();
        const $activeElement = $(`a[href="${path}"]`);
        $activeElement.addClass("active");
    }

    function findPath () {
        const clippedPath = location.pathname.split("/")[1];
        if (!clippedPath) {
            $("#modal-index").modal();
            return "index.html";
        } else {
            return clippedPath;
        }
    }
});