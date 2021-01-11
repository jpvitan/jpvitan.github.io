AOS.init();

var bannerIndex = 0;
var bannerImage = ["img/banner/1.jpg", "img/banner/2.png", "img/banner/3.jpg"];
var bannerLink = ["https://play.google.com/store/apps/details?id=com.jpv.sattrack", "https://github.com/jpvitan/rsa-jpv", "#"];

var certificateIndex = 0;
var certificateImage = ["img/certificate/1.png", "img/certificate/2.png", "img/certificate/3.png"];
var certificateLink = ["https://www.youracclaim.com/badges/b97de60d-3b7c-436d-bc76-f271322f4211/linked_i", "https://www.youracclaim.com/badges/cead6c64-0a66-413c-aa78-48bce4cf7c28/public_url", "https://drive.google.com/file/d/1aoImEIzKcBpZvajhYOvYEn_B6ZqIkDkP/view"];

function updateBanner(){
    document.getElementById("bannerImage").src = bannerImage[bannerIndex];
    $("#bannerLink").attr("href", bannerLink[bannerIndex]);
    
    bannerIndex++;
    if(bannerIndex > bannerImage.length - 1){
        bannerIndex = 0;
    }
    setTimeout(updateBanner, 5000);
}

function updateCertificate(){
    document.getElementById("certificateImage").src = certificateImage[certificateIndex];
    $("#certificateLink").attr("href", certificateLink[certificateIndex]);
    
    certificateIndex++;
    if(certificateIndex > certificateImage.length - 1){
        certificateIndex = 0;
    }
    setTimeout(updateCertificate, 2000);
}

window.onload = function(){
    updateBanner();
    updateCertificate();
};