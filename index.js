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
        const year = getYear().toString();
        const $date = $("#date");
        $date.html(`&copy; WLCC ${year}`);
    }

    function getYear () {
        const year = new Date().getFullYear();
        return year
    }

    function activateNav () {
        const clippedPath = location.pathname.split("wlcc/")[1];
        const $activeElement = $(`a[href='${clippedPath}']`);
        $activeElement.addClass("active");
        //$('a[href="./' + location.pathname.split("wlcc/")[1] + '"]').addClass("active");
    }
});