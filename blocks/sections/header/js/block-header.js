/**
 * Internal Dependencies
 */
import { verticalScroll } from '../../../../resources/js/modules/horizontal-scroll'
import { initScript } from '../../../../resources/js/utils/init-script'

const init = function() {
	const $section = $( this )

  const menuButton = document.querySelector('.js-menu-button')
  const headerMenu = document.querySelector('.js-header-menu')
  
  const headerMenuShowClass = 'header__menu--show'
  
  menuButton.addEventListener('click', () => {
    if (headerMenu.classList.contains(headerMenuShowClass)) {
      headerMenu.classList.remove(headerMenuShowClass)
      setTabIndex('.js-header-menu a', -1)
    } else {
      headerMenu.classList.add(headerMenuShowClass)
      setTabIndex('.js-header-menu a', 0)
    }
  })

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        $('.js-sticky-header').addClass('header__sticky--collapse')
      } else {
        $('.js-sticky-header').removeClass('header__sticky--collapse')
      }
    })
  })

  const target = document.querySelector('.js-collapse-header')
  observer.observe(target)

  setTabIndex('.js-header-menu a', -1)

  verticalScroll($('#header-menu__navigation').parent())
  $('#header-menu__navigation').scrollbar({
    ignoreMobile: true,
    ignoreOverlay: true,
    passive: true,
    scrollX: false
  });

  function setTabIndex(selector, value) {
    $(selector).each(function() {
      $(this).attr('tabindex', value)
    })
  }
}

initScript( '.header', 'header', init )
