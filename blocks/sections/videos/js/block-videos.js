/**
 * Internal Dependencies
 */
import Swiper, { Navigation, Pagination } from 'swiper'
import { initScript } from '../../../../resources/js/utils/init-script'

const init = function() {
	const $section = $( this )

  const mainVideoSwiper = new Swiper('#js-main-video-swiper', {
    loop: true,
    allowTouchMove: false
  })

  const othersVideoSwiper = new Swiper('#js-others-video-swiper', {
    modules: [Navigation, Pagination],

    loop: true,
    slidesPerView: 2,
    initialSlide: 1,
    spaceBetween: 25,
    allowTouchMove: false,

    navigation: {
      nextEl: '#videos__slider-button-next',
      prevEl: '#videos__slider-button-prev',
    },

    pagination: {
      el: '#videos__slider-pagination',
      clickable: false
    }
  })


  othersVideoSwiper.on('slideNextTransitionStart', function() {
    mainVideoSwiper.slideNext()
  })

  othersVideoSwiper.on('slidePrevTransitionStart', function() {
    mainVideoSwiper.slidePrev()
  })

  mainVideoSwiper.on('slideChange', function(e) {
    $('#js-main-video-swiper video').each(function() {
      $(this).get(0).pause()
      $(this).parent().find('.video__poster').removeClass('video__poster--hidden')
    })
    $(e.wrapperEl).find('.video__poster').each(function() {
      $(this).addClass('video__poster--hidden')
    })
    $(e.slides[e.activeIndex]).find('video').get(0).play()
  })

  $('.js-poster-play-button').each(function() {
    const posterEl = $(this).parent()
    const videoEl = $(this).parents('.swiper-slide').find('video')
    const player = videoEl.get(0)
    
    $(this).on('click', function() {
      player.play()
      posterEl.addClass('video__poster--hidden')
    })

    videoEl.on('click', function() {
      player.pause()
      posterEl.removeClass('video__poster--hidden')
    })
  })
}


initScript( '.section-videos', 'videos', init )
