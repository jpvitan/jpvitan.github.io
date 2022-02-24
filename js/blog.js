AOS.init();

$(function () {
    $("#menu").load("menu.html");
    $("#navbar").load("navbar.html");

    let setFillerHeight = () => {
        let filler = document.getElementById("filler");
        let fillerY = $("#filler").offset().top;

        let footer = document.getElementById("footer");
        let footerHeight = footer.getBoundingClientRect().height;

        let clientHeight = document.documentElement.clientHeight;

        let fillerHeight = clientHeight - fillerY - footerHeight;

        if (fillerHeight < 0) {
            filler.style.height = 0 + "px";
        } else {
            filler.style.height = fillerHeight + "px";
        }
    }

    window.addEventListener('resize', setFillerHeight);
    window.onload = setFillerHeight;

    $("#footer").load("footer.html", setFillerHeight);
});