let vw = 0.04266666667 * window.innerWidth;
var mySwiper = new Swiper('.swiper-container', {
	centeredSlides: true,
	loop: true,
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
	breakpoints: {
		767: {
			spaceBetween: vw,
		  }
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