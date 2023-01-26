<?php /* Template Name: Sam Tekst */ ?>
<?php get_header('page'); ?>
    <main class="page-main">
        <section class="mb-5">
            <div class="row mx-0 px-0">
                <div class="col-12 col-md-10 offset-md-1">
                    <?php
                    $title = get_field('title');
                    $content = get_field('content')
                    ?>
                    <h1 class="content__title"><?php echo $title?></h1>
                    <div class="content__text">
                        <?php echo $content ?>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('/components/component-contact-form'); ?>
    </main>
<?php get_footer(); ?>