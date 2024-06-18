<?php
/**
 * Block Hero.
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

$section_title = get_field('hero_section_title');
$section_text = get_field('hero_section_text');
$section_background = get_field('hero_background');
$youtube_video_id = get_field('youtube_video_id');
$menu_items = get_field('hero_menu_items');

?>

<section class="section">
  <div class="hero__header-collapse js-collapse-header"></div>
  <div class="background-img">
    <?php if (!empty($section_background)): ?>
      <img src="<?php echo $section_background['url']; ?>" alt="<?php echo $section_background['alt']; ?>">
    <?php endif; ?>
    <div class="background-filter section-hero__bg-filter"></div>
  </div>
  <div class="section-hero">
    <div class="container">
      <?php if ($menu_items): ?>
        <div class="hero-menu js-vertical-scroll scrollbar-outer" id="hero-menu">
          <?php foreach ($menu_items as $key => $menu_item): ?>
            <a class="hero-menu__link <?php echo $key === 0 ? 'hero-menu__link--active' : '' ?>"
              href="<?php echo $menu_item['url']; ?>" aria-label="<?php echo $menu_item['aria_label']; ?>">
              <?php echo $menu_item['text']; ?>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <div class="hero-intro">
        <div class="hero-intro__title">
          <?php echo $section_title; ?>
        </div>
        <div class="hero-intro__text">
          <?php echo $section_text; ?>
        </div>
        <div class="hero-intro__actions">
          <button class="button" data-bs-toggle="modal" data-bs-target="#consultation-modal"
            aria-label="Перейти к консультации">
            Book Consultation
          </button>
          <button class="button button--outline" data-bs-toggle="modal" data-bs-target="#yt-video-modal"
            aria-label="Смотреть видео">
            <svg class="button__icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_408_4555)">
                <path
                  d="M17.338 7.69217L5.52548 0.410715C4.67087 -0.115419 3.63762 -0.137294 2.76149 0.352199C1.88535 0.841614 1.3623 1.73306 1.3623 2.73662V17.2332C1.3623 18.7506 2.58496 19.9918 4.0877 20C4.0918 20 4.0959 20 4.09993 20C4.56954 20 5.05891 19.8528 5.51598 19.5739C5.88368 19.3495 5.99989 18.8696 5.77556 18.502C5.55122 18.1342 5.07122 18.0181 4.70364 18.2424C4.48985 18.3728 4.28106 18.4402 4.0961 18.4402C3.52911 18.4371 2.92203 17.9514 2.92203 17.2332V2.73666C2.92203 2.30615 3.14641 1.92384 3.52219 1.71388C3.89801 1.50392 4.34118 1.51329 4.70731 1.73873L16.5199 9.02019C16.8749 9.23878 17.0781 9.60327 17.0772 10.0202C17.0764 10.4371 16.8717 10.8008 16.5147 11.0187L7.97419 16.2479C7.60685 16.4728 7.49138 16.9529 7.7163 17.3202C7.94118 17.6876 8.4213 17.8031 8.78865 17.5781L17.3282 12.3495C18.1458 11.8507 18.6351 10.9812 18.637 10.0234C18.639 9.06561 18.1532 8.19405 17.338 7.69217Z"
                  fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_408_4555">
                  <rect width="20" height="20" fill="white" />
                </clipPath>
              </defs>
            </svg>
            Play Video
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-lg consultation-modal" id="consultation-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть окно консультации">
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
          <div class="modal-title">Book<br>Consultation</div>
          <div class="modal-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis nullam pretium lectus est non arcu diam
            in varius.
          </div>
        </div>
        <div class="modal-body">
          <form>
            <div class="modal-body__row">
              <div class="text-field-wrap" data-placeholder="First Name">
                <label class="visibility-hidden" for="first-name-input">Имя</label>
                <input class="text-field" id="first-name-input" type="text" name="first-name" placeholder="" />
              </div>
              <div class="text-field-wrap" data-placeholder="Last Name">
                <label class="visibility-hidden" for="last-name-input">Фамилия</label>
                <input class="text-field" id="last-name-input" type="text" name="last-name" placeholder="" />
              </div>
            </div>
            <div class="modal-body__row">
              <div class="text-field-wrap" data-placeholder="Email">
                <label class="visibility-hidden" for="email-input">Почта</label>
                <input class="text-field" id="email-input" type="email" autocomplete="email" name="email"
                  placeholder="" />
              </div>
              <div class="text-field-wrap" data-placeholder="Phone Number">
                <label class="visibility-hidden" for="phone-number-input">Номер телефона</label>
                <input class="text-field" id="phone-number-input" type="text" name="phone-number" placeholder="" />
              </div>
            </div>
            <div class="text-field-wrap" data-placeholder="Message">
              <label class="visibility-hidden" for="message-input">Сообщение</label>
              <textarea class="text-field js-vertical-scroll" id="message-input" name="message"
                placeholder=""></textarea>
            </div>
            <input type="submit" hidden />
          </form>
        </div>
        <div class="modal-footer">
          <button class="button" data-bs-dismiss="modal" aria-label="Отправить данные для консультации">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-xl video-modal" id="video-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть окно видео">
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
        </div>
        <div class="modal-body">
          <div class="modal__video video">
            <video id="modal__video-1"
              poster="/wp-content/themes/testproject/resources/videos/testimonials/poster-2.jpg">
              <source src="/wp-content/themes/testproject/resources/videos/testimonials/t-2.mp4" type="video/mp4" />
            </video>
            <button class="button-icon button-icon--transparent video__player-button" data-player-id="modal__video-1">
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
  </div>

  <div class="modal fade modal-xl video-modal" id="yt-video-modal" data-video-id="<?php echo $youtube_video_id; ?>"
    tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть окно видео">
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
        </div>
        <div class="modal-body">
          <div class="modal__video">
            <div id="modal-yt-player"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>