<?php
$cf = get_field('cf', 'options');
$title = $cf['title'];
$subtitle = $cf['subtitle'];
$shortcode = $cf['shortcode'];
?>
<section class="contact py-5">
    <h2 class="content__title text-center">
        Wypełnij formularz kontaktowy
    </h2>
    <div class="content__text text-center mb-5 pb-2">
        lub zadzwoń teraz:
        <a href="tel:+48883663036">
            +48 883 663 036
        </a>
    </div>
    <div class="row mx-0 px-0">
        <div class="col-12 col-md-6 offset-md-3">
            <?php echo do_shortcode($shortcode); ?>
        </div>
    </div>
</section>