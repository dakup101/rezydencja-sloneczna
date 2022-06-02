<?php
$cf = get_field('cf', 'options');
$title = $cf['title'];
$subtitle = $cf['subtitle'];
$shortcode = $cf['shortcode'];
?>
<section class="contact py-5">
    <h2 class="content__title text-center"><?php echo $title ?></h2>
    <div class="content__text text-center mb-5"><?php echo $subtitle ?></div>
    <div class="row mx-0 px-0">
        <div class="col-12 col-md-6 offset-md-3">
            <?php echo do_shortcode($shortcode); ?>
        </div>
    </div>
</section>