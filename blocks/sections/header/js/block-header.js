/**
 * Internal Dependencies
 */
import { initScript } from '../../../../resources/js/utils/init-script'

const init = function() {
	const $section = $( this )
  
  const menuButton = document.querySelector('.js-menu-button')
  const headerMenu = document.querySelector('.js-header-menu')
  
  const headerMenuShowClass = 'header__menu--show'
  
  menuButton.addEventListener('click', () => {
    if (headerMenu.classList.contains(headerMenuShowClass)) {
      headerMenu.classList.remove(headerMenuShowClass)
    } else {
      headerMenu.classList.add(headerMenuShowClass)
    }
  })

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      console.log($('.js-sticky-header'), $('.js-sticky-header').first())
      if (!entry.isIntersecting) {
        $('.js-sticky-header').addClass('header__sticky--collapse')
      } else {
        $('.js-sticky-header').removeClass('header__sticky--collapse')
      }
    })
  }, {
    threshold: 0.15
  })

  const target = document.querySelector('.section-hero')
  observer.observe(target)
}

initScript( '.header', 'header', init )
