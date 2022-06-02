<?php /* Template Name: Kontakt */ ?>
<?php get_header('page'); ?>
<?php
$title_left = get_field('title');
$text_left = get_field('text_left');
$subtitle_left = get_field('subtitle_left');
$subtitle_right = get_field('subtitle_right');
$text_right = get_field('text_right');
$tel = get_field('tel');
$email = get_field('email');
?>
<main class="page-main">
    <section class="contact-page mb-5">
        <div class="row mx-0 px-0">
            <div class="col-12 col-md-10 offset-md-1">
                <h1 class="content__title"><?php echo $title_left ?></h1>
                <div class="wrapper mt-5">
                    <div class="row mx-0 px-0">
                        <div class="col-12 col-md-7 px-0">
                            <div class="content__title contact-page__subtitle">
                                <?php echo $subtitle_left ?>
                            </div>
                            <div class="content__text">
                                <?php echo $text_left ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 offset-md-1 px-0">
                            <div class="content__title">
                                <?php echo $subtitle_right ?>
                            </div>
                            <div class="content__text">
                                <?php echo $text_right ?>
                            </div>
                            <a href="tel:<?php echo $tel ?>" class="contact-link"><?php echo $tel ?></a>
                            <a href="mailto:<?php echo $email ?>" class="contact-link"><?php echo $email  ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('/components/component-contact-form'); ?>
</main>
<?php get_footer(); ?>