// JavaScript dosyası

// Yorumlar bölümünü yavaşça görünür hale getiren animasyon
window.addEventListener("load", function() {
    var commentsDiv = document.getElementById("comments");
    commentsDiv.style.opacity = "0";
    var opacity = 0;
    var timer = setInterval(function() {
        if (opacity >= 1) {
            clearInterval(timer);
        }
        commentsDiv.style.opacity = opacity.toString();
        opacity += 0.1;
    }, 100);
});
