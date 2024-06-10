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
?>

<footer class="footer">
  <div class="top-footer">
    <div class="container">
      <div class="top-footer__top-container">
        <div class="top-footer__navigation">
          <div class="top-footer__title">Navigation</div>
          <div class="top-footer__links">
            <a class="top-footer__link underline-hover" href="javascript:void(0)"
              aria-label="Перейти на главную страницу">Main</a>
            <a class="top-footer__link underline-hover" href="javascript:void(0)"
              aria-label="Перейти на страницу 'о нас'">About Us</a>
            <a class="top-footer__link underline-hover" href="javascript:void(0)" aria-label="Связаться с нами">Contact
              Us</a>
            <a class="top-footer__link underline-hover" href="javascript:void(0)"
              aria-label="Перейти на страницу 'до и после'">Before & After</a>
            <a class="top-footer__link underline-hover" href="javascript:void(0)"
              aria-label="Перейти к ресурсам">Resources</a>
            <a class="top-footer__link underline-hover" href="javascript:void(0)"
              aria-label="Перейти на страницу оплаты">Payment</a>
          </div>
        </div>
        <div class="top-footer__contacts">
          <div class="top-footer__title">Contact</div>
          <div class="top-footer__contact">
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
            <div class="contact__text">
              <a class="underline-hover" href="javascript:void(0)" aria-label="Открыть наше местоположение на картах'">
                4535 Forsyth Rd Suite 2<br> Macon, GA 31210
              </a>
            </div>
          </div>
          <div class="top-footer__contact">
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
            <a class="contact__text underline-hover" href="tel:4782543220" aria-label="позвонить нам">
              (478) 254-3220
            </a>
          </div>
          <div class="top-footer__social">
            <a class="top-footer__icon-link" href="javascript:void(0)"
              aria-label="Перейти на нашу страницу в instagram">
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
            <a class="top-footer__icon-link" href="javascript:void(0)" aria-label="Перейти на нашу страницу в twitter">
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
            <a class="top-footer__icon-link" href="javascript:void(0)" aria-label="Перейти на нашу страницу в facebook">
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
            <a class="top-footer__icon-link" href="javascript:void(0)" aria-label="Перейти на наш канал на youtube">
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
      <div class="top-footer__images-grid">
        <img class="top-footer__image" src="/wp-content/themes/testproject/resources/images/footer-1.jpg"
          alt="Фото c девушкой из instagram" />
        <img class="top-footer__image" src="/wp-content/themes/testproject/resources/images/footer-2.jpg"
          alt="Фото c девушкой из instagram" />
        <img class="top-footer__image" src="/wp-content/themes/testproject/resources/images/footer-3.jpg"
          alt="Фото c девушкой из instagram" />
        <img class="top-footer__image" src="/wp-content/themes/testproject/resources/images/footer-4.jpg"
          alt="Фото c девушкой из instagram" />
      </div>
    </div>
  </div>
  <div class="container">
    <div class="footer__separator"></div>
  </div>
  <div class="bottom-footer container">
    <div class="bottom-footer__text">
      © 2021 The Happy Fitness
    </div>
    <div class="bottom-footer__by">
      <div class="bottom-footer__text">Designed & Marketed by</div>
      <a class="by__icon" href="javascript:void(0)" aria-label="Перейти на страницу дизейнера сайта">
        <svg fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_408_7338)">
            <path
              d="M63.5333 16.6607V15.4464C63.5333 15.3392 63.4451 15.25 63.3393 15.25H63.0044C62.7576 15.25 62.5461 15.0357 62.5461 14.75V11.2678C62.5461 8.80352 61.4531 7.03567 59.0027 7.03567C57.7511 7.03567 56.4114 7.67852 56.0588 8.66067V7.05352C56.0588 6.89281 55.9001 6.76781 55.7591 6.83924C55.4947 6.98209 52.8857 6.98209 52.7094 7.05352C52.6741 7.07138 52.6565 7.10709 52.6565 7.14281V8.57138C52.6565 8.64281 52.727 8.67852 52.7975 8.67852C52.7975 8.67852 53.6437 8.69638 53.6437 9.30352V14.7678C53.6437 15.0357 53.4321 15.2678 53.1853 15.2678H51.6517C51.4049 15.2678 51.1933 15.0535 51.1933 14.7678V7.05352C51.1933 6.89281 51.0347 6.74995 50.8936 6.82138C50.5763 6.96424 48.0202 6.98209 47.8439 7.05352C47.8086 7.07138 47.791 7.10709 47.791 7.14281V8.57138C47.791 8.64281 47.8439 8.67852 47.932 8.67852C47.932 8.67852 48.7782 8.67852 48.7782 9.28567V14.7678C48.7782 15.0357 48.5667 15.2678 48.3199 15.2678H47.9849C47.8792 15.2678 47.791 15.3571 47.791 15.4642V16.6785C47.791 16.7857 47.8792 16.875 47.9849 16.875H56.8697C56.9755 16.875 57.0636 16.7857 57.0636 16.6785V15.4642C57.0636 15.3571 56.9755 15.2678 56.8697 15.2678H56.5348C56.288 15.2678 56.0764 15.0535 56.0764 14.7678C56.0764 14.7678 56.094 12.75 56.094 11.9107C56.094 10.6785 56.3408 8.67852 58.1389 8.67852C59.9194 8.67852 60.1838 10.6785 60.1838 11.9107C60.1838 12.3392 60.1662 14.7678 60.1662 14.7678C60.1662 15.0357 59.9547 15.2678 59.7079 15.2678H59.3729C59.2672 15.2678 59.179 15.3571 59.179 15.4642V16.6785C59.179 16.7857 59.2672 16.875 59.3729 16.875H60.1838H62.599H63.4099C63.4451 16.875 63.5333 16.7857 63.5333 16.6607Z"
              fill="#135978" />
            <path
              d="M42.5909 7.05378C40.9338 7.05378 39.8056 8.67878 39.8056 8.67878V1.78592C39.8056 1.62521 39.6646 1.62521 39.5059 1.64307C38.7479 1.78592 36.6325 1.82164 36.4562 1.89307C36.4209 1.91092 36.4033 1.94664 36.4033 1.98235V3.39307C36.4033 3.46449 36.4738 3.50021 36.5443 3.50021C36.5443 3.50021 37.3905 3.50021 37.3905 4.10735V14.7324C37.3905 15.0002 37.179 15.2324 36.9322 15.2324H36.5972C36.4915 15.2324 36.4033 15.3216 36.4033 15.4288V16.6431C36.4033 16.7502 36.4915 16.8395 36.5972 16.8395H39.5236C39.6822 16.8395 39.8056 16.6966 39.8056 16.5359V16.0181C40.546 16.7145 41.498 16.8395 42.538 16.8395C44.9179 16.8395 46.9452 15.0002 46.9452 11.9109C46.9452 8.82164 45.2352 7.05378 42.5909 7.05378ZM41.7271 15.2502C40.7047 15.2502 39.8056 14.6431 39.8056 13.8216C39.8056 13.3931 39.8056 12.4466 39.8056 11.6609C39.8056 9.91092 40.7223 8.66092 41.8153 8.66092C43.2961 8.66092 43.8954 10.1966 43.8954 12.1788C43.8954 13.6966 43.1903 15.2502 41.7271 15.2502Z"
              fill="#135978" />
            <path
              d="M14.9842 0H10.4184C10.3127 0 10.2069 0.107143 10.2069 0.232143V1.39286C10.2069 1.51786 10.295 1.625 10.4184 1.625H10.6829C10.9649 1.625 11.1941 1.875 11.1941 2.17857V7.05357H3.98404V2.17857C3.98404 1.875 4.21321 1.625 4.49527 1.625H4.7597C4.86547 1.625 4.97124 1.51786 4.97124 1.39286V0.232143C4.97124 0.107143 4.8831 0 4.7597 0H0.211542C0.105771 0 0 0.107143 0 0.232143V1.39286C0 1.51786 0.0881425 1.60714 0.211542 1.60714H0.493598C0.775654 1.60714 1.00482 1.85714 1.00482 2.16071V14.6964C1.00482 15 0.775654 15.25 0.493598 15.25H0.211542C0.105771 15.25 0 15.3571 0 15.4821V16.6607C0 16.7857 0.0881425 16.8929 0.211542 16.8929H4.7597C4.86547 16.8929 4.97124 16.7857 4.97124 16.6607V15.4821C4.97124 15.3571 4.8831 15.25 4.7597 15.25H4.49527C4.21321 15.25 3.98404 15 3.98404 14.6964V8.66071H11.1941V14.6964C11.1941 15 10.9649 15.25 10.6829 15.25H10.4184C10.3127 15.25 10.2069 15.3571 10.2069 15.4821V16.6607C10.2069 16.7857 10.295 16.8929 10.4184 16.8929H14.9842C15.09 16.8929 15.1958 16.7857 15.1958 16.6607V15.4821C15.1958 15.3571 15.1076 15.25 14.9842 15.25H14.7022C14.4201 15.25 14.1909 15 14.1909 14.6964V2.16071C14.1909 1.85714 14.4201 1.60714 14.7022 1.60714H14.9842C15.09 1.60714 15.1958 1.5 15.1958 1.375V0.214286C15.1958 0.107143 15.09 0 14.9842 0Z"
              fill="#135978" />
            <path
              d="M26.4605 15.2499H25.9317C25.7025 15.2499 25.632 15.0713 25.632 14.8927V7.24988C25.632 7.07131 25.6144 7.03559 25.4381 7.03559C24.9269 7.03559 23.9573 6.96417 23.5166 6.82131C23.3755 6.76774 23.2169 6.87488 23.2169 7.03559V8.64274C22.9701 8.08917 22.0182 7.01774 20.7136 7.01774C18.1928 7.01774 16.0068 9.35702 16.0068 12.4642C16.0068 15.5713 17.9107 16.8392 20.4668 16.8392C22.0887 16.8392 23.2169 15.9999 23.2169 15.9999C23.2169 15.9999 23.305 16.8392 24.1336 16.8392H26.4605C26.5487 16.8392 26.6192 16.7677 26.6192 16.6785V15.3749C26.6192 15.3213 26.5487 15.2499 26.4605 15.2499ZM21.0486 15.2499C19.7617 15.2499 19.0742 13.7677 19.0742 12.1785C19.0742 10.4463 19.9732 8.66059 21.1544 8.66059C22.406 8.66059 23.2345 9.49988 23.2345 11.9463C23.2169 13.1963 22.9172 15.2499 21.0486 15.2499Z"
              fill="#135978" />
            <path
              d="M80.8447 6.82129C78.0241 6.82129 75.7324 9.05343 75.7324 11.8391C75.7324 14.6249 77.8302 16.8749 80.8447 16.8749C82.4665 16.8749 83.8768 16.107 84.7406 15.0713C84.8111 14.9999 84.7935 14.8749 84.7406 14.8034C84.7406 14.8034 83.3832 13.9641 83.3656 13.9641C83.295 13.9106 83.2069 13.9463 83.154 13.9999C82.9425 14.3034 82.255 15.2677 80.8447 15.2499C78.7998 15.2499 78.8174 12.7856 78.8174 12.7856H85.7102C85.8336 12.7856 85.9393 12.6963 85.9393 12.5534C85.9217 8.62486 83.013 6.82129 80.8447 6.82129ZM78.7998 11.1249C78.7998 11.1249 78.7998 8.66057 80.8271 8.66057C82.8543 8.66057 82.872 11.1249 82.872 11.1249H78.7998Z"
              fill="#135978" />
            <path
              d="M50.3771 5.1562C51.3567 4.60693 51.7494 3.42721 51.2543 2.52122C50.7592 1.61523 49.5638 1.32606 48.5842 1.87533C47.6046 2.4246 47.2119 3.60432 47.707 4.51031C48.2021 5.4163 49.3975 5.70547 50.3771 5.1562Z"
              fill="#135978" />
            <path
              d="M34.851 7.08942C34.8334 7.08942 34.8157 7.07156 34.7805 7.07156C33.9167 6.91085 32.4359 7.44656 31.2724 8.66085V7.05371C31.2724 6.89299 31.1138 6.76799 30.9727 6.83942C30.7083 6.98228 28.0993 6.98228 27.923 7.05371C27.8877 7.07156 27.8701 7.10728 27.8701 7.14299V8.55371C27.8701 8.62514 27.923 8.66085 28.0111 8.66085C28.0111 8.66085 28.8573 8.66085 28.8573 9.26799V14.7501C28.8573 15.018 28.6458 15.2501 28.399 15.2501H28.064C27.9583 15.2501 27.8701 15.3394 27.8701 15.4466V16.6608C27.8701 16.768 27.9583 16.8573 28.064 16.8573H32.0833C32.1891 16.8573 32.2772 16.768 32.2772 16.6608V15.4466C32.2772 15.3394 32.1891 15.2501 32.0833 15.2501H31.7484C31.5016 15.2501 31.29 15.0358 31.29 14.7501V11.1073C31.29 9.30371 32.5417 8.66085 32.8414 8.66085C32.8414 9.71442 33.5818 10.4108 34.5161 10.4108C35.4327 10.4108 36.1908 9.66085 36.1908 8.71442C36.1555 7.92871 35.609 7.26799 34.851 7.08942Z"
              fill="#135978" />
            <path
              d="M72.8057 7.53565C73.0173 7.37493 73.4756 7.19636 73.7577 7.60707C74.0397 8.01779 74.4276 8.24993 74.9035 8.24993C75.6616 8.24993 76.2609 7.62493 76.2609 6.87493C76.2609 6.33922 75.8907 5.41064 74.4628 5.41064C72.7881 5.41064 71.2897 7.5535 71.1839 7.51779C70.514 7.21422 69.7736 7.07136 68.9803 7.07136C66.1598 7.07136 63.8681 9.24993 63.8681 11.9642C63.8681 13.6785 64.7848 15.1785 66.1598 16.0535C65.6662 16.2499 65.296 16.8035 65.296 17.3928C65.296 17.9821 65.8425 18.5178 67.1822 18.8214C71.2192 19.7142 72.5413 21.4642 72.5413 23.2142C72.5413 25.5535 71.1663 26.3749 69.1214 26.3749C67.0765 26.3749 65.7015 25.3035 65.7015 23.2142C65.7015 20.7856 67.1999 20.4821 66.9178 20.1964C66.6358 19.8928 62.5283 20.0714 62.5283 23.2142C62.5283 26.1428 65.4547 27.9999 69.1214 27.9999C72.5413 27.9999 75.7144 26.5892 75.7144 23.2142C75.7144 18.9821 68.6278 17.9821 67.764 17.7321C67.0941 17.5356 67.3056 16.6071 67.8521 16.7499C68.2047 16.8571 68.5749 16.8571 68.9627 16.8571C71.7833 16.8571 74.075 14.6606 74.075 11.9285C74.075 10.6249 73.5285 9.41065 72.6647 8.53564C72.2945 8.12493 72.5942 7.69636 72.8057 7.53565ZM68.998 15.2499C67.7816 15.2499 66.9531 14.1249 66.9531 11.9999C66.9531 9.87493 67.7816 8.66065 68.998 8.66065C70.2143 8.66065 71.0429 9.87493 71.0429 11.9999C71.0429 14.1249 70.2143 15.2499 68.998 15.2499Z"
              fill="#135978" />
            <path
              d="M93.6958 7.08942C93.6781 7.08942 93.6605 7.07156 93.6253 7.07156C92.7615 6.91085 91.2807 7.44656 90.1172 8.66085V7.05371C90.1172 6.89299 89.9585 6.76799 89.8175 6.83942C89.5531 6.98228 86.944 6.98228 86.7677 7.05371C86.7325 7.07156 86.7148 7.10728 86.7148 7.14299V8.55371C86.7148 8.62514 86.7677 8.66085 86.8559 8.66085C86.8559 8.66085 87.702 8.66085 87.702 9.26799V14.7501C87.702 15.018 87.4905 15.2501 87.2437 15.2501H86.9088C86.803 15.2501 86.7148 15.3394 86.7148 15.4466V16.6608C86.7148 16.768 86.803 16.8573 86.9088 16.8573H90.9281C91.0339 16.8573 91.122 16.768 91.122 16.6608V15.4466C91.122 15.3394 91.0339 15.2501 90.9281 15.2501H90.5931C90.3463 15.2501 90.1348 15.0358 90.1348 14.7501V11.1073C90.1348 9.30371 91.3864 8.66085 91.6861 8.66085C91.6861 9.71442 92.4265 10.4108 93.3608 10.4108C94.2775 10.4108 95.0355 9.66085 95.0355 8.71442C95.0003 7.92871 94.4362 7.26799 93.6958 7.08942Z"
              fill="#135978" />
            <path
              d="M31.0443 21.3751C31.0443 20.6072 30.4978 20.0715 29.7045 20.0715H27.8535V23.8215H28.7526V22.6608H29.299C29.5987 23.0715 29.8808 23.4465 30.1805 23.8215H31.2382C30.9385 23.4287 30.6036 22.9644 30.2862 22.5715C30.7446 22.3572 31.0443 21.9108 31.0443 21.3751ZM29.6164 21.9465H28.7702V20.768H29.6164C30.0923 20.768 30.1628 21.1787 30.1628 21.3751C30.1452 21.768 29.8632 21.9465 29.6164 21.9465Z"
              fill="#135978" />
            <path
              d="M36.2973 20.0715H35.1162L33.6706 21.6251V20.0715H32.7363V23.8215H33.6706V22.9644L34.1642 22.4108L35.1867 23.8215H36.2973L34.7812 21.7501L36.2973 20.0715Z"
              fill="#135978" />
            <path
              d="M37.9893 23.8213H40.9332V23.0534H38.9236V22.357H40.704V21.5713H38.9236V20.8391H40.9332V20.0713H37.9893V23.8213Z"
              fill="#135978" />
            <path d="M42.6084 20.8394H43.86V23.8215H44.7943V20.8394H46.046V20.0715H42.6084V20.8394Z" fill="#135978" />
            <path d="M48.6726 20.0715H47.7383V23.8215H48.6726V20.0715Z" fill="#135978" />
            <path
              d="M53.0096 22.2499L51.2115 20.0713H50.3477V23.8213H51.2467V21.6784L53.0096 23.8213H53.9086V20.0713H53.0096V22.2499Z"
              fill="#135978" />
            <path
              d="M19.092 20.0715L17.9814 21.5358L16.8884 20.0715H15.9541V23.8215H16.8884V21.5358L17.9814 22.9822L19.092 21.5358V23.8215H20.0263V20.0715H19.092Z"
              fill="#135978" />
            <path
              d="M24.2044 20.0715H23.6756L21.7012 23.8215H22.706L23.0233 23.1787H24.8567L25.1916 23.8215H26.1788L24.2044 20.0715ZM23.4111 22.393L23.94 21.2858L24.4689 22.393H23.4111Z"
              fill="#135978" />
            <path
              d="M59.3731 21.6609H57.4868V22.4823H58.3859C58.2449 22.768 57.8747 22.9644 57.5221 22.9644C56.9756 22.9644 56.4996 22.5001 56.4996 21.9287C56.4996 21.3751 56.9756 20.9109 57.5221 20.9109C57.7865 20.9109 58.0686 21.0537 58.2801 21.2859C58.4211 21.1966 58.7737 20.9823 59.0558 20.8216C58.6856 20.3394 58.1215 20.0537 57.5221 20.0537C56.4644 20.0537 55.6006 20.893 55.6006 21.9287C55.6006 22.9644 56.4644 23.8037 57.5221 23.8037C58.5093 23.8037 59.3026 23.1251 59.3907 22.2144V22.1966C59.3907 22.1251 59.3907 22.0716 59.3907 22.0001C59.3907 21.9108 59.3907 21.8037 59.3731 21.7144V21.6609Z"
              fill="#135978" />
          </g>
          <defs>
            <clipPath id="clip0_408_7338">
              <rect width="95" height="28" fill="white" />
            </clipPath>
          </defs>
        </svg>
      </a>
    </div>
  </div>
</footer>

<?php
\Harbinger_Marketing\Modal_Action::render_modals();