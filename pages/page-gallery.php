<?php /* Template Name: Galeria */ ?>
<?php get_header(); ?>
    <main class="page-main">
        <?php get_template_part('/components/component-gallery'); ?>
        <?php get_template_part('/components/components-homepage/homepage-cons'); ?>
    </main>
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
<?php get_footer(); ?>