var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

AOS.init();

$(function () {
    $("#menu").load("menu.html");
    $("#navbar").load("navbar.html");
    $("#footer").load("footer.html");
});
