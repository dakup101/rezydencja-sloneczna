<?php /* Template Name: O Inwestycji */ ?>
<?php get_header(); ?>
<main class="page-main">
    <section class="mb-5">
        <?php
            $data = get_field('part_1');
            $title = $data['title'];
            $text = $data['text'];
            $img = $data['img'];
            ?>
        <div class="row mx-0 px-0">
            <div class="col-12 col-md-10 offset-md-1">
                <h1 class="content__title">
                    <?php echo $title ?>
                </h1>
                <div class="wrapper">
                    <div class="row mx-0 px-0">
                        <div class="col-12 col-md-8 px-0 mx-0">
                            <div class="content__title">
                                <?php echo $text ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <img class="w-100"
         src="<?php echo $img ?>"
         alt="<?php echo $title ?>">
    <section class="position-relative mb-5">
        <div class="row py-5 px-0 mx-0">
            <div class="col-md-10 col-12 offset-md-1">
                <?php get_template_part('/components/components-homepage/homepage-icons-row-horizontal')?>
            </div>
        </div>
        <img src="<?php echo THEME_URI.'/assets/images/svg/tree-bg.svg'; ?>"
             alt="Tree background"
             class="homepage-maincontent__bg alt">
    </section>
    <section class="mb-5 pb-5">
        <?php
            $data = get_field('part_2');
            $title_left = $data['title_left'];
            $text_left = $data['text_left'];
            $img_left = $data['img_left'];
            $title_right = $data['title_right'];
            $text_right = $data['text_right'];
            $img_right = $data['img_right'];
            ?>
        <div class="row mx-0 px-0">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="wrapper">
                    <div class="row mx-0 px-0">
                        <div class="col-12 col-md-6 px-md-0 pe-md-5">
                            <div class="pe-md-4">
                                <img class="w-100 mb-5"
                                     src="<?php echo $img_left ?>"
                                     alt="<?php echo $title_left ?>">
                                <div class="content__title text-start text-md-end mt-5">
                                    <?php echo $title_left ?>
                                </div>
                                <div class="content__text text-start text-md-end">
                                    <?php echo $text_left ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 px-md-0 ps-md-5">
                            <div class="ps-md-4">
                                <div class="content__title">
                                    <?php echo $title_right ?>
                                </div>
                                <div class="content__text">
                                    <?php echo $text_right ?>
                                </div>
                                <img class="w-100 mt-5"
                                     src="<?php echo $img_right ?>"
                                     alt="<?php echo $text_right ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('/components/components-homepage/homepage-map'); ?>
    <?php get_template_part('/components/components-homepage/homepage-cons'); ?>
    <?php get_template_part('/components/component-contact-form'); ?>
</main>
<?php get_footer(); ?>