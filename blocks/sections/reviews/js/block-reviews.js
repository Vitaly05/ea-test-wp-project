/**
 * Internal Dependencies
 */
import Swiper, { Navigation, Pagination } from 'swiper'
import { initScript } from '../../../../resources/js/utils/init-script'
import { verticalScroll } from '../../../../resources/js/modules/horizontal-scroll'
import customScrollbar from '../../../../resources/js/modules/custom-scrollbar'

const init = function() {
	const $section = $( this )


  const reviewsSwiper = new Swiper('#reviews__swiper', {
    modules: [Navigation, Pagination],

    loop: true,
    allowTouchMove: false,

    navigation: {
      nextEl: '#reviews__slider-button-next',
      prevEl: '#reviews__slider-button-prev',
    },

    pagination: {
      el: '#reviews__slider-pagination',
      clickable: true
    }
  })

  $('#reviews__swiper .js-custom-vertical-scroll').each(function() {
    verticalScroll($(this).parent())
    $(this).scrollbar({
      ignoreMobile: true,
      ignoreOverlay: true,
      passive: true,
      scrollX: false
    });
  })
}


initScript( '.reviews-section', 'reviews', init )
