<?php
/**
 * Block Footer.
 *
 * @var array $block The block settings and attributes.
 * @var string $content The block inner HTML (empty).
 * @var bool $is_preview True during AJAX preview.
 * @var $post_id (int|string) The post ID this block is saved to.
 */

/**
 * Block preview image
 */
if (isset($block['data']['block_preview_images'])) {
  hm_get_template_part_with_params('fragments/block-preview-image', ['block' => $block]);
  return;
}

/**
 * Block Variables
 */

$section_title = get_field('testimonials_section_title');
?>

<section class="section-testimonials">
  <div class="testimonials" id="testimonials-section">
    <div class="testimonials-bg"></div>
    <div class="container">
      <div class="section-title testimonials__section-title">Testimonials</div>
      <div class="testimonials__videos-panel">
        <div class="testimonials__video video">
          <video id="testimonials__video-1"
            poster="/wp-content/themes/testproject/resources/videos/testimonials/poster-1.jpg">
            <source src="/wp-content/themes/testproject/resources/videos/testimonials/t-1.mp4" type="video/mp4" />
          </video>
          <button class="button-icon button-icon--transparent video__player-button"
            data-player-id="testimonials__video-1">
            <svg class="play-icon" width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M9.96582 6.01218V43.9933C9.96582 44.8968 10.9247 45.4778 11.7256 45.0596L47.9645 26.1338C48.8245 25.6847 48.8262 24.4544 47.9674 24.0028L11.7286 4.94748C10.9276 4.52628 9.96582 5.10717 9.96582 6.01218Z"
                fill="#FF368A" />
            </svg>
            <svg class="pause-icon" width="30" height="40" viewBox="0 0 30 40" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0 2V38C0 39.1046 0.89543 40 2 40H8C9.10457 40 10 39.1046 10 38V2C10 0.89543 9.10457 0 8 0H2C0.895431 0 0 0.895431 0 2Z"
                fill="#FF368A" />
              <path
                d="M20 2V38C20 39.1046 20.8954 40 22 40H28C29.1046 40 30 39.1046 30 38V2C30 0.89543 29.1046 0 28 0H22C20.8954 0 20 0.895431 20 2Z"
                fill="#FF368A" />
            </svg>
          </button>
        </div>
        <div class="testimonials__video video">
          <video id="testimonials__video-2"
            poster="/wp-content/themes/testproject/resources/videos/testimonials/poster-2.jpg">
            <source src="/wp-content/themes/testproject/resources/videos/testimonials/t-2.mp4" type="video/mp4" />
          </video>
          <button class="button-icon button-icon--transparent video__player-button"
            data-player-id="testimonials__video-2">
            <svg class="play-icon" width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M9.96582 6.01218V43.9933C9.96582 44.8968 10.9247 45.4778 11.7256 45.0596L47.9645 26.1338C48.8245 25.6847 48.8262 24.4544 47.9674 24.0028L11.7286 4.94748C10.9276 4.52628 9.96582 5.10717 9.96582 6.01218Z"
                fill="#FF368A" />
            </svg>
            <svg class="pause-icon" width="30" height="40" viewBox="0 0 30 40" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0 2V38C0 39.1046 0.89543 40 2 40H8C9.10457 40 10 39.1046 10 38V2C10 0.89543 9.10457 0 8 0H2C0.895431 0 0 0.895431 0 2Z"
                fill="#FF368A" />
              <path
                d="M20 2V38C20 39.1046 20.8954 40 22 40H28C29.1046 40 30 39.1046 30 38V2C30 0.89543 29.1046 0 28 0H22C20.8954 0 20 0.895431 20 2Z"
                fill="#FF368A" />
            </svg>
          </button>
        </div>
        <div class="testimonials__video video">
          <video id="testimonials__video-3"
            poster="/wp-content/themes/testproject/resources/videos/testimonials/poster-3.jpg">
            <source src="/wp-content/themes/testproject/resources/videos/testimonials/t-3.mp4" type="video/mp4" />
          </video>
          <button class="button-icon button-icon--transparent video__player-button"
            data-player-id="testimonials__video-3">
            <svg class="play-icon" width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M9.96582 6.01218V43.9933C9.96582 44.8968 10.9247 45.4778 11.7256 45.0596L47.9645 26.1338C48.8245 25.6847 48.8262 24.4544 47.9674 24.0028L11.7286 4.94748C10.9276 4.52628 9.96582 5.10717 9.96582 6.01218Z"
                fill="#FF368A" />
            </svg>
            <svg class="pause-icon" width="30" height="40" viewBox="0 0 30 40" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0 2V38C0 39.1046 0.89543 40 2 40H8C9.10457 40 10 39.1046 10 38V2C10 0.89543 9.10457 0 8 0H2C0.895431 0 0 0.895431 0 2Z"
                fill="#FF368A" />
              <path
                d="M20 2V38C20 39.1046 20.8954 40 22 40H28C29.1046 40 30 39.1046 30 38V2C30 0.89543 29.1046 0 28 0H22C20.8954 0 20 0.895431 20 2Z"
                fill="#FF368A" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
\Harbinger_Marketing\Modal_Action::render_modals();