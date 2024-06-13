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
if ( isset( $block['data']['block_preview_images'] ) ) {
	hm_get_template_part_with_params( 'fragments/block-preview-image', ['block' => $block] );
	return;
}

/**
 * Block Variables
 */

?>

<section class="section">
  <div class="hero__header-collapse js-collapse-header"></div>
  <div class="background-img">
    <img src="/wp-content/themes/testproject/resources/images/backgrounds/Hero.jpg" alt="background">
    <div class="background-filter section-hero__bg-filter"></div>
  </div>
  <div class="section-hero">
    <div class="container">
      <div class="hero-menu">
        <a class="hero-menu__link hero-menu__link--active" href="javascript:void(0)"
          aria-label="Перейти на главную страницу">Main</a>
        <a class="hero-menu__link" href="javascript:void(0)" aria-label="Перейти на страницу 'о нас'">About Us</a>
        <a class="hero-menu__link" href="javascript:void(0)" aria-label="Связаться с нами">Contact Us</a>
        <a class="hero-menu__link" href="javascript:void(0)" aria-label="Перейти на страницу 'до и после'">Before &
          After</a>
        <a class="hero-menu__link" href="javascript:void(0)" aria-label="Перейти к ресурсам">Resources</a>
        <a class="hero-menu__link" href="javascript:void(0)" aria-label="Перейти на страницу оплаты">Payment</a>
      </div>
      <div class="hero-intro">
        <div class="hero-intro__title">The<br class="hero-title-br" /> Happy Fitness</div>
        <div class="hero-intro__text">
          Macon's Premiere Boutuque Personal Training Studio
        </div>
        <div class="hero-intro__actions">
          <button class="button" data-bs-toggle="modal" data-bs-target="#consultation-modal"
            aria-label="Перейти к консультации">
            Book Consultation
          </button>
          <button class="button button--outline" data-bs-toggle="modal" data-bs-target="#video-modal"
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
</section>

<section>
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

