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

$section_title = get_field('trainings_title');
$section_heading = get_field('trainings_heading');
$section_text = get_field('trainings_text');
$offers = get_field('trainings_offers')['offers'];
$default_active_tab = get_field('trainings_offers')['default_active_tab'];

?>

<?php if ($offers): ?>
  <section>
    <div class="trainings-section">
      <div class="container">
        <div class="trainings-section__text-block">
          <div class="trainings-section__title">
            <?php echo $section_title; ?>
          </div>
          <div class="trainings-section__heading">
            <?php echo $section_heading; ?>
          </div>
          <div class="trainings-section__text">
            <?php echo $section_text; ?>
          </div>
        </div>
        <div class="trainings-section__offers" id="trainings-section__offers">
          <div class="trainings-section__tabs js-horizontal-scroll">
            <ul class="nav nav-tabs" id="trainings-section__tab" role="tablist">
              <?php foreach ($offers as $key=>$offer): ?>
                <li class="nav-item" role="presentation">
                  <button class="nav-link <?php echo $key === $default_active_tab - 1 ? 'active' : ''; ?>" id="trainings-section__<?php echo $offer['title'] ?>-tab" data-bs-toggle="tab"
                    data-bs-target="#trainings-section__<?php echo $offer['title'] ?>" type="button" role="tab"
                    aria-controls="trainings-section__<?php echo $offer['title'] ?>" aria-selected="false">
                    <?php echo $offer['title'] ?>
                  </button>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="trainings-section__items">
            <div class="tab-content" id="trainings-section__tab-content">
              <?php foreach ($offers as $key=>$offer): ?>
                <div class="tab-pane fade <?php echo $key === $default_active_tab - 1 ? 'show active' : ''; ?>" id="trainings-section__<?php echo $offer['title'] ?>" role="tabpanel"
                  aria-labelledby="trainings-section__<?php echo $offer['title'] ?>-tab" tabindex="0">
                  <div class="trainings-section__offers-grid">
                    <?php foreach ($offer['links'] as $link): ?>
                      <a class="offers-grid__item" href="<?php echo $link['url'] ?>">
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="offer__text">
                        <?php echo $link['text'] ?>
                        </span>
                      </a>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php
\Harbinger_Marketing\Modal_Action::render_modals();