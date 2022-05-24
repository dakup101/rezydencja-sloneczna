<?php
$baner = get_field('banner');
$title = $baner['title'];
$subtitle = $baner['subtitle'];
$img = $baner['img'];
?>
<section class="homepage-baner">
    <div class="container-fluid text-white">
        <h1 class="homepage-baner__title text-center"><?php echo $title; ?></h1>
        <p class="homepage-baner__subtitle text-center"><?php echo $subtitle; ?></p>
    </div>
    <div class="homepage-baner__img-wrapper">
        <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" class="homepage-baner__img-wrapper--img" lazyload>
    </div>
    <div class="homepage-baner__arrow text-white" data-baner_arrow>
        <div class="homepage-baner__arrow--text">Przewiń w dół</div>
        <svg class="homepage-baner__arrow--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 42"><path d="M.22,35.53s3.5,4.5,5.26,6.26c.15,.15,.34,.22,.53,.22s.38-.07,.53-.22c1.75-1.75,5.25-6.24,5.25-6.24,.14-.14,.22-.33,.22-.52,0-.19-.07-.39-.22-.53-.29-.29-.77-.29-1.06,0l-3.97,4.97V.75c0-.41-.34-.75-.75-.75s-.75,.34-.75,.75V39.44l-3.98-4.98c-.29-.29-.76-.29-1.05,0C.07,34.62,0,34.81,0,35.01c0,.19,.07,.38,.22,.52Z"/></svg>
    </div>
</section>