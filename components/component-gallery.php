<?php
$title = get_field('title');
$galleries = array_reverse((array) get_field('galleries'));
?>
<?php foreach ($galleries as $gallery) : ?>
    <section class="gallery mb-5">
        <div class="row mx-0 px-0">
            <div class="col-12 col-md-10 offset-md-1">
                <h1 class="content__title"><?php echo $gallery["title"]; ?></h1>
                <div class="gallery__wrapper">
                    <?php $counter = 0;
                    foreach ($gallery["gallery"] as $item) : ?>
                        <a href="#" class="gallery__item " data-gallery_image="<?php echo $counter ?>">
                            <img src="<?php echo $item['img'] ?>" alt="Rezydencja Słoneczna" class="gallery__item--img glightbox" loading="lazy" data-glightbox-desc="">
                        </a>
                    <?php $counter++;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>
<div class="gallery-lightbox" data-lightbox>
    <div class="gallery-lightbox__inner">
        <div class="gallery-lightbox__item">
            <img src="" alt="" class="gallery-lightbox__item--img" data-lightbox_img loading="lazy">
        </div>
        <div class="gallery-lightbox__nav">
            <div class="gallery-lightbox__nav--left">
                <button class="gallery-lightbox__nav--item" data-gallety_prev>
                    Poprzednie
                </button>
                <p class="gallery-lightbox__nav--counter" data-gallery_counter></p>
                <button class="gallery-lightbox__nav--item" data-gallery_next>
                    Następne
                </button>
            </div>
            <button class="gallery-lightbox__close" data-lightbox_close>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                </svg>
            </button>
        </div>

    </div>

</div>