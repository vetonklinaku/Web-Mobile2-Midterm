window.onscroll = function () {scrollFunction()};
var scrollToTopButton = document.getElementById("showButton");
var mainButton = document.getElementById("butoni");
function scrollFunction() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        scrollToTopButton.className = "buttonScroll-visible";
    } else if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        mainButton.style.opacity = "1";
    } else if (document.body.scrollTop < 150 || document.documentElement.scrollTop < 150) {
        scrollToTopButton.className = "buttonScroll-hidden";
    }
}