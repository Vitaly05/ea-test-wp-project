/**
 * Internal Dependencies
 */
import { initScript } from '../../../../resources/js/utils/init-script'

const init = function() {
	const $section = $( this )


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

  $('#js-load-more-button').on('click', appendImages)

  function appendImages() {
    let i = 0
    const container = $('#js-gallery-photos')

    let appendInterval
    appendInterval = setInterval(() => {
      if (i === images.length) {
        clearInterval(appendInterval)
      } else {
        container.append(`
        <a class="photo-card" aria-label="Открыть фотографию на весь экран">
          <span class="background-img">
            <img class="photo-card__img" src="${images[i++]}"
              alt="Фото из галереи">
            <span class="background-filter"></span>
          </span>
          <span class="photo-card__title">Personal Training</span>
          <span class="photo-card__text">5 Photos</span>
        </a>
        `)
      }
    }, 1000)
  }
  

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


initScript( '.section-gallery', 'gallery', init )
