<?php
$slides = get_field('slider');
?>

<?php if (!empty($slides)) : ?>
    <!-- Slider main container -->
    <section class="offer-slider my-3 mb-5 my-md-5">
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
                                 loading="lazy"
                            >
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="swiper-slide d-none d-md-block"></div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button__wrapper">
                <div class="swiper-button__wrapper--buttons">
                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 21">
                            <path d="M38.88,11l-10.53,9.24,.64,.76,12-10.52L29,0l-.65,.76,10.53,9.24H0v1H38.88Z"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 21">
                            <path d="M38.88,11l-10.53,9.24,.64,.76,12-10.52L29,0l-.65,.76,10.53,9.24H0v1H38.88Z"/>
                        </svg>
                    </div>
                </div>
                <div class="swiper__counter"
                     data-slides_counter
                     data-slide="3"
                     data-slides="<?php echo sizeof($slides) ?>">
                    3/<?php echo sizeof($slides) ?>
                </div>
            </div>
            <img src="<?php echo THEME_URI.'/assets/images/bg-mountain.jpg' ?>"
                 alt="Białka Tatrzańska"
                 class="swiper__bg"
                 loading="lazy"
            >
        </div>
    </section>
<?php endif; ?>