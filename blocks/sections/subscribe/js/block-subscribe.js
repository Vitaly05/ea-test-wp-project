/**
 * Internal Dependencies
 */
import { closeAllModals } from '../../../../resources/js/functions'
import { initScript } from '../../../../resources/js/utils/init-script'

const init = function() {
	const $section = $( this )

  $('.field-wrap:not(.submit-wrap)').each(function() {
    $(this).on('click', () => {
      console.log($(this).find('.nf-element'))
      $(this).find('.nf-element').trigger('focus')
    })
  })
}

jQuery(document).on('nfFormSubmitResponse', function(e, obj) {
  let message = obj.response.data.actions.success_message

  closeAllModals()

  let modalSelector = '#js-success-modal'
  if (message.includes('&lt;error&gt;')) {
    modalSelector = '#js-error-modal'
    message = message.replace('&lt;error&gt;', '')
  }

  $(modalSelector).find('#js-modal-message').html(message)
  $(modalSelector).modal('show')
})


initScript( '.section-subscribe', 'subscribe', init )
