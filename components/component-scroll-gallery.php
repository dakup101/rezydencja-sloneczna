<?php
$title = get_field('title');
$gallery = get_field('gallery')
?>
<section class="gallery">
    <div class="row mx-0 px-0">
        <div class="col-12 col-md-10 offset-md-1">
            <h1 class="content__title">Galeria naszej inwestycji</h1>
            <div class="w-100 mt-4">
                <div class="scroll-gallery">
                    <div class="swiper-wrapper">
                        <?php foreach ($gallery as $el) : ?>
                            <div class="swiper-slide">
                                <div class="scroll-gallery__wrapper">
                                    <img src="<?php echo $el['img'] ?>"
                                         class="scroll-gallery__img"
                                         alt=""
                                    >
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="scroll-circle">
                <svg id="progressBar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
                    <circle class="b" cx="35" cy="35" r="32.5"/>
                    <circle id="progressBarFiller" class="b" cx="35" cy="35" r="32.5"/>
                </svg>
                <svg id="progressArrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.83 36.11">
                    <polyline class="b" points="1.5 24.03 11.92 34.61 22.33 24.03"/>
                    <line class="b" x1="11.92" y1="34.61" x2="11.92" y2="1.5"/>
                </svg>
            </div>
        </div>
    </div>
</section>
