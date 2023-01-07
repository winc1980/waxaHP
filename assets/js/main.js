let vw = 0.04266666667 * window.innerWidth;
var mySwiper = new Swiper('.swiper-container', {
    centeredSlides: true,
    slidesPerView: 5,
    loop: true,
    autoHeight: true,
    spaceBetween: 10,
    centeredSlides: true,
    breakpoints: {
        767: {
            spaceBetween: vw,
            slidesPerView: 1,
        }
    },
    autoplay: {
        delay: 3000,
        stopOnLastSlide: false,
        disableOnInteraction: false,
        reverseDirection: false
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    }
});