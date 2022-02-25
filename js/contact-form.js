AOS.init();

window.onload = function () {
    var button = document.getElementById("button");
    button.onclick = function () {
        if (button.value == 0) {
            location.href = "/";
        } else if (button.value == 1) {
            history.go(-1);
        }
    };
};
