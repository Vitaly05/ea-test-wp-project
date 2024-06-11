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
      <button class="photo-card" aria-label="Открыть фотографию на весь экран">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/1.jpg"
            alt="Фото из галереи">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Beginners Welcome</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card" aria-label="Открыть фотографию на весь экран">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/2.jpg"
            alt="Фото из галереи">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Virtual/Hybrid Training</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card" aria-label="Открыть фотографию на весь экран">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/3.jpg"
            alt="Фото из галереи">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Personal Training</div>
        <div class="photo-card__text">5 Photos</div>
      </button>
      <button class="photo-card" aria-label="Открыть фотографию на весь экран">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/4.jpg"
            alt="Фото из галереи">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">On-Demand Programs</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card" aria-label="Открыть фотографию на весь экран">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/5.jpg"
            alt="Фото из галереи">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">The mind fitness</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card" aria-label="Открыть фотографию на весь экран">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/6.jpg"
            alt="Фото из галереи">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Semi-Private Training for Women</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card" aria-label="Открыть фотографию на весь экран">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/7.jpg"
            alt="Фото из галереи">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Nutrition Program</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card" aria-label="Открыть фотографию на весь экран">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/8.jpg"
            alt="Фото из галереи">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Co-ed Training</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
      <button class="photo-card" aria-label="Открыть фотографию на весь экран">
        <div class="background-img">
          <img class="photo-card__img" src="/wp-content/themes/testproject/resources/images/gallery/9.jpg"
            alt="Фото из галереи">
          <div class="background-filter"></div>
        </div>
        <div class="photo-card__title">Functional Fitness</div>
        <div class="photo-card__text">2 Photos</div>
      </button>
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