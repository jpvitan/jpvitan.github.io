AOS.init();

$(function () {
    $("#menu").load("menu.html");
    $("#navbar").load("navbar.html");
});

let toggleMeetingForm = (checked) => {
    let meetingForm = document.getElementById("meetingForm");

    document.getElementById("dateTime").required = checked;

    if (checked) {
        meetingForm.style.display = "block";
    } else {
        meetingForm.style.display = "none";
    }
}