<section>
  <div class="reviews-section">
    <img class="reviews-section-bg" src="/wp-content/themes/testproject/resources/images/backgrounds/girl.png"
      alt="Девушка с тренажером" />
    <div class="half-background"></div>
    <div class="container">
      <div class="reviews-section__intro">
        <div class="section-title">
          Alli Kerr
        </div>
        <div class="section-text reviews-section__text">
          business. Knowing I had more to offer the universe, I got the crazy idea to open my own brick and mortar
          fitness business. It was an itch that I had to scratch. In 2010 The Happy Fitness was born...
        </div>
        <button class="button button--text">
          Read more
        </button>
        <div class="reviews-section__actions">
          <button class="button">Watch Video of The Bio</button>
          <button class="button button--outline button--color-primary">Learn More</button>
        </div>
      </div>
      <div class="reviews-section__reviews">
        <div class="reviews-bg"></div>
        <div class="section-title reviews-section__title">
          Hear from the people who know me best
        </div>
        <div class="reviews-swiper">
          <div class="swiper" id="reviews__swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="reviews-swiper__review">
                  <div class="review__title">Sally Profit</div>
                  <div class="review__stars">
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
                  </div>
                  <div class="section-text review__text">
                    The Happy Fitness has it going on!!! I love this gym, the staff and all the members. I have been
                    in different gyms all my life and the Happy Fitness is the best by far. The staff are very
                    knowledgeable about all aspects of exercise and nutrition. Whether you are using the trainers or
                    not, they will always help make sure you are doing the exercises correctly so you get the best
                    benefit and do not hurt yourself. I never thought I would care one way or the other if I was in an
                    all female gym, but now that I am I truly love it. The other aspect I love about this gym is the
                    cleanliness. The staff works very hard keeping the gym orderly and spotless. Check it out...I
                    promise you it won't disappoint!!
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="reviews-swiper__review">
                  <div class="review__title">Sally Profit 2</div>
                  <div class="review__stars">
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
                  </div>
                  <div class="section-text review__text">
                    The Happy Fitness has it going on!!! I love this gym, the staff and all the members. I have been
                    in different gyms all my life and the Happy Fitness is the best by far. The staff are very
                    knowledgeable about all aspects of exercise and nutrition. Whether you are using the trainers or
                    not, they will always help make sure you are doing the exercises correctly so you get the best
                    benefit and do not hurt yourself. I never thought I would care one way or the other if I was in an
                    all female gym, but now that I am I truly love it. The other aspect I love about this gym is the
                    cleanliness. The staff works very hard keeping the gym orderly and spotless. Check it out...I
                    promise you it won't disappoint!!
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="reviews-swiper__review">
                  <div class="review__title">Sally Profit 3</div>
                  <div class="review__stars">
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
                  </div>
                  <div class="section-text review__text">
                    The Happy Fitness has it going on!!! I love this gym, the staff and all the members. I have been
                    in different gyms all my life and the Happy Fitness is the best by far. The staff are very
                    knowledgeable about all aspects of exercise and nutrition. Whether you are using the trainers or
                    not, they will always help make sure you are doing the exercises correctly so you get the best
                    benefit and do not hurt yourself. I never thought I would care one way or the other if I was in an
                    all female gym, but now that I am I truly love it. The other aspect I love about this gym is the
                    cleanliness. The staff works very hard keeping the gym orderly and spotless. Check it out...I
                    promise you it won't disappoint!!
                  </div>
                </div>
              </div>
            </div>
          </div>
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
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="results-section">
    <div class="half-background"></div>
    <div class="container">
      <div class="results__text-block">
        <div class="section-title results__title">Real Women, Real Results</div>
        <div class="section-text results__text">
          I believe when you truly commit to making a change, you will see results
        </div>
        <div class="swiper__controls result__swiper-controls">
          <button class="slider__button" id="results__slider-button-prev" aria-label="Показать предыдущую отзыв">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0.855739 10.4292L9.41497 1.8489C9.79593 1.46701 10.4142 1.46633 10.7961 1.84719C11.178 2.2281 11.1787 2.84645 10.7978 3.22829L2.23772 11.8095C1.85701 12.1903 1.85701 12.8099 2.2386 13.1915L10.7978 21.7718C11.1787 22.1537 11.178 22.772 10.7961 23.1529C10.6055 23.3431 10.3559 23.4381 10.1064 23.4381C9.85608 23.4381 9.60574 23.3424 9.41492 23.1512L0.856568 14.5717C-0.285717 13.4294 -0.285717 11.5707 0.855739 10.4292Z"
                fill="#135978" />
              <path
                d="M6.2979 11.5234H24.0234C24.5628 11.5234 25 11.9607 25 12.5001C25 13.0394 24.5628 13.4767 24.0234 13.4767H6.2979C5.7585 13.4767 5.32129 13.0395 5.32129 12.5001C5.32129 11.9606 5.7585 11.5234 6.2979 11.5234Z"
                fill="#135978" />
            </svg>
          </button>
          <div class="swiper__pagination" id="results__slider-pagination"></div>
          <button class="slider__button" id="results__slider-button-next" aria-label="Показать следующий отзыв">
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
      <div class="results__slider-block">
        <div class="slider-block__container">
          <div class="swiper" id="results__swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="results__before-after">
                  <div class="result-slider ba-slider">
                    <img src="/wp-content/themes/testproject/resources/images/before-after/a-1.jpg" alt="Человек после">
                    <div class="resize">
                      <img class="before-after__img"
                        src="/wp-content/themes/testproject/resources/images/before-after/b-1.jpg" alt="Человек до">
                    </div>
                    <span class="handle"></span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="results__before-after">
                  <div class="result-slider ba-slider">
                    <img src="/wp-content/themes/testproject/resources/images/before-after/a-2.jpg" alt="Человек после">
                    <div class="resize">
                      <img class="before-after__img"
                        src="/wp-content/themes/testproject/resources/images/before-after/b-2.jpg" alt="Человек до">
                    </div>
                    <span class="handle"></span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="results__before-after">
                  <div class="result-slider ba-slider">
                    <img src="/wp-content/themes/testproject/resources/images/before-after/a-3.jpg" alt="Человек после">
                    <div class="resize">
                      <img class="before-after__img"
                        src="/wp-content/themes/testproject/resources/images/before-after/b-3.jpg" alt="Человек до">
                    </div>
                    <span class="handle"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="before-after__text">
            <span>Before</span>
            <span>After</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="gallery">
    <div class="gallery__title">our gallery</div>
    <div class="gallery__text">A fitness training center for<br> women, by women</div>
    <div class="gallery__photos">
      <a class="photo-card" aria-label="Открыть фотографию на весь экран">
        <span class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/1.jpg"
            alt="Фото из галереи">
          <span class="background-filter"></span>
        </span>
        <span class="photo-card__title">Beginners Welcome</span>
        <span class="photo-card__text">2 Photos</span>
      </a>
      <a class="photo-card" aria-label="Открыть фотографию на весь экран">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/2.jpg"
            alt="Фото из галереи">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Virtual/Hybrid Training</div>
        <div class="photo-card__text">2 Photos</div>
      </a>
      <a class="photo-card" aria-label="Открыть фотографию на весь экран">
        <span class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/3.jpg"
            alt="Фото из галереи">
          <span class="background-filter"></span>
        </span>
        <span class="photo-card__title">Personal Training</span>
        <span class="photo-card__text">5 Photos</span>
      </a>
      <a class="photo-card" aria-label="Открыть фотографию на весь экран">
        <span class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/4.jpg"
            alt="Фото из галереи">
          <span class="background-filter"></span>
        </span>
        <span class="photo-card__title">On-Demand Programs</span>
        <span class="photo-card__text">2 Photos</span>
      </a>
      <a class="photo-card" aria-label="Открыть фотографию на весь экран">
        <span class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/5.jpg"
            alt="Фото из галереи">
          <span class="background-filter"></span>
        </span>
        <span class="photo-card__title">The mind fitness</span>
        <span class="photo-card__text">2 Photos</span>
      </a>
      <a class="photo-card" aria-label="Открыть фотографию на весь экран">
        <span class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/6.jpg"
            alt="Фото из галереи">
          <span class="background-filter"></span>
        </span>
        <span class="photo-card__title">Semi-Private Training for Women</span>
        <span class="photo-card__text">2 Photos</span>
      </a>
      <a class="photo-card" aria-label="Открыть фотографию на весь экран">
        <span class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/7.jpg"
            alt="Фото из галереи">
          <span class="background-filter"></span>
        </span>
        <span class="photo-card__title">Nutrition Program</span>
        <span class="photo-card__text">2 Photos</span>
      </a>
      <a class="photo-card" aria-label="Открыть фотографию на весь экран">
        <span class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/8.jpg"
            alt="Фото из галереи">
          <span class="background-filter"></span>
        </span>
        <span class="photo-card__title">Co-ed Training</span>
        <span class="photo-card__text">2 Photos</span>
      </a>
      <a class="photo-card" aria-label="Открыть фотографию на весь экран">
        <span class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/9.jpg"
            alt="Фото из галереи">
          <span class="background-filter"></span>
        </span>
        <span class="photo-card__title">Functional Fitness</span>
        <span class="photo-card__text">2 Photos</span>
      </a>
    </div>
    <div class="gallery__actions">
      <button class="button" aria-label="Загрузить больше фотографий">
        Load More
      </button>
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

