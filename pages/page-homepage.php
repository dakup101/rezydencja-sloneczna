<?php /* Template Name: Strona Główna */ ?>
<?php get_header(); ?>
<main>
    <?php get_template_part('/components/components-homepage/homepage-baner'); ?>
    <!-- maincontent (comp) + icons row (comp) -->
    <?php get_template_part('/components/components-homepage/homepage-maincontent'); ?>
    <?php get_template_part('/components/components-homepage/homepage-map'); ?>
    <?php get_template_part('/components/components-homepage/homepage-cons'); ?>
    <?php get_template_part('/components/component-swiper'); ?>
    <?php get_template_part('/components/component-some-apartaments-list'); ?>
    <?php get_template_part('/components/component-contact-form'); ?>
    <style>
        .swiper-slide-next + .swiper-slide{
            width: 35% !important;
        }
        .swiper-slide-next + .swiper-slide .swiper-slide__inner{
            height: 500px;
        }
    </style>
</main>
<?php get_footer(); ?>
