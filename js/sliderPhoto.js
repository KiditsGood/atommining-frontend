const swiper = new Swiper('.slider', {
    navigation: {
        nextEl: '.image--next',
        prevEl: '.image--prev',
    }
})

const swiper2 = new Swiper('.media__slider-field', {
    slidesPerView: 3,
    navigation: {
        nextEl: '.video--next',
        prevEl: '.video--prev'
    },
    breakpoints: {
        360: {
            slidesPerView: 1
        },
        660: {
            slidesPerView: 2
        },
        960: {
            slidesPerView: 3
        }
    }
})