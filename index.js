document.addEventListener("DOMContentLoaded", function () {
    "use stric";
    function adding_classes(){
        $(".nav_child_page > ul").addClass("nav nav-tabs");
        $(".nav_child_page > ul > li").addClass("nav-item");
        $(".nav_child_page > ul > li > a").addClass("nav-link");
    }
    adding_classes();
});