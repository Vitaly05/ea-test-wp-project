/**
 * Internal Dependencies
 */
import { initScript } from '../../../../resources/js/utils/init-script'
import { verticalScroll } from '../../../../resources/js/modules/horizontal-scroll'
import YouTubePlayer from 'youtube-player'
import { stopAllVideos } from '../../../../resources/js/functions'


const init = function() {
	const $section = $( this )

  verticalScroll($('#consultation-modal'))

  $('.text-field-wrap').each(function() {
    $(this).on('click', function() {
      $(this).find('.text-field').first().trigger('focus')
    })
  })

  const modalYtPlayer = YouTubePlayer('modal-yt-player')
  const defaultVideoId = 'TyjgGSTA0QQ'
  const videoId = $('#youtube-video-modal').data('video-id')

  if (videoId) {
    modalYtPlayer.loadVideoById(videoId)
  } else {
    modalYtPlayer.loadVideoById(defaultVideoId)
  }

  modalYtPlayer.stopVideo()

  $('#youtube-video-modal').on('shown.bs.modal', function() {
    stopAllVideos()
    modalYtPlayer.playVideo()
  })

  $('#youtube-video-modal').on('hide.bs.modal', function() {
    modalYtPlayer.pauseVideo()
  })

  const modalPlayer = $('#modal__video-1').get(0)
  const modalPlayerButton = $('[data-player-id="modal__video-1"]')
  
  $('#file-video-modal').on('shown.bs.modal', function() {
    stopAllVideos()
    startPlayer(modalPlayer, modalPlayerButton)
  })

  $('#file-video-modal').on('hide.bs.modal', function() {
    stopPlayer(modalPlayer, modalPlayerButton)
  })

  $('#file-video-modal .video__player-button').each(function() {
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

  verticalScroll($('#hero-menu').parent())
  $('#hero-menu').scrollbar({
    ignoreMobile: true,
    ignoreOverlay: true,
    passive: true,
    scrollX: false
  });


  function startPlayer(player, playerButton) {
    playerButton.addClass('pause-button')
    player.play()
  }

  function stopPlayer(player, playerButton) {
    playerButton.removeClass('pause-button')
    player.pause()
  }
}


initScript( '.section-hero', 'hero', init )
