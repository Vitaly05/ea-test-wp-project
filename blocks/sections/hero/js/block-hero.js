/**
 * Internal Dependencies
 */
import { initScript } from '../../../../resources/js/utils/init-script'
import horizontalScroll, { verticalScroll } from '../../../../resources/js/modules/horizontal-scroll';
import Swiper, { Navigation, Pagination, EffectCoverflow } from 'swiper';


const init = function() {
	const $section = $( this );

  verticalScroll($('#consultation-modal'))

  $('.text-field-wrap').each(function() {
    $(this).on('click', function() {
      $(this).find('.text-field').first().trigger('focus')
    })
  })


  const modalPlayer = $('#modal__video-1').get(0)
  const modalPlayerButton = $('[data-player-id="modal__video-1"]')
  
  $('#video-modal').on('shown.bs.modal', function() {
    startPlayer(modalPlayer, modalPlayerButton)
  })

  $('#video-modal').on('hide.bs.modal', function() {
    stopPlayer(modalPlayer, modalPlayerButton)
  })

  $('#video-modal .video__player-button').each(function() {
    $(this).on('click', function() {
      const playerId = $(this).data('playerId')
      const player = $(`#${playerId}`).get(0)
      if (!player) return

      if (player.paused) {
        startPlayer(player, $(this))
      } else {
        stopPlayer(player, $(this))
      }
    })
  })

  function startPlayer(player, playerButton) {
    playerButton.addClass('pause-button')
    player.play()
  }

  function stopPlayer(player, playerButton) {
    playerButton.removeClass('pause-button')
    player.pause()
  }


  // OFFERS

  horizontalScroll($('#trainings-section__offers'))



  // REVIEWS

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
  });


  // RESULTS

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
  });

  $('.result-slider').each(function() {
    $(this).beforeAfter()
  })


  // TESTIMONIALS

  $('#testimonials-section .video__player-button').each(function() {
    $(this).on('click', function() {
      const playerId = $(this).data('playerId')
      const player = $(`#${playerId}`).get(0)
      if (!player) return

      if (player.paused) {
        stopAllVideos()
        $(this).addClass('pause-button')
        player.play()
      } else {
        player.pause()
        $(this).removeClass('pause-button')
      }
    })
  })

  function stopAllVideos() {
    $('.testimonials__video').each(function() {
      $(this).find('video').get(0).pause()
      $(this).find('.video__player-button').removeClass('pause-button')
    })
  }



  // GALLERY

  const slider = document.querySelector('.js-gallery-slider')
  const sliderPhoto = slider.querySelector('.slider__photo')

  const images = []
  $('.gallery__photos .photo-card__img').each(function(i) {
    images.push($(this).attr('src'))

    const sliderRound = $('<button class="slider__round"></button>')
    sliderRound.on('click', function() {
      if ($(this).hasClass('slider__round--active')) {
        return
      }
      currentIndex = i
      onSliderMove(currentIndex)
    })
    $('.js-gallery-slider .slider__rounds').append(sliderRound)
  })

  let currentIndex = 0

  $('.gallery__photos .photo-card').each(function() {
    const imageSrc = $(this).find('.photo-card__img').attr('src')

    $(this).on('click', function(e) {
      e.preventDefault()
      e.stopPropagation()

      currentIndex = images.indexOf(imageSrc)
      onOpenSlider(currentIndex)
      slider.showModal()
    })
  })

  slider.querySelector('.js-slider-next').addEventListener('click', (e) => {
    e.preventDefault()
    e.stopPropagation()

    if (currentIndex === images.length - 1) {
      currentIndex = 0
    } else {
      ++currentIndex
    }

    onSliderMove(currentIndex)
  })

  slider.querySelector('.js-slider-prev').addEventListener('click', (e) => {
    e.preventDefault()
    e.stopPropagation()

    if (currentIndex === 0) {
      currentIndex = images.length - 1
    } else {
      --currentIndex
    }

    onSliderMove(currentIndex)
  })

  $('.js-gallery-close').on('click', function() {
    slider.close()
  })

  let transitionTimeout

  function onOpenSlider(index) {
    activateSliderRound(index)
    sliderPhoto.src = images[index]
  }

  function onSliderMove(index) {
    activateSliderRound(index)

    clearTimeout(transitionTimeout)
    sliderPhoto.classList.add('slider__photo--transition')
    transitionTimeout = setTimeout(() => {
      sliderPhoto.classList.remove('slider__photo--transition')
      sliderPhoto.src = images[index]
    }, 300)
  }

  function activateSliderRound(index) {
    $('.js-gallery-slider .slider__round').removeClass('slider__round--active')
    $(`.js-gallery-slider .slider__round:nth-child(${index + 1})`).addClass('slider__round--active')
  }
}


initScript( '.section-hero', 'hero', init )
