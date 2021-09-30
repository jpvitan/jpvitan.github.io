AOS.init();

window.onload = function () {
    $(function () {
        $("#menu").load("menu.html");
        $("#navbar").load("navbar.html");
        $("#footer").load("footer.html");
    });
};

// var figure1Container = document.getElementById("figure1Container");
// var figure1ContainerHasAppeared = false;

// var figure2Container = document.getElementById("figure2Container");
// var figure2ContainerHasAppeared = false;

// var figure1 = document.getElementById("figure1");
// var figure2 = document.getElementById("figure2");

// var figure1Value = 0;
// var figure2Value = 0;

// var figure1MaxValue = 5;
// var figure2MaxValue = 7;

// var counterFigure1 = () => {
//     if (figure1Value >= figure1MaxValue) {
//         return;
//     }
//     if (figure1Value < figure1MaxValue) {
//         figure1Value++;
//     }
//     figure1.innerHTML = figure1Value;
//     setTimeout(counterFigure1, 250);
// }

// var counterFigure2 = () => {
//     if (figure2Value >= figure2MaxValue) {
//         return;
//     }
//     if (figure2Value < figure2MaxValue) {
//         figure2Value++;
//     }
//     figure2.innerHTML = figure2Value;
//     setTimeout(counterFigure2, 250);
// }

// window.addEventListener('scroll', (e) => {
//     if (figure1Container.classList.contains("aos-animate") && !figure1ContainerHasAppeared) {
//         figure1ContainerHasAppeared = true;
//         counterFigure1();
//     }
//     if (figure2Container.classList.contains("aos-animate") && !figure2ContainerHasAppeared) {
//         figure2ContainerHasAppeared = true;
//         counterFigure2();
//     }
// });