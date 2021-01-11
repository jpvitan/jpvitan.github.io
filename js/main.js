AOS.init();

var bannerIndex = 0;
var bannerImage = ["img/banner/1.jpg", "img/banner/2.png", "img/banner/3.jpg"];
var bannerLink = ["https://play.google.com/store/apps/details?id=com.jpv.sattrack", "https://github.com/jpvitan/rsa-jpv", "#"];

function updateBanner(){
    document.getElementById("bannerImage").src = bannerImage[bannerIndex];
    $("#bannerLink").attr("href", bannerLink[bannerIndex]);
    
    bannerIndex++;
    if(bannerIndex > bannerImage.length - 1){
        bannerIndex = 0;
    }
    setTimeout(updateBanner, 5000);
}

window.onload = function(){
    updateBanner();
};