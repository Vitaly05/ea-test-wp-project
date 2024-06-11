/**
 * Internal Dependencies
 */
import { initScript } from '../../../../resources/js/utils/init-script'
import horizontalScroll, { verticalScroll } from '../../../../resources/js/modules/horizontal-scroll';


const init = function() {
	const $section = $( this );

  verticalScroll($('#consultation-modal'))



  // OFFERS

  horizontalScroll($('#trainings-section__offers'))



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
