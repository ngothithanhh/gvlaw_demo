document.addEventListener("DOMContentLoaded", () => {

    const awardsSwiper = new Swiper(".awardsSwiper", {
        slidesPerView: 6,
        spaceBetween: 40,
        loop: true,

        speed: 3000,

        autoplay: {
            delay: 0,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        allowTouchMove: false,
    });

});