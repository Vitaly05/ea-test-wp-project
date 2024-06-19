/**
 * Internal Dependencies
 */
import { initScript } from '../../../../resources/js/utils/init-script'

const init = function() {
	const $section = $( this )

}

jQuery(document).on('nfFormSubmitResponse', function(e, obj) {
  let message = obj.response.data.actions.success_message
  $('#js-success-modal').find('#js-modal-message').html(message)
  $('#js-success-modal').modal('show')
})


initScript( '.section-subscribe', 'subscribe', init )