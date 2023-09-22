<?php /* Template Name: Zwrot VAT */ ?>
<?php get_header(); ?>
<?php
$title = get_field('title');
$subtitle = get_field('subtitle');
$text_title = get_field('text_title');
$text = get_field('text');
$img = get_field('img');
?>
    <main class="page-main">
        <section class="mb-5">
            <div class="row mx-0 px-0">
                <div class="col-12 col-md-10 offset-md-1">
                    <h1 class="content__title"><?php echo $title ?></h1>
                    <div class="wrapper">
                        <div class="row mx-0 px-0">
                            <div class="col-12 col-md-6 mx-0 px-0">
                                <div class="content__title">
                                    <?php echo $subtitle ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper mt-5">
                        <div class="row mx-0 px-0">
                            <div class="col-12 col-md-6 px-md-0 mx-0 pe-md-5">
                                <img src="<?php echo $img ?>" alt="<?php echo $title ?>" class="w-100">
                            </div>
                            <div class="col-12 col-md-6 px-md-0 mx-0 ps-md-5">
                                <div class="content__title">
                                    <?php echo $text_title ?>
                                </div>
                                <div class="content__text">
                                    <?php echo $text ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('/components/component-faq'); ?>
        <?php get_template_part('/components/component-contact-form'); ?>
    </main>
<?php get_footer(); ?>