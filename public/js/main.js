$(".carousel.carousel-slider").carousel({
    fullWidth: true,
    indicators: true,
    autoplay: true
});
autoplay();
function autoplay() {
    $(".carousel").carousel("next");
    setTimeout(autoplay, 4000);
}
