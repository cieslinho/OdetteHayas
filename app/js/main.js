const navBtn = document.querySelector('.nav__btn')
const menu = document.querySelector('.nav__menu')

navBtn.addEventListener('click', () => {
	menu.classList.toggle('active')
	navBtn.classList.toggle('active')
})

const swiper = new Swiper('.swiper', {
	// Optional parameters
	// direction: 'vertical',
	loop: true,

	// autoplay

	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},

	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
	},

	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

	// And if we need scrollbar
	scrollbar: {
		el: '.swiper-scrollbar',
	},
})
