AOS.init();

var bannerIndex = 0;
var bannerImage = ["img/banner/1.png", "img/banner/2.png", "img/banner/3.png"];
var bannerText = ["*Google Play and the Google Play logo are trademarks of Google LLC.", "github.com/jpvitan/rsa-jpv", "Welcome to my website!"];

function updateBanner(){
    document.getElementById("bannerImage").src = bannerImage[bannerIndex];
    document.getElementById("bannerText").innerHTML = bannerText[bannerIndex];
    
    bannerIndex++;
    if(bannerIndex > bannerImage.length - 1){
        bannerIndex = 0;
    }
    setTimeout(updateBanner, 8000);
}

window.onload = function(){
    updateBanner();
};