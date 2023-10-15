const navBtn = document.querySelector('.nav__btn')
const menu = document.querySelector('.nav__menu')

const pastBtn = document.querySelector('.events__btns-past')
const eventsBtns = document.querySelectorAll('.events__btns-btn')
const upcomingBtn = document.querySelector('.events__btns-upcoming')
const allEvents = document.querySelectorAll('.events__calendar-box')

navBtn.addEventListener('click', () => {
	menu.classList.toggle('active')
	navBtn.classList.toggle('active')
})

upcomingBtn.addEventListener('click', () => {
	upcomingBtn.classList.add('active')
	upcomingBtn.previousElementSibling.classList.remove('active')
	checkEvents()
	checkUpcomingEvents()
})

pastBtn.addEventListener('click', () => {
	pastBtn.classList.add('active')
	pastBtn.nextElementSibling.classList.remove('active')
	checkEvents()
	eventsError.textContent = ''
})

function checkEvents() {
	allEvents.forEach(event => {
		if (pastBtn.classList.contains('active') && event.id === 'past') {
			event.classList.add('past-event')
		} else {
			event.classList.remove('past-event')
		}
		if (upcomingBtn.classList.contains('active') && event.id === 'upcoming') {
			event.classList.add('upcoming-event')
		} else {
			event.classList.remove('upcoming-event')
		}
	})
}

checkEvents()

const upcomingEvents = document.getElementsByClassName('upcoming-event')
const eventsError = document.querySelector('.events__calendar-error')
function checkUpcomingEvents() {
	index = 0
	if (upcomingEvents.length > index) {
		eventsError.textContent = ''
	} else {
		eventsError.textContent = 'There is no upcoming event'
	}
	// console.log(upcomingEvents)
}

// checkUpcomingEvents()

// checkEvents()

const swiper = new Swiper('.header__slider', {
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
		el: '.header__pagination',
	},

	// Navigation arrows
	navigation: {
		nextEl: '.header__next',
		prevEl: '.header__prev',
	},

	// And if we need scrollbar
	scrollbar: {
		el: '.header__scrollbar',
	},
})

const gallerySwiper = new Swiper('.gallery__swiper', {
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
		el: '.gallery__pagination',
	},

	centeredSlides: true,

	// Navigation arrows
	navigation: {
		nextEl: '.gallery__next',
		prevEl: '.gallery__prev',
	},

	// Breakpoints

	breakpoints: {
		640: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 30,
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 35,
		},
	},
})
