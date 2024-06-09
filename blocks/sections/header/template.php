<?php
/**
 * Block Header.
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
?>

<header class="header">
  <div class="header__sticky header__sticky--large js-sticky-header">
    <div class="header__sticky__bg"></div>
    <div class="container">
      <div class="header__left-buttons">
        <button class="button-icon menu-button js-menu-button">
          <div class="button-icon__icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2_98)">
                <path
                  d="M16.875 0H13.9062C12.1831 0 10.7812 1.40188 10.7812 3.125V6.09375C10.7812 7.81687 12.1831 9.21875 13.9062 9.21875H16.875C18.5981 9.21875 20 7.81687 20 6.09375V3.125C20 1.40188 18.5981 0 16.875 0ZM18.4375 6.09375C18.4375 6.95531 17.7366 7.65625 16.875 7.65625H13.9062C13.0447 7.65625 12.3438 6.95531 12.3438 6.09375V3.125C12.3438 2.26344 13.0447 1.5625 13.9062 1.5625H16.875C17.7366 1.5625 18.4375 2.26344 18.4375 3.125V6.09375Z"
                  fill="white" />
                <path
                  d="M6.09375 0H3.125C1.40188 0 0 1.40188 0 3.125V6.09375C0 7.81687 1.40188 9.21875 3.125 9.21875H6.09375C7.81687 9.21875 9.21875 7.81687 9.21875 6.09375V3.125C9.21875 1.40188 7.81687 0 6.09375 0ZM7.65625 6.09375C7.65625 6.95531 6.95531 7.65625 6.09375 7.65625H3.125C2.26344 7.65625 1.5625 6.95531 1.5625 6.09375V3.125C1.5625 2.26344 2.26344 1.5625 3.125 1.5625H6.09375C6.95531 1.5625 7.65625 2.26344 7.65625 3.125V6.09375Z"
                  fill="white" />
                <path
                  d="M6.09375 10.7812H3.125C1.40188 10.7812 0 12.1831 0 13.9062V16.875C0 18.5981 1.40188 20 3.125 20H6.09375C7.81687 20 9.21875 18.5981 9.21875 16.875V13.9062C9.21875 12.1831 7.81687 10.7812 6.09375 10.7812ZM7.65625 16.875C7.65625 17.7366 6.95531 18.4375 6.09375 18.4375H3.125C2.26344 18.4375 1.5625 17.7366 1.5625 16.875V13.9062C1.5625 13.0447 2.26344 12.3438 3.125 12.3438H6.09375C6.95531 12.3438 7.65625 13.0447 7.65625 13.9062V16.875Z"
                  fill="white" />
                <path
                  d="M19.2188 16.0938C18.7873 16.0938 18.4375 16.4435 18.4375 16.875C18.4375 17.7366 17.7366 18.4375 16.875 18.4375H13.9062C13.0447 18.4375 12.3438 17.7366 12.3438 16.875V13.9062C12.3438 13.0447 13.0447 12.3438 13.9062 12.3438H16.875C17.4963 12.3438 18.0586 12.7117 18.3076 13.2811C18.4805 13.6764 18.9411 13.8567 19.3364 13.6839C19.7318 13.511 19.9121 13.0504 19.7393 12.6551C19.2415 11.5168 18.1172 10.7812 16.875 10.7812H13.9062C12.1831 10.7812 10.7812 12.1831 10.7812 13.9062V16.875C10.7812 18.5981 12.1831 20 13.9062 20H16.875C18.5981 20 20 18.5981 20 16.875C20 16.4435 19.6502 16.0938 19.2188 16.0938Z"
                  fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_2_98">
                  <rect width="20" height="20" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="button-icon__text">
            Menu
          </div>
        </button>
        <a class="button-icon button-icon--outline phone-button" href="tel:4782543220">
          <div class="button-icon__icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_408_7577)">
                <path
                  d="M19.998 16.1153C19.9702 15.3417 19.6479 14.6197 19.0907 14.0824C17.9996 13.0303 17.0855 12.423 16.2138 12.1711C15.0128 11.824 13.9003 12.1396 12.9075 13.1092C12.906 13.1107 12.9046 13.1122 12.9031 13.1137L11.8468 14.162C11.1867 13.7899 9.90312 12.9729 8.51632 11.5861L8.41351 11.4833C7.02648 10.0964 6.20949 8.81252 5.83773 8.15315L6.88616 7.09686C6.88765 7.09537 6.88913 7.09389 6.89062 7.09237C7.86019 6.09963 8.17581 4.98721 7.82874 3.78608C7.57683 2.91447 6.96952 2.00033 5.91741 0.909278C5.38015 0.352129 4.65823 0.0298631 3.8846 0.00197251C3.1105 -0.0259572 2.36769 0.243496 1.79159 0.760606L1.76917 0.780762C1.75878 0.790098 1.74862 0.799746 1.7387 0.809629C0.591867 1.95647 -0.00930517 3.56197 0.00010889 5.45264C0.0161636 8.66444 1.78136 12.3374 4.72195 15.278C5.27644 15.8324 5.90663 16.3812 6.59499 16.909C6.93738 17.1715 7.42777 17.1068 7.69031 16.7644C7.95288 16.422 7.88812 15.9316 7.5457 15.669C6.91152 15.1828 6.3332 14.6795 5.82679 14.1732C3.1707 11.5171 1.57659 8.2542 1.56257 5.44486C1.55534 3.98877 1.99335 2.77342 2.82941 1.92865L2.83538 1.92326C3.40323 1.41354 4.26296 1.44455 4.79273 1.99389C6.81534 4.09147 6.6689 5.08174 5.77515 5.99822L4.32695 7.45729C4.09984 7.68612 4.03659 8.03096 4.16773 8.32549C4.20448 8.40807 5.0939 10.3734 7.30894 12.5885L7.41179 12.6912C9.62656 14.906 11.5919 15.7953 11.6745 15.8321C11.969 15.9633 12.3139 15.9 12.5427 15.6729L14.0018 14.2247C14.9184 13.3309 15.9087 13.1845 18.0061 15.2071C18.5555 15.7368 18.5865 16.5966 18.0769 17.1644L18.0713 17.1705C17.2335 17.9998 16.031 18.4374 14.5908 18.4374C14.5789 18.4374 14.5671 18.4374 14.5552 18.4373C13.4039 18.4316 12.0709 18.116 10.7001 17.5248C10.304 17.3538 9.84421 17.5365 9.67335 17.9327C9.50245 18.3289 9.68507 18.7886 10.0813 18.9595C11.6657 19.6429 13.1683 19.9929 14.5474 19.9998C14.562 19.9999 14.5766 19.9999 14.5912 19.9999C16.4628 19.9999 18.0524 19.3992 19.1904 18.2612C19.2003 18.2513 19.2099 18.2412 19.2192 18.2308L19.2395 18.2082C19.7566 17.6322 20.026 16.8889 19.998 16.1153Z"
                  fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_408_7577">
                  <rect width="20" height="20" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="button-icon__text">
            (478) 254-3220
          </div>
        </a>
      </div>
      <a class="header__logo" href="/">
        <svg class="logo svg-ignore" width="148" height="107" viewBox="0 0 148 107" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path class="logo__paint-item"
            d="M120.602 64.8972C125.33 42.0297 111.896 19.3768 90.5975 14.3006C69.2987 9.22442 48.1999 23.6471 43.4719 46.5146C38.7439 69.3821 52.1772 92.035 73.476 97.1112C94.7748 102.187 115.874 87.7647 120.602 64.8972Z" />
          <path class="logo__paint-item"
            d="M0.0673828 37.9817C2.96888 44.5716 5.87038 50.9218 8.77188 57.5117C10.7806 56.5532 12.6778 55.4748 14.5749 54.5163C11.5618 47.9264 8.77189 41.4564 5.87039 34.9863C3.86165 35.9449 1.96452 37.0232 0.0673828 37.9817Z" />
          <path class="logo__paint-item"
            d="M142.129 35.8252C139.228 42.4151 136.326 48.7653 133.425 55.3551C135.434 56.3137 137.331 57.392 139.228 58.3505C142.129 51.8805 145.031 45.4104 147.932 38.8206C146.035 37.8621 144.138 36.9035 142.129 35.8252Z" />
          <path
            d="M136.215 20.9677C134.095 25.6405 131.975 30.3133 129.743 35.1059C127.399 33.9078 125.056 32.7096 122.824 31.5115C123.382 30.3133 123.94 29.235 124.386 28.2765C126.73 23.1244 128.404 17.9723 128.292 12.1013C128.18 8.98613 127.734 5.87093 126.06 3.23498C124.163 0.239589 120.927 -0.838751 117.914 0.718852C116.463 1.55756 115.012 2.6359 113.896 3.95387C108.539 10.5437 108.539 20.2488 113.784 27.3179C115.124 29.1152 116.798 30.7926 118.471 32.5898C117.467 34.2672 116.351 35.9447 115.347 37.7419C108.874 20.9677 93.4739 9.22576 75.6185 9.22576C57.7631 9.22576 42.3628 20.9677 35.8902 37.7419C35.8902 37.6221 35.7786 37.6221 35.7786 37.6221C34.9975 36.4239 34.3279 35.2258 33.5467 34.1474C34.5511 33.0691 35.5554 32.2304 36.4482 31.152C41.2469 25.6405 43.144 19.1705 41.1353 11.7419C40.0193 7.42853 37.7874 3.71424 33.9931 1.43775C30.0872 -0.958567 26.1814 0.359405 24.2842 4.67277C22.6103 8.50687 22.4987 12.5806 23.0567 16.7741C23.8378 22.2857 26.0698 27.3179 28.6365 32.2304C28.7481 32.5898 28.9713 32.8294 29.1945 33.4285C25.9582 34.9861 22.8335 36.5437 19.5972 37.9815C16.9189 32.1106 14.3521 26.599 11.7854 20.9677C9.7767 22.046 7.99116 23.0046 5.98242 24.0829C11.4506 36.1843 16.9189 48.1659 22.4987 60.1474C24.5074 59.0691 26.2929 58.1106 28.3017 57.152C25.8466 51.7603 23.3914 46.4884 21.0479 41.2165C24.3958 39.5391 27.5205 37.9815 30.8684 36.4239C30.8684 36.4239 30.8684 36.4239 30.8684 36.3041C30.8684 36.3041 30.8684 36.3041 30.98 36.3041C31.9844 37.8617 32.9887 39.4193 33.9931 40.9769C34.1047 41.0967 34.1047 41.2165 34.2163 41.3364L34.5511 41.8156C33.3235 46.129 32.6539 50.8018 32.6539 55.4746C32.6539 76.8018 46.1571 94.7741 64.4589 100.046C65.2401 100.286 65.9096 100.405 66.6908 100.645C66.914 100.645 67.1372 100.765 67.3604 100.765C67.472 100.765 67.5836 100.765 67.8068 100.885C70.3735 101.364 72.9402 101.604 75.6185 101.604C78.52 101.604 81.3099 101.244 83.9882 100.765V100.885C84.9926 100.645 85.997 100.405 87.0013 100.166V100.046C105.192 94.6543 118.583 76.8018 118.583 55.5944C118.583 50.8018 117.914 46.129 116.574 41.8156C117.021 41.2165 117.244 40.7373 117.244 40.7373C118.471 38.8202 119.699 36.9032 120.927 34.9861C121.038 34.8663 121.15 34.7465 121.15 34.7465C123.605 36.0645 125.948 37.2626 128.292 38.4608C125.502 44.6912 122.601 50.9216 119.811 57.2718C121.819 58.3502 123.605 59.3087 125.502 60.3871C131.082 48.2857 136.55 36.3041 142.018 24.3225C140.01 23.0046 138.112 22.046 136.215 20.9677ZM31.538 31.2718C30.3104 28.5161 29.0829 26 27.9669 23.2442C26.5161 19.7695 25.735 16.0553 25.8466 12.2212C25.8466 10.0645 26.1814 7.90779 27.1857 5.99074C28.3017 3.71424 29.9756 3.23498 32.096 4.43314C34.8859 5.99074 36.6714 8.7465 37.6758 11.8617C39.9077 18.9308 38.0106 24.8018 33.2119 29.8341C32.7655 30.3133 32.2076 30.6728 31.538 31.2718ZM35.667 55.4746C35.667 51.8801 36.1134 48.5253 36.8946 45.1705L37.0062 45.4101C37.5642 46.129 38.0106 46.8479 38.5685 47.447C43.702 53.917 48.947 60.2672 54.0804 66.7373C57.5399 71.0506 60.9994 75.2442 63.5661 80.3963C65.4632 84.2304 66.6908 88.1843 66.356 92.4976C66.2444 93.9354 65.798 95.3732 65.4633 96.6912V96.811C48.2774 92.0184 35.667 75.364 35.667 55.4746ZM75.5069 98.2488C73.1634 98.2488 70.9315 98.0092 68.6995 97.6497L68.8111 97.2903C69.1459 95.3732 69.4807 93.4562 69.5923 91.6589C69.8155 86.0276 67.8068 80.9953 65.1285 76.3225C62.3386 71.5299 58.8791 67.3364 55.4196 63.1428C49.8398 56.1935 44.3716 49.1244 38.7917 42.1751C38.6801 42.0553 38.4569 41.6958 38.1222 41.0967C43.5904 24.5622 58.3211 12.7004 75.6185 12.7004C89.1217 12.7004 100.951 19.8894 108.205 30.9124C100.728 39.8986 93.0275 47.9262 82.9839 53.1981C83.5418 51.2811 84.0998 49.4838 84.4346 47.6866C85.3274 42.7741 84.9926 37.8617 84.5462 33.0691C84.4346 31.3917 84.4346 29.8341 84.4346 28.1566C84.4346 27.6774 84.6578 27.1981 84.6578 26.8387C86.5549 27.1981 88.6753 29.8341 89.0101 31.9907C89.2333 33.788 88.8985 34.8663 86.7781 38.5806C87.5593 39.2995 88.3405 39.8986 89.0101 40.6175C94.1435 35.705 92.5812 26.2396 86.1086 23.6036C84.0998 22.7649 82.3143 23.6036 81.6447 25.8801C80.8635 28.2765 81.0867 30.6728 81.3099 33.1889C81.7563 37.8617 82.0911 42.6543 81.1983 47.3271C80.9751 48.4055 80.7519 49.6036 80.3056 50.5622C78.2968 55.7142 72.8286 56.6728 69.3691 52.599C67.472 50.4424 66.6908 47.6866 66.1328 44.9308C65.4632 41.4562 65.2401 37.8617 66.1328 34.3871C67.5836 28.8755 72.717 26.3594 77.0693 29.1152C77.4041 29.3548 77.7388 29.5944 78.1852 29.9539C78.2968 28.7557 78.52 27.6774 78.52 26.599C78.52 26.3594 78.0736 26 77.8504 25.8801C72.8286 23.2442 66.6908 25.5207 64.1241 30.9124C62.4501 34.3871 62.1154 38.1013 62.4501 41.9354C62.7849 46.129 63.6777 50.2027 65.9096 53.7972C65.9096 53.7972 65.9096 53.917 65.9096 54.2765C57.4283 49.7235 50.5093 43.1336 43.702 36.1843C43.2556 37.2626 42.8092 38.1013 42.4744 39.0599C42.3628 39.2995 42.586 39.7788 42.8092 40.0184C47.1615 44.4516 51.7369 48.6451 56.6471 52.3594C59.6602 54.6359 62.7849 56.553 66.1328 57.9907C69.0343 59.1889 71.8242 59.4285 74.9489 59.1889C82.9839 58.5898 89.2333 54.0368 95.3711 49.1244C100.281 45.0506 104.745 40.3778 108.874 35.3456C109.097 35.1059 109.321 34.8663 109.655 34.3871C110.883 36.6636 111.887 38.94 112.78 41.4562L112.222 42.1751C112.111 42.2949 112.111 42.4147 111.999 42.4147C108.093 47.447 104.187 52.4792 100.17 57.6313C96.1522 62.6635 92.1348 67.6958 88.2289 72.8479C85.7738 76.0829 83.765 79.6774 82.5375 83.6313C80.9751 88.3041 80.5287 93.0967 82.3143 98.0092C80.194 98.0092 77.8504 98.2488 75.5069 98.2488ZM115.347 55.4746C115.347 75.2442 102.736 92.0184 85.7738 96.811V96.6912C84.6578 94.2949 84.4346 91.7788 84.6578 89.2626C85.2158 84.47 87.0013 80.1566 89.7912 76.3225C93.1391 71.6497 96.7102 67.0967 100.281 62.6635C104.634 57.152 109.097 51.6405 113.45 46.129C113.561 46.0092 113.673 45.8894 113.784 45.7695C113.896 45.6497 114.008 45.4101 114.231 45.1705C114.9 48.4055 115.347 51.8801 115.347 55.4746ZM120.145 29.3548C111.776 22.8848 110.995 12.341 116.463 5.99074C117.244 5.15203 118.248 4.43314 119.253 3.83406C120.815 3.11517 122.043 3.59443 123.047 5.03222C124.274 6.82945 124.721 9.10595 124.944 11.2626C125.279 16.6543 123.717 21.5668 121.596 26.2396C121.15 27.3179 120.703 28.2765 120.145 29.3548Z"
            fill="white" />
        </svg>
      </a>
      <div class="header__right-buttons">
        <button class="button-icon button-icon--outline">
          <div class="button-icon__icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_85)">
                <path
                  d="M19.9493 17.1376C19.8613 16.7152 19.4477 16.4441 19.0252 16.532C18.6028 16.6199 18.3316 17.0337 18.4196 17.4561C18.4703 17.6994 18.4099 17.9487 18.2541 18.1404C18.1639 18.2514 17.9627 18.4375 17.6292 18.4375H2.37081C2.03729 18.4375 1.83608 18.2513 1.74584 18.1404C1.59002 17.9488 1.52971 17.6994 1.58038 17.4561C2.39116 13.5617 5.82612 10.717 9.79287 10.621C9.86159 10.6237 9.93061 10.625 9.99998 10.625C10.0696 10.625 10.1389 10.6236 10.2079 10.621C13.0021 10.688 15.5847 12.1033 17.1488 14.4358C17.389 14.7942 17.8743 14.8899 18.2328 14.6496C18.5911 14.4094 18.6869 13.9241 18.4465 13.5657C17.1646 11.6538 15.3032 10.2636 13.1808 9.56504C14.4741 8.59516 15.3125 7.04988 15.3125 5.3125C15.3125 2.3832 12.9293 0 9.99998 0C7.07065 0 4.68748 2.3832 4.68748 5.3125C4.68748 7.05094 5.52686 8.59703 6.82159 9.56684C5.63534 9.95738 4.52225 10.5651 3.54803 11.3664C1.76163 12.8358 0.519555 14.8854 0.0506881 17.1376C-0.096265 17.8433 0.0797896 18.5682 0.533618 19.1262C0.985219 19.6815 1.65487 20 2.37081 20H17.6291C18.3451 20 19.0147 19.6815 19.4663 19.1262C19.9202 18.5682 20.0962 17.8433 19.9493 17.1376ZM6.24998 5.3125C6.24998 3.24473 7.93221 1.5625 9.99998 1.5625C12.0678 1.5625 13.75 3.24473 13.75 5.3125C13.75 7.3166 12.1697 8.95856 10.1898 9.05773C10.1266 9.05656 10.0633 9.05598 9.99998 9.05598C9.93694 9.05598 9.87389 9.0566 9.81092 9.05777C7.83065 8.95898 6.24998 7.31687 6.24998 5.3125Z"
                  fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_23_85">
                  <rect width="20" height="20" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
        </button>
        <button class="button-icon button-icon--outline">
          <div class="button-icon__icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M9.02344 10.4297H11.6016C12.4522 10.4297 13.1776 10.9162 13.4946 11.6994C13.6176 12.0033 13.9102 12.1877 14.219 12.1877C14.3166 12.1877 14.4159 12.1693 14.5119 12.1304C14.9118 11.9685 15.1048 11.513 14.9429 11.1131C14.3907 9.74875 13.0791 8.86719 11.6016 8.86719H9.02344C7.88183 8.86719 6.95312 7.93844 6.95312 6.79688V6.01562C6.95312 4.87406 7.88183 3.94531 9.02344 3.94531H11.5234C12.385 3.94531 13.0859 4.64625 13.0859 5.50781C13.0859 5.9393 13.4357 6.28906 13.8672 6.28906C14.2987 6.28906 14.6484 5.9393 14.6484 5.50781C14.6484 3.78469 13.2466 2.38281 11.5234 2.38281H10.8984V0.78125C10.8984 0.349766 10.5487 0 10.1172 0C9.6857 0 9.33594 0.349766 9.33594 0.78125V2.38281H9.02344C7.02031 2.38281 5.39062 4.0125 5.39062 6.01562V6.79688C5.39062 8.8 7.02031 10.4297 9.02344 10.4297Z"
                fill="white" />
              <path
                d="M14.5063 14.3517C14.1052 14.1929 13.6512 14.3893 13.4923 14.7905C13.1836 15.5703 12.4591 16.0547 11.6016 16.0547H8.125C7.26344 16.0547 6.5625 15.3537 6.5625 14.4922C6.5625 14.0607 6.21273 13.7109 5.78125 13.7109C5.34977 13.7109 5 14.0607 5 14.4922C5 16.2153 6.40187 17.6172 8.125 17.6172H9.33594V19.2188C9.33594 19.6502 9.6857 20 10.1172 20C10.5487 20 10.8984 19.6502 10.8984 19.2188V17.6172H11.6016C12.3441 17.6172 13.0507 17.4033 13.6448 16.9986C14.2305 16.5998 14.6801 16.0352 14.9452 15.3657C15.104 14.9646 14.9075 14.5106 14.5063 14.3517Z"
                fill="white" />
            </svg>
          </div>
        </button>
        <button class="button">
          Book Consultation
        </button>
      </div>
    </div>
  </div>
  <div class="header__menu js-header-menu">
    <div class="container">
      <div class="header-menu__navigation">
        <a class="header-menu__link header-menu__link--active" href="javascript:void(0)">
          Main
        </a>
        <a class="header-menu__link" href="javascript:void(0)">
          About Us
        </a>
        <a class="header-menu__link" href="javascript:void(0)">
          Contact Us
        </a>
        <a class="header-menu__link" href="javascript:void(0)">
          Befor & Afters
        </a>
        <a class="header-menu__link" href="javascript:void(0)">
          Resources
        </a>
        <a class="header-menu__link" href="javascript:void(0)">
          Payment
        </a>
      </div>
      <div class="header-menu__contacts">
        <div class="header-menu__contact">
          <div class="contact__icon">
            <svg fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 3.75C8.76914 3.75 6.14062 6.37852 6.14062 9.60938C6.14062 12.8402 8.76914 15.4688 12 15.4688C12.5457 15.4688 13.0863 15.3936 13.607 15.2454C14.105 15.1037 14.3937 14.5851 14.252 14.0871C14.1102 13.5891 13.5917 13.3003 13.0936 13.4421C12.74 13.5427 12.372 13.5938 12 13.5938C9.80302 13.5938 8.01562 11.8064 8.01562 9.60938C8.01562 7.41239 9.80302 5.625 12 5.625C14.197 5.625 15.9844 7.41239 15.9844 9.60938C15.9844 10.0003 15.9281 10.3861 15.8172 10.7561C15.6684 11.252 15.9499 11.7746 16.4459 11.9234C16.9418 12.072 17.4644 11.7907 17.6131 11.2947C17.7765 10.7498 17.8594 10.1828 17.8594 9.60938C17.8594 6.37852 15.2309 3.75 12 3.75Z"
                fill="#FF368A" />
              <path
                d="M18.791 2.81081C16.9764 0.99825 14.5646 0 11.9999 0C9.43505 0 7.02328 0.99825 5.20875 2.81086C3.39441 4.62333 2.39358 7.03373 2.39062 9.60014C2.39245 11.4683 2.91136 13.2211 3.97692 14.9587C4.89966 16.4632 6.09839 17.776 7.36748 19.1658C8.61187 20.5285 9.89855 21.9377 10.9261 23.5634C11.0979 23.8352 11.3971 24 11.7186 24H12.2811C12.6026 24 12.9018 23.8352 13.0736 23.5634C14.1012 21.9376 15.3878 20.5285 16.6322 19.1658C17.9013 17.776 19.1001 16.4632 20.0228 14.9586C21.0884 13.221 21.6073 11.4683 21.6091 9.59808C21.6062 7.03369 20.6053 4.62328 18.791 2.81081ZM15.2476 17.9015C14.1412 19.1132 13.0027 20.36 11.9999 21.7939C10.997 20.36 9.85851 19.1132 8.75208 17.9015C6.3465 15.2671 4.26891 12.9919 4.26562 9.60028C4.2705 5.34056 7.74009 1.875 11.9999 1.875C16.2596 1.875 19.7292 5.34056 19.7341 9.59827C19.7308 12.9919 17.6532 15.267 15.2476 17.9015Z"
                fill="#FF368A" />
            </svg>
          </div>
          <a class="contact__text" href="javascript:void(0)">
            4535 Forsyth Rd Suite 2<br /> Macon, GA 31210
          </a>
        </div>
        <div class="header-menu__contact">
          <div class="contact__icon">
            <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_408_7577)">
                <path
                  d="M19.998 16.1153C19.9702 15.3417 19.6479 14.6197 19.0907 14.0824C17.9996 13.0303 17.0855 12.423 16.2138 12.1711C15.0128 11.824 13.9003 12.1396 12.9075 13.1092C12.906 13.1107 12.9046 13.1122 12.9031 13.1137L11.8468 14.162C11.1867 13.7899 9.90312 12.9729 8.51632 11.5861L8.41351 11.4833C7.02648 10.0964 6.20949 8.81252 5.83773 8.15315L6.88616 7.09686C6.88765 7.09537 6.88913 7.09389 6.89062 7.09237C7.86019 6.09963 8.17581 4.98721 7.82874 3.78608C7.57683 2.91447 6.96952 2.00033 5.91741 0.909278C5.38015 0.352129 4.65823 0.0298631 3.8846 0.00197251C3.1105 -0.0259572 2.36769 0.243496 1.79159 0.760606L1.76917 0.780762C1.75878 0.790098 1.74862 0.799746 1.7387 0.809629C0.591867 1.95647 -0.00930517 3.56197 0.00010889 5.45264C0.0161636 8.66444 1.78136 12.3374 4.72195 15.278C5.27644 15.8324 5.90663 16.3812 6.59499 16.909C6.93738 17.1715 7.42777 17.1068 7.69031 16.7644C7.95288 16.422 7.88812 15.9316 7.5457 15.669C6.91152 15.1828 6.3332 14.6795 5.82679 14.1732C3.1707 11.5171 1.57659 8.2542 1.56257 5.44486C1.55534 3.98877 1.99335 2.77342 2.82941 1.92865L2.83538 1.92326C3.40323 1.41354 4.26296 1.44455 4.79273 1.99389C6.81534 4.09147 6.6689 5.08174 5.77515 5.99822L4.32695 7.45729C4.09984 7.68612 4.03659 8.03096 4.16773 8.32549C4.20448 8.40807 5.0939 10.3734 7.30894 12.5885L7.41179 12.6912C9.62656 14.906 11.5919 15.7953 11.6745 15.8321C11.969 15.9633 12.3139 15.9 12.5427 15.6729L14.0018 14.2247C14.9184 13.3309 15.9087 13.1845 18.0061 15.2071C18.5555 15.7368 18.5865 16.5966 18.0769 17.1644L18.0713 17.1705C17.2335 17.9998 16.031 18.4374 14.5908 18.4374C14.5789 18.4374 14.5671 18.4374 14.5552 18.4373C13.4039 18.4316 12.0709 18.116 10.7001 17.5248C10.304 17.3538 9.84421 17.5365 9.67335 17.9327C9.50245 18.3289 9.68507 18.7886 10.0813 18.9595C11.6657 19.6429 13.1683 19.9929 14.5474 19.9998C14.562 19.9999 14.5766 19.9999 14.5912 19.9999C16.4628 19.9999 18.0524 19.3992 19.1904 18.2612C19.2003 18.2513 19.2099 18.2412 19.2192 18.2308L19.2395 18.2082C19.7566 17.6322 20.026 16.8889 19.998 16.1153Z"
                  fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_408_7577">
                  <rect width="20" height="20" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <a class="contact__text" href="tel:4782543220">
            (478) 254-3220
          </a>
        </div>
        <div class="header-menu__social">
          <a class="header-menu__icon-link" href="javascript:void(0)">
            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_408_7320)">
                <path
                  d="M17.3346 33.9999C17.222 33.9999 17.1095 33.9999 16.9961 33.9994C14.331 34.0059 11.8686 33.9382 9.47379 33.7924C7.27823 33.6588 5.27411 32.9001 3.67776 31.5984C2.13745 30.3424 1.08559 28.6441 0.551483 26.5513C0.0866395 24.7292 0.0619965 22.9407 0.0383911 21.2107C0.0212707 19.9695 0.00363159 18.4987 0 17.003C0.00363159 15.5011 0.0212707 14.0303 0.0383911 12.7891C0.0619965 11.0594 0.0866395 9.27084 0.551483 7.44856C1.08559 5.35573 2.13745 3.65744 3.67776 2.40142C5.27411 1.09976 7.27823 0.341015 9.47404 0.207424C11.8688 0.0619011 14.3318 -0.00606158 17.0026 0.000423414C19.6684 -0.00528337 22.1301 0.0619011 24.5249 0.207424C26.7205 0.341015 28.7246 1.09976 30.3209 2.40142C31.8615 3.65744 32.9131 5.35573 33.4472 7.44856C33.9121 9.27058 33.9367 11.0594 33.9603 12.7891C33.9774 14.0303 33.9953 15.5011 33.9987 16.9968C33.9953 18.4987 33.9774 19.9695 33.9603 21.2107C33.9505 21.9443 33.3445 22.5306 32.6143 22.5207C31.8807 22.5106 31.2945 21.9077 31.3043 21.1744C31.3212 19.9405 31.3391 18.4793 31.3425 16.9968C31.3391 15.5206 31.3212 14.0594 31.3043 12.8254C31.2828 11.2506 31.2605 9.62207 30.8735 8.10536C30.4831 6.57542 29.7324 5.34898 28.6424 4.46002C27.4634 3.49843 26.0237 2.95965 24.3636 2.85875C22.0251 2.71659 19.6179 2.65097 17.0026 2.65641C14.3811 2.65019 11.9736 2.71659 9.63513 2.85875C7.97498 2.95965 6.53557 3.49843 5.35634 4.45976C4.26634 5.34872 3.51564 6.57516 3.12524 8.10536C2.73822 9.62207 2.71591 11.2506 2.69438 12.8254C2.67752 14.0594 2.65988 15.5206 2.65625 17.003C2.65988 18.4793 2.67752 19.9405 2.69438 21.1744C2.71591 22.7492 2.73822 24.3777 3.12524 25.8945C3.51564 27.4244 4.26634 28.6508 5.35634 29.5398C6.53557 30.5014 7.97498 31.0402 9.63513 31.1411C11.9736 31.2832 14.3816 31.3496 16.9964 31.3431C19.6181 31.3494 22.0251 31.2832 24.3636 31.1411C26.0237 31.0402 27.4631 30.5014 28.6424 29.5398C29.4276 28.8993 30.041 28.0776 30.4657 27.097C30.7572 26.4241 31.5391 26.1147 32.2122 26.4062C32.8854 26.6978 33.1946 27.4796 32.9033 28.1528C32.3079 29.5273 31.4392 30.6866 30.3209 31.5984C28.7246 32.9003 26.7205 33.6588 24.5249 33.7924C22.2316 33.9319 19.8757 33.9999 17.3346 33.9999ZM25.2336 16.9999C25.2336 12.4228 21.5099 8.69912 16.9328 8.69912C12.356 8.69912 8.63203 12.4228 8.63203 16.9999C8.63203 21.577 12.356 25.3007 16.9328 25.3007C21.5099 25.3007 25.2336 21.577 25.2336 16.9999ZM22.5773 16.9999C22.5773 20.1122 20.0453 22.6444 16.9328 22.6444C13.8205 22.6444 11.2883 20.1122 11.2883 16.9999C11.2883 13.8876 13.8205 11.3554 16.9328 11.3554C20.0453 11.3554 22.5773 13.8876 22.5773 16.9999ZM26.1633 6.04287C25.0632 6.04287 24.1711 6.93469 24.1711 8.03506C24.1711 9.13543 25.0632 10.0272 26.1633 10.0272C27.2637 10.0272 28.1555 9.13543 28.1555 8.03506C28.1555 6.93469 27.2637 6.04287 26.1633 6.04287Z"
                  fill="#FF368A" />
              </g>
              <defs>
                <clipPath id="clip0_408_7320">
                  <rect width="34" height="34" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
          <a class="header-menu__icon-link" href="javascript:void(0)">
            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_408_7326)">
                <path
                  d="M29.966 7.63566L29.9492 7.57029C31.3896 6.70676 32.5527 5.28318 33.0702 3.65234C31.7208 4.45518 30.1421 5.06399 28.5546 5.3789C27.2815 4.0225 25.583 3.1875 23.5742 3.1875C19.7245 3.1875 16.5351 6.30443 16.5351 10.1601C16.5351 10.751 16.5839 11.3233 16.649 11.8244C13.2592 11.5611 10.0738 10.4613 7.16075 8.54485C4.61709 6.87173 3.24591 5.16852 3.23424 5.154C2.86071 4.6806 2.21506 4.51795 1.66229 4.75842C1.10925 4.99888 0.787595 5.58149 0.878644 6.17732C0.910291 6.38303 1.55879 10.4488 4.00932 13.9914C3.43813 13.9025 3.09728 13.7437 3.03191 13.7113C2.55773 13.4304 1.97642 13.482 1.54504 13.8259C1.11107 14.172 0.955945 14.7616 1.12896 15.2889C1.18499 15.4602 2.35047 18.8585 6.6059 20.6595C5.69411 20.9226 4.88531 20.9181 4.87493 20.9181C4.86586 20.9181 4.85678 20.9179 4.8477 20.9179C4.28558 20.9179 3.78313 21.2725 3.59558 21.8043C3.40466 22.3446 3.58235 22.9464 4.03578 23.2968C4.13824 23.3759 6.04326 24.8234 9.13918 25.5549C8.0562 26.151 6.77788 26.5097 5.31384 26.6267C3.28768 26.7886 1.65814 26.4047 1.64491 26.4013C0.971249 26.2363 0.284103 26.6171 0.0669869 27.2757C-0.150129 27.9344 0.176453 28.6493 0.816389 28.9167C1.00808 28.9966 5.56338 30.8785 10.094 30.8785C13.239 30.8785 15.5946 30.5921 17.7312 29.9499C20.3976 29.1481 22.6614 27.7808 24.6512 25.7699C25.1671 25.2485 25.1627 24.4076 24.6413 23.8916C24.1197 23.3757 23.279 23.3801 22.763 23.9017C19.2147 27.4877 15.1321 28.2225 10.094 28.2225C9.976 28.2225 9.85798 28.221 9.73969 28.2179C11.1451 27.5728 12.3503 26.6527 13.3126 25.4784C13.6335 25.0867 13.7041 24.5469 13.494 24.0859C13.2841 23.6252 12.8304 23.3241 12.3243 23.309C10.9376 23.2683 9.71271 23.0027 8.70365 22.673C9.4528 22.2924 10.1825 21.7519 10.7581 20.9843C11.0346 20.6157 11.1002 20.1301 10.9316 19.7013C10.763 19.2725 10.384 18.9618 9.93061 18.8803C7.70082 18.4795 6.21991 17.582 5.25936 16.6985C5.79839 16.6705 6.3906 16.5888 7.0295 16.4293C7.49797 16.312 7.86606 15.9499 7.99057 15.4832C8.11508 15.0168 7.97682 14.5193 7.62897 14.1844C6.4251 13.0244 5.55015 11.5868 4.92422 10.2307C5.14263 10.3871 5.37039 10.5446 5.60696 10.702C8.24348 12.4542 12.5791 14.5429 18.262 14.5429C18.6752 14.5429 19.0648 14.3497 19.3159 14.0215C19.5673 13.6936 19.6513 13.2662 19.5439 12.8672C19.5403 12.8542 19.1916 11.5451 19.1916 10.1601C19.1916 9.01644 19.6479 7.9363 20.4767 7.11894C21.3102 6.29665 22.4103 5.84374 23.5744 5.84374C24.7513 5.84374 25.7754 6.29898 26.6182 7.19676C27.2268 7.76951 27.8908 9.29685 27.8908 10.2187V11.0234C27.8908 11.0514 27.8937 11.0896 27.9004 11.1347C27.8947 11.1855 27.8908 11.2369 27.8908 11.289C27.8908 14.3082 27.3321 16.996 26.2299 19.2777C25.9108 19.9384 26.1879 20.7324 26.8483 21.0515C27.0346 21.1412 27.2312 21.1838 27.4249 21.1838C27.9188 21.1838 28.3928 20.9073 28.6218 20.4331C29.8993 17.788 30.5471 14.7115 30.5471 11.289C30.5471 11.2384 30.5434 11.1886 30.538 11.1396C30.5442 11.094 30.5471 11.0545 30.5471 11.0234V10.0937C31.9115 9.10827 33.0669 7.77729 34.0002 6.37499C33.9999 6.37499 31.5517 7.53502 29.966 7.63566Z"
                  fill="#FF368A" />
              </g>
              <defs>
                <clipPath id="clip0_408_7326">
                  <rect width="34" height="34" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
          <a class="header-menu__icon-link" href="javascript:void(0)">
            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_408_7322)">
                <path
                  d="M32.6719 23.375C33.4054 23.375 34 22.7804 34 22.0469V5.3125C34 2.38319 31.6168 0 28.6875 0H5.3125C2.38319 0 0 2.38319 0 5.3125V28.6875C0 31.6168 2.38319 34 5.3125 34H28.6875C31.6168 34 34 31.6168 34 28.6875C34 27.954 33.4054 27.3594 32.6719 27.3594C31.9384 27.3594 31.3438 27.954 31.3438 28.6875C31.3438 30.1522 30.1522 31.3438 28.6875 31.3438H21.7148V19.7891H24.7031C25.4366 19.7891 26.0312 19.1945 26.0312 18.4609C26.0312 17.7274 25.4366 17.1328 24.7031 17.1328H21.7148V13.4805C21.7148 12.0158 22.9064 10.8242 24.3711 10.8242H25.0352C25.7687 10.8242 26.3633 10.2296 26.3633 9.49609C26.3633 8.76257 25.7687 8.16797 25.0352 8.16797H24.3711C21.4418 8.16797 19.0586 10.5512 19.0586 13.4805V17.1328H16.0703C15.3368 17.1328 14.7422 17.7274 14.7422 18.4609C14.7422 19.1945 15.3368 19.7891 16.0703 19.7891H19.0586V31.3438H5.3125C3.84784 31.3438 2.65625 30.1522 2.65625 28.6875V5.3125C2.65625 3.84784 3.84784 2.65625 5.3125 2.65625H28.6875C30.1522 2.65625 31.3438 3.84784 31.3438 5.3125V22.0469C31.3438 22.7804 31.9384 23.375 32.6719 23.375Z"
                  fill="#FF368A" />
              </g>
              <defs>
                <clipPath id="clip0_408_7322">
                  <rect width="34" height="34" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
          <a class="header-menu__icon-link" href="javascript:void(0)">
            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_408_7328)">
                <path
                  d="M27.2869 6.88191C24.9225 6.65042 21.2186 6.37449 16.9998 6.37449C12.7809 6.37449 9.07698 6.65035 6.71268 6.88191C4.86881 7.06241 3.39994 8.46779 3.14056 10.2996C2.81888 12.571 2.65578 14.8252 2.65578 16.9997C2.65578 19.1743 2.81888 21.4285 3.14056 23.6999C3.39994 25.5317 4.86881 26.9371 6.71268 27.1176C9.07705 27.3491 12.7809 27.625 16.9998 27.625C21.2186 27.625 24.9226 27.3491 27.2869 27.1176C29.1308 26.9371 30.5996 25.5317 30.859 23.6999C30.9619 22.9736 31.634 22.4681 32.3602 22.5711C33.0866 22.6739 33.5919 23.346 33.4891 24.0723C33.0572 27.1216 30.6132 29.461 27.5456 29.7613C25.1225 29.9985 21.3258 30.2812 16.9997 30.2812C12.6736 30.2812 8.87703 29.9985 6.45382 29.7613C3.3862 29.461 0.942205 27.1216 0.510357 24.0723C-0.170119 19.2425 -0.170119 14.757 0.510357 9.92716C0.942205 6.87793 3.3862 4.53846 6.45382 4.23823C8.87696 4.00102 12.6736 3.71826 16.9997 3.71826C21.3258 3.71826 25.1224 4.00102 27.5456 4.23823C30.6132 4.53846 33.0572 6.87793 33.4891 9.92722C33.8281 12.3215 34 14.7011 34 16.9997C33.9306 18.7602 31.414 18.7623 31.3437 16.9997C31.3437 14.8252 31.1806 12.571 30.8589 10.2997C30.5996 8.46779 29.1308 7.06241 27.2869 6.88191ZM22.1469 14.8659C23.8636 15.8246 23.8633 18.4076 22.1469 19.3659L16.4455 22.6743C15.6344 23.1449 14.6649 23.1466 13.8523 22.6785C13.0372 22.2091 12.5505 21.3664 12.5505 20.4243V13.8075C12.5505 12.8654 13.0372 12.0228 13.8523 11.5533C14.6649 11.0853 15.6344 11.087 16.4455 11.5576L22.1469 14.8659ZM20.7317 17.116L15.2068 13.91V20.322L20.7317 17.116Z"
                  fill="#FF368A" />
              </g>
              <defs>
                <clipPath id="clip0_408_7328">
                  <rect width="34" height="34" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>