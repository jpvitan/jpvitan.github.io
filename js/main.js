function changeBanner(imageURL, bannerBodyHTML, platform, writtenIn){
    document.getElementById("banner-image").src = imageURL;
    document.getElementById("banner-body").innerHTML = bannerBodyHTML;
    document.getElementById("banner-platform").innerHTML = platform;
    document.getElementById("banner-written-in").innerHTML = writtenIn;
}

window.onload = function(){
    
};