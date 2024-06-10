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
          <button class="button" aria-label="Перейти на страницу консультации">
            Book Consultation
          </button>
          <button class="button button--outline" aria-label="Смотреть видео">
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
</section>

<section>
  <div class="gallery">
    <div class="gallery__title">our gallery</div>
    <div class="gallery__text">A fitness training center for<br> women, by women</div>
    <div class="gallery__photos">
      <button class="photo-card">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/1.jpg"
            alt="gallery 1">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Beginners Welcome</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/2.jpg"
            alt="gallery 1">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Virtual/Hybrid Training</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/3.jpg"
            alt="gallery 1">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Personal Training</div>
        <div class="photo-card__text">5 Photos</div>
      </button>
      <button class="photo-card">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/4.jpg"
            alt="gallery 1">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">On-Demand Programs</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/5.jpg"
            alt="gallery 1">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">The mind fitness</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/6.jpg"
            alt="gallery 1">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Semi-Private Training for Women</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/7.jpg"
            alt="gallery 1">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Nutrition Program</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/8.jpg"
            alt="gallery 1">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Co-ed Training</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/9.jpg"
            alt="gallery 1">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Functional Fitness</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
    </div>
    <div class="gallery__actions">
      <button class="button">
        Load More
      </button>
    </div>
  </div>
</section>