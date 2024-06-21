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

$section_title = get_field('title');
$section_text = get_field('text');
$videos = get_field('videos');
$video_type = $videos['type'];
$youtube_videos = $videos['youtube_videos'];
$file_videos = $videos['file_videos'];

?>

<section class="section-videos">
  <div class="container">
    <div class="section-videos__wrap">
      <div class="section-title">
        <?php echo $section_title; ?>
      </div>
      <div class="section-text section-videos__text">
        <?php echo $section_text; ?>
      </div>
      <div class="section-videos__videos">
        <div class="section-videos__bg"></div>
        <div class="videos__main-video">
          <div class="swiper" id="js-main-video-swiper">
            <div class="swiper-wrapper">
              <?php if ($video_type === 'file'): ?>
                <?php foreach ($file_videos as $video): ?>
                  <div class="swiper-slide">
                    <video class="file-video" poster="<?php echo $video['preview_image']['url']; ?>">
                      <source src="<?php echo $video['video']['url']; ?>" />
                    </video>
                    <div class="video__poster">
                      <div class="poster__title">
                        <?php echo $video['preview_title']; ?>
                      </div>
                      <div class="poster__text">
                        <?php echo $video['preview_text']; ?>
                      </div>
                      <button class="poster__play-button js-poster-play-button">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.96582 6.01218V43.9933C9.96582 44.8968 10.9247 45.4778 11.7256 45.0596L47.9645 26.1338C48.8245 25.6847 48.8262 24.4544 47.9674 24.0028L11.7286 4.94748C10.9276 4.52628 9.96582 5.10717 9.96582 6.01218Z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="videos__other-videos">
          <div class="swiper" id="js-others-video-swiper">
            <div class="swiper-wrapper">
              <?php if ($video_type === 'file'): ?>
                <?php foreach ($file_videos as $video): ?>
                  <div class="swiper-slide">
                    <video class="file-video" poster="<?php echo $video['preview_image']['url']; ?>">
                      <source src="<?php echo $video['video']['url']; ?>" />
                    </video>
                    <div class="video__poster">
                      <div class="poster__title">
                        <?php echo $video['preview_title']; ?>
                      </div>
                      <div class="poster__text">
                        <?php echo $video['preview_text']; ?>
                      </div>
                      <button class="poster__play-button js-poster-play-button">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.96582 6.01218V43.9933C9.96582 44.8968 10.9247 45.4778 11.7256 45.0596L47.9645 26.1338C48.8245 25.6847 48.8262 24.4544 47.9674 24.0028L11.7286 4.94748C10.9276 4.52628 9.96582 5.10717 9.96582 6.01218Z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="swiper__controls">
            <button class="slider__button" id="videos__slider-button-prev" aria-label="Показать предыдущее видео">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M0.855739 10.4292L9.41497 1.8489C9.79593 1.46701 10.4142 1.46633 10.7961 1.84719C11.178 2.2281 11.1787 2.84645 10.7978 3.22829L2.23772 11.8095C1.85701 12.1903 1.85701 12.8099 2.2386 13.1915L10.7978 21.7718C11.1787 22.1537 11.178 22.772 10.7961 23.1529C10.6055 23.3431 10.3559 23.4381 10.1064 23.4381C9.85608 23.4381 9.60574 23.3424 9.41492 23.1512L0.856568 14.5717C-0.285717 13.4294 -0.285717 11.5707 0.855739 10.4292Z"
                  fill="#135978" />
                <path
                  d="M6.2979 11.5234H24.0234C24.5628 11.5234 25 11.9607 25 12.5001C25 13.0394 24.5628 13.4767 24.0234 13.4767H6.2979C5.7585 13.4767 5.32129 13.0395 5.32129 12.5001C5.32129 11.9606 5.7585 11.5234 6.2979 11.5234Z"
                  fill="#135978" />
              </svg>
            </button>
            <div class="swiper__pagination" id="videos__slider-pagination"></div>
            <button class="slider__button" id="videos__slider-button-next" aria-label="Показать следующее видео">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M24.1443 10.4292L15.585 1.8489C15.2041 1.46701 14.5858 1.46633 14.2039 1.84719C13.822 2.2281 13.8213 2.84645 14.2022 3.22829L22.7623 11.8095C23.143 12.1903 23.143 12.8099 22.7614 13.1915L14.2022 21.7718C13.8213 22.1537 13.822 22.772 14.2039 23.1529C14.3945 23.3431 14.6441 23.4381 14.8936 23.4381C15.1439 23.4381 15.3943 23.3424 15.5851 23.1512L24.1434 14.5717C25.2857 13.4294 25.2857 11.5707 24.1443 10.4292Z"
                  fill="#135978" />
                <path
                  d="M18.7021 11.5234H0.976611C0.437207 11.5234 0 11.9607 0 12.5001C0 13.0394 0.437207 13.4767 0.976611 13.4767H18.7021C19.2415 13.4767 19.6787 13.0395 19.6787 12.5001C19.6787 11.9606 19.2415 11.5234 18.7021 11.5234Z"
                  fill="#135978" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
\Harbinger_Marketing\Modal_Action::render_modals();