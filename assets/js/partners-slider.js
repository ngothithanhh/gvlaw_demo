document.addEventListener("DOMContentLoaded", () => {

    const partnerSwiper = new Swiper(".partnerSwiper", {

        slidesPerView: 3,
        spaceBetween: 30,

        loop: true,

        speed: 800,

        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {

            0: {
                slidesPerView: 1,
            },

            768: {
                slidesPerView: 2,
            },

            1200: {
                slidesPerView: 3,
            }

        }

    });

});