<section>
  <div class="trainings-section">
    <div class="container">
      <div class="trainings-section__text-block">
        <div class="trainings-section__title">OUR trainings</div>
        <div class="trainings-section__heading">What We Offer</div>
        <div class="trainings-section__text">
          The Happy Fitness has it going on!!! I love this gym, the staff and all the members. I have been in different
          gyms all my life and the Happy Fitness is the best by far. The staff are very knowledgeable about all aspects
          of
          exercise and nutrition. Whether you are using the trainers or not, they will always help make sure you are
          doing
          the exercises correctly so you get the best benefit and do not hurt yourself. I never thought I would care one
          way or the other if I was in an all female gym, but now that I am I truly love it. The other aspect I love
          about
          this gym is the cleanliness. The staff works very hard keeping the gym orderly and spotless. Check it out...I
          promise you it won't disappoint!!
        </div>
      </div>
      <div class="trainings-section__offers" id="trainings-section__offers">
        <div class="trainings-section__tabs js-horizontal-scroll">
          <ul class="nav nav-tabs" id="trainings-section__tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="trainings-section__body-tab" data-bs-toggle="tab"
                data-bs-target="#trainings-section__body" type="button" role="tab"
                aria-controls="trainings-section__body" aria-selected="false">Body</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="trainings-section__breast-tab" data-bs-toggle="tab"
                data-bs-target="#trainings-section__breast" type="button" role="tab"
                aria-controls="trainings-section__breast" aria-selected="false">Breast</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="trainings-section__buttocks-tab" data-bs-toggle="tab"
                data-bs-target="#trainings-section__buttocks" type="button" role="tab"
                aria-controls="trainings-section__buttocks" aria-selected="true">Buttocks</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="trainings-section__mens-tab" data-bs-toggle="tab"
                data-bs-target="#trainings-section__mens" type="button" role="tab"
                aria-controls="trainings-section__mens" aria-selected="false">Mens</button>
            </li>
          </ul>
        </div>
        <div class="trainings-section__items">
          <div class="tab-content" id="trainings-section__tab-content">
            <div class="tab-pane fade" id="trainings-section__body" role="tabpanel"
              aria-labelledby="trainings-section__body-tab" tabindex="0">
              <div class="trainings-section__offers-grid">
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Brow Lift 1
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Facelift 1
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Septoplasty 1
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Chin Augmentation 1
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Morpheus8 1
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Injectables 1
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Ear Surgery 1
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Neck Lift 1
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Dysport&reg; 1
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Eyelid Surgery 1
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Rhinoplasty 1
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    AccuTite&trade; and FaceTite&reg; 1
                  </span>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="trainings-section__breast" role="tabpanel"
              aria-labelledby="trainings-section__breast-tab" tabindex="0">
              <div class="trainings-section__offers-grid">
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Brow Lift 2
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Facelift 2
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Septoplasty 2
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Chin Augmentation 2
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Morpheus8 2
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Injectables 2
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Ear Surgery 2
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Neck Lift 2
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Dysport&reg; 2
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Eyelid Surgery 2
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Rhinoplasty 2
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    AccuTite&trade; and FaceTite&reg; 2
                  </span>
                </a>
              </div>
            </div>
            <div class="tab-pane fade show active" id="trainings-section__buttocks" role="tabpanel"
              aria-labelledby="trainings-section__buttocks-tab" tabindex="0">
              <div class="trainings-section__offers-grid">
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Brow Lift
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Facelift
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Septoplasty
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Chin Augmentation
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Morpheus8
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Injectables
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Ear Surgery
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Neck Lift
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Dysport&reg;
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Eyelid Surgery
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Rhinoplasty
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    AccuTite&trade; and FaceTite&reg;
                  </span>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="trainings-section__mens" role="tabpanel"
              aria-labelledby="trainings-section__mens-tab" tabindex="0">
              <div class="trainings-section__offers-grid">
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Brow Lift 4
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Facelift 4
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Septoplasty 4
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Chin Augmentation 4
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Morpheus8 4
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Injectables 4
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Ear Surgery 4
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Neck Lift 4
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Dysport&reg; 4
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Eyelid Surgery 4
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    Rhinoplasty 4
                  </span>
                </a>
                <a class="offers-grid__item" href="javascript:void(0)">
                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67188 10.5L9.17187 7L5.67188 3.5" stroke="#FF368A" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="offer__text">
                    AccuTite&trade; and FaceTite&reg; 4
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>