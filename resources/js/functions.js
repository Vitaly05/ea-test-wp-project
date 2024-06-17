export function stopAllVideos() {
  $('.testimonials__video').each(function() {
    $(this).find('video').get(0).pause()
    $(this).find('.video__player-button').removeClass('pause-button')
  })
}