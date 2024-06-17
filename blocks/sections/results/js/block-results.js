/**
 * Internal Dependencies
 */
import Swiper, { EffectCoverflow, Navigation, Pagination } from 'swiper'
import { initScript } from '../../../../resources/js/utils/init-script'

const init = function() {
	const $section = $( this )


  const resultsTextSwiper = new Swiper('#results-text__swiper', {
    centeredSlides: true,
    loop: true,
    allowTouchMove: false,
  })

  const resultsSwiper = new Swiper('#results__swiper', {
    modules: [Navigation, Pagination, EffectCoverflow],
    
    effect: 'coverflow',
    slidesPerView: 3,
    centeredSlides: true,
    loop: true,
    allowTouchMove: false,

    coverflowEffect: {
      rotate: 0,
      stretch: 10,
      depth: 100,
      modifier: 1.1,
      scale: 0.9,
      slideShadows: false,
    },

    navigation: {
      nextEl: '#results__slider-button-next',
      prevEl: '#results__slider-button-prev',
    },

    pagination: {
      el: '#results__slider-pagination',
      clickable: true
    },
  })

  resultsSwiper.on('slideNextTransitionStart', () => {
    resultsTextSwiper.slideNext()
  })

  resultsSwiper.on('slidePrevTransitionStart', () => {
    resultsTextSwiper.slidePrev()
  })

  $('.result-slider').each(function() {
    $(this).beforeAfter()
  })
}


initScript( '.results-section', 'results', init )
