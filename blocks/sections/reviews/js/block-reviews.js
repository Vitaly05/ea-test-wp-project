/**
 * Internal Dependencies
 */
import Swiper, { Navigation, Pagination } from 'swiper'
import { initScript } from '../../../../resources/js/utils/init-script'

const init = function() {
	const $section = $( this )


  const reviewsSwiper = new Swiper('#reviews__swiper', {
    modules: [Navigation, Pagination],

    loop: true,

    navigation: {
      nextEl: '#reviews__slider-button-next',
      prevEl: '#reviews__slider-button-prev',
    },

    pagination: {
      el: '#reviews__slider-pagination',
      clickable: true
    }
  })
}


initScript( '.reviews-section', 'reviews', init )
