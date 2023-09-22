<?php
$slides = get_field('slider');
?>

<?php if (!empty($slides)) : ?>
<!-- Slider main container -->
<section class="offer-slider mt-5 pt-5 mb-5 ">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide d-none d-md-block"></div>
            <div class="swiper-slide d-none d-md-block"></div>
            <?php foreach ($slides as $el) : ?>
            <div class="swiper-slide">
                <div class="swiper-slide__inner">
                    <img src="<?php echo $el['sliders'] ?>"
                         alt="Rezydencja Słoneczna"
                         class="swiper-slide__img"
                         loading="lazy">
                </div>
            </div>
            <?php endforeach; ?>
            <div class="swiper-slide d-none d-md-block"></div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button__wrapper">
            <div class="swiper-button__wrapper--buttons">
                <div class="swiper-button-prev">
                    <svg viewBox="0 0 42 15"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_130_2)">
                            <path d="M1 6.99994C0.447715 6.99994 4.82823e-08 7.44766 0 7.99994C-4.82823e-08 8.55222 0.447715 8.99994 1 8.99994V6.99994ZM41.7071 8.70706C42.0976 8.31654 42.0976 7.68336 41.7071 7.29284L35.3431 0.928879C34.9526 0.538355 34.3195 0.538355 33.9289 0.928879C33.5384 1.3194 33.5384 1.95256 33.9289 2.34309L39.5858 7.99994L33.9289 13.6568C33.5384 14.0473 33.5384 14.6804 33.9289 15.071C34.3195 15.4615 34.9526 15.4615 35.3431 15.071L41.7071 8.70706ZM1 8.99994H41V6.99994H1V8.99994Z"
                                  fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_130_2">
                                <rect width="42"
                                      height="15"
                                      fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </div>
                <div class="swiper-button-next">
                    <svg viewBox="0 0 42 15"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_130_2)">
                            <path d="M1 6.99994C0.447715 6.99994 4.82823e-08 7.44766 0 7.99994C-4.82823e-08 8.55222 0.447715 8.99994 1 8.99994V6.99994ZM41.7071 8.70706C42.0976 8.31654 42.0976 7.68336 41.7071 7.29284L35.3431 0.928879C34.9526 0.538355 34.3195 0.538355 33.9289 0.928879C33.5384 1.3194 33.5384 1.95256 33.9289 2.34309L39.5858 7.99994L33.9289 13.6568C33.5384 14.0473 33.5384 14.6804 33.9289 15.071C34.3195 15.4615 34.9526 15.4615 35.3431 15.071L41.7071 8.70706ZM1 8.99994H41V6.99994H1V8.99994Z"
                                  fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_130_2">
                                <rect width="42"
                                      height="15"
                                      fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </div>
            </div>
            <a href="#"
               class="swiper-contact-link">
                zobacz galerię zdjęć
            </a>
        </div>
        <!-- <img src="<?php echo THEME_URI.'/assets/images/bg-mountain.jpg' ?>"
             alt="Białka Tatrzańska"
             class="swiper__bg"
             loading="lazy"> -->
    </div>
</section>
<?php endif; ?>