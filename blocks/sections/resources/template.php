<?php
/**
 * Block Resources.
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

$left_image = get_field('resources_left_image');
$section_title = get_field('resources_title');
$section_text = get_field('resources_text');
$cards = get_field('resources_cards');

?>

<section class="resources-section">
  <div class="container">
    <?php if ($left_image): ?>
      <img class="resources__left-image" src="<?php echo $left_image['url'] ?>" alt="<?php echo $left_image['alt'] ?>">
    <?php endif; ?>
    <div class="resources__content">
      <?php if (!empty($section_title)): ?>
        <div class="section-title resources__section-title">
          <?php echo $section_title; ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($section_text)): ?>
        <div class="section-text resources__section-text">
          <?php echo $section_text; ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($cards)): ?>
        <div class="resources__cards">
          <?php foreach ($cards as $key => $card): ?>
            <?php if ($key > 3) {
              continue;
            } ?>
            <a class="resources__card" href="javascript:void(0)">
              <img class="card__image" src="<?php echo $card['photo']['url']; ?>"
                alt="<?php echo $card['photo']['alt']; ?>">
              <div class="card__info">
                <div class="card__date">
                  <?php echo $card['date']; ?>
                </div>
                <div class="card__text truncate-text">
                  <?php echo $card['text']; ?>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <a class="button button--outline button--color-primary resources__button" href="javascript:void(0)">
        View All Resources
      </a>
    </div>
  </div>
</section>

<?php
\Harbinger_Marketing\Modal_Action::render_modals();