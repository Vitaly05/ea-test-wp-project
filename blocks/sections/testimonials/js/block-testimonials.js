/**
 * Internal Dependencies
 */
import { stopAllVideos } from '../../../../resources/js/functions'
import { initScript } from '../../../../resources/js/utils/init-script'

const init = function() {
	const $section = $( this )


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
}


initScript( '.section-testimonials', 'testimonials', init )
