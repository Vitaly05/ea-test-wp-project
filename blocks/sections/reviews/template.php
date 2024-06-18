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

$section_intro_title = get_field('reviews_section_intro_title');
$section_intro_text = get_field('reviews_section_intro_text');
$reviews_title = get_field('reviews_title');
$reviews = get_field('reviews');

$more_tag_position = strpos($section_intro_text, '<!--more-->');

if ($more_tag_position !== false) {
  $content_before_more = substr($section_intro_text, 0, $more_tag_position);
  $content_after_more = substr($section_intro_text, $more_tag_position + strlen('<!--more-->'));
}

?>

<?php if ($reviews): ?>
  <section>
    <div class="reviews-section">
      <img class="reviews-section-bg" src="/wp-content/themes/testproject/resources/images/backgrounds/girl.png"
        alt="Девушка с тренажером" />
      <div class="half-background"></div>
      <div class="container">
        <div class="reviews-section__intro">
          <div class="section-title">
            <?php echo $section_intro_title; ?>
          </div>
          <div class="section-text reviews-section__text text_before">
            <?php echo !empty($content_before_more) ? $content_before_more : $section_intro_text; ?>
          </div>
          <?php if (!empty($content_after_more)): ?>
            <div class="section-text reviews-section__text collapse" id="text-after-more">
              <?php echo $content_after_more; ?>
            </div>
            <button class="button button--text js-reviews-read-more-collapse" data-bs-toggle="collapse"
              data-bs-target="#text-after-more" role="button">
              Read more
            </button>
          <?php endif; ?>
          <div class="reviews-section__actions">
            <button class="button">Watch Video of The Bio</button>
            <button class="button button--outline button--color-primary">Learn More</button>
          </div>
        </div>
        <div class="reviews-section__reviews">
          <div class="reviews-bg"></div>
          <div class="section-title reviews-section__title">
            <?php echo $reviews_title; ?>
          </div>
          <div class="reviews-swiper">
            <div class="swiper" id="reviews__swiper">
              <div class="swiper-wrapper">
                <?php foreach ($reviews as $review): ?>
                  <div class="swiper-slide">
                    <div class="reviews-swiper__review">
                      <div class="review__title">
                        <?php echo $review['title'] ?>
                      </div>
                      <div class="review__stars">
                        <?php for ($i = 0; $i < $review['stars_count']; ++$i): ?>
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_408_2289)">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
                                fill="#FF368A" />
                            </g>
                            <defs>
                              <clipPath id="clip0_408_2289">
                                <rect width="16" height="16" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                        <?php endfor ?>
                      </div>
                      <div class="section-text review__text scrollbar-outer js-custom-vertical-scroll js-vertical-scroll">
                        <?php echo $review['text'] ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <?php if (count($reviews) > 1): ?>
              <div class="swiper__controls">
                <button class="slider__button" id="reviews__slider-button-prev" aria-label="Показать предыдущую отзыв">
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0.855739 10.4292L9.41497 1.8489C9.79593 1.46701 10.4142 1.46633 10.7961 1.84719C11.178 2.2281 11.1787 2.84645 10.7978 3.22829L2.23772 11.8095C1.85701 12.1903 1.85701 12.8099 2.2386 13.1915L10.7978 21.7718C11.1787 22.1537 11.178 22.772 10.7961 23.1529C10.6055 23.3431 10.3559 23.4381 10.1064 23.4381C9.85608 23.4381 9.60574 23.3424 9.41492 23.1512L0.856568 14.5717C-0.285717 13.4294 -0.285717 11.5707 0.855739 10.4292Z"
                      fill="#135978" />
                    <path
                      d="M6.2979 11.5234H24.0234C24.5628 11.5234 25 11.9607 25 12.5001C25 13.0394 24.5628 13.4767 24.0234 13.4767H6.2979C5.7585 13.4767 5.32129 13.0395 5.32129 12.5001C5.32129 11.9606 5.7585 11.5234 6.2979 11.5234Z"
                      fill="#135978" />
                  </svg>
                </button>
                <div class="swiper__pagination" id="reviews__slider-pagination"></div>
                <button class="slider__button" id="reviews__slider-button-next" aria-label="Показать следующий отзыв">
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
            <? endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<? endif; ?>

<?php
\Harbinger_Marketing\Modal_Action::render_modals();