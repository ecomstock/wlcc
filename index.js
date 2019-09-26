$(document).ready(function(){

    loadHeader();
    loadFooter();
    loadDate();

    function loadHeader (callback) {
        const $header = $("#header");
        $header.load("header.html", navActivator);
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

    function navActivator () {
        //$("#home").addClass("active");
        //$('a[href="./' + location.pathname.split("/")[1] + '"]').addClass('active');
        //console.log(location.pathname.split("/")[1]);
    }
    //$('nav a[href="./' + location.pathname.split("/")[1] + '"]').addClass('active');

});