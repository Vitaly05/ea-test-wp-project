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
if ( isset( $block['data']['block_preview_images'] ) ) {
	hm_get_template_part_with_params( 'fragments/block-preview-image', ['block' => $block] );
	return;
}

/**
 * Block Variables
 */

$section_title = get_field('gallery_title');
$section_text = get_field('gallery_text');
$cards = get_field('gallery_cards');

?>

<?php if ($cards): ?>
  <section class="section-gallery">
    <div class="gallery">
      <div class="container">
        <div class="gallery__title">
          <?php echo $section_title; ?>
        </div>
        <div class="gallery__text">
          <?php echo $section_text; ?>
        </div>
        <div class="gallery__photos" id="js-gallery-photos">
          <?php foreach ($cards as $card): ?>
            <a class="photo-card" aria-label="Открыть фотографию на весь экран">
              <span class="background-img">
                <img class="photo-card__img" src="<?php echo $card['photo']['url']; ?>"
                  alt="<?php echo $card['photo']['alt']; ?>">
                <span class="background-filter"></span>
              </span>
              <span class="photo-card__title">
                <?php echo $card['title']; ?>
              </span>
              <span class="photo-card__text">
                <?php echo $card['photos_count']; ?> Photos
              </span>
            </a>
          <?php endforeach; ?>
        </div>
        <div class="gallery__actions">
          <button class="button" id="js-load-more-button" aria-label="Загрузить больше фотографий">
            Load More
          </button>
        </div>
      </div>

      <dialog class="gallery__slider js-gallery-slider">
        <div class="slider__container">
          <button class="slider__button slider__close js-gallery-close" aria-label="Закрыть слайдер фотографий">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_408_7077)">
                <path
                  d="M11.1049 10.001L19.7712 1.3347C20.0763 1.02958 20.0763 0.534892 19.7712 0.229814C19.4661 -0.0752636 18.9714 -0.0753026 18.6663 0.229814L9.99999 8.89613L1.33372 0.229814C1.0286 -0.0753026 0.533915 -0.0753026 0.228837 0.229814C-0.0762401 0.534931 -0.0762791 1.02962 0.228837 1.3347L8.89511 10.001L0.228837 18.6673C-0.0762791 18.9724 -0.0762791 19.4671 0.228837 19.7722C0.381376 19.9247 0.581337 20.001 0.781297 20.001C0.981258 20.001 1.18118 19.9247 1.33376 19.7722L9.99999 11.1059L18.6663 19.7722C18.8188 19.9247 19.0188 20.001 19.2187 20.001C19.4187 20.001 19.6186 19.9247 19.7712 19.7722C20.0763 19.4671 20.0763 18.9724 19.7712 18.6673L11.1049 10.001Z"
                  fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_408_7077">
                  <rect width="20" height="20" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </button>
          <img class="slider__photo" src="/wp-content/themes/testproject/resources/images/gallery/3.jpg" alt="photo">
          <div class="slider__controls">
            <button class="slider__button js-slider-prev" aria-label="Показать предыдущую фотографию">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M0.855739 10.4292L9.41497 1.8489C9.79593 1.46701 10.4142 1.46633 10.7961 1.84719C11.178 2.2281 11.1787 2.84645 10.7978 3.22829L2.23772 11.8095C1.85701 12.1903 1.85701 12.8099 2.2386 13.1915L10.7978 21.7718C11.1787 22.1537 11.178 22.772 10.7961 23.1529C10.6055 23.3431 10.3559 23.4381 10.1064 23.4381C9.85608 23.4381 9.60574 23.3424 9.41492 23.1512L0.856568 14.5717C-0.285717 13.4294 -0.285717 11.5707 0.855739 10.4292Z"
                  fill="#135978" />
                <path
                  d="M6.2979 11.5234H24.0234C24.5628 11.5234 25 11.9607 25 12.5001C25 13.0394 24.5628 13.4767 24.0234 13.4767H6.2979C5.7585 13.4767 5.32129 13.0395 5.32129 12.5001C5.32129 11.9606 5.7585 11.5234 6.2979 11.5234Z"
                  fill="#135978" />
              </svg>
            </button>
            <div class="slider__rounds">
            </div>
            <button class="slider__button js-slider-next" aria-label="Показать следующую фотографию">
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
      </dialog>
    </div>
  </section>
<?php endif; ?>

<?php
\Harbinger_Marketing\Modal_Action::render_modals();