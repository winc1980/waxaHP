let vw = 0.04266666667 * window.innerWidth;
var mySwiper = new Swiper('.swiper-container', {
    centeredSlides: true,
    loop: true,
    autoHeight: true,
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
    breakpoints: {
        767: {
            spaceBetween: vw,
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