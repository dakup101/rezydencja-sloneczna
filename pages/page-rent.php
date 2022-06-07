<?php /* Template Name: Wynajem */ ?>
<?php get_header('page'); ?>
    <main class="page-main">
        <section class="rent-part-1 mb-5">
            <?php
            $data = get_field('part_1');
            $title = $data['title'];
            $subtitle = $data['subtitle'];
            $text_title = $data['text_title'];
            $text = $data['text'];
            $img = $data['img'];
            $logos = $data['logos']
            ?>
            <div class="row mx-0 px-0">
                <div class="col-12 col-md-10 offset-md-1">
                    <h1 class="content__title">
                        <?php echo $title ?>
                    </h1>
                    <div class="wrapper">
                        <div class="row mx-0 px-0">
                            <div class="col-12 col-md-8 px-0">
                                <div class="content__title">
                                    <?php echo $subtitle ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-10 offset-md-1 mt-5">
                    <div class="wrapper h-100">
                        <div class="row mx-0 px-0">
                            <div class="col-12 col-md-4 px-0 text-md-end h-100 d-flex justify-content-center flex-column">
                                <div class="content__title">
                                    <?php echo $text_title ?>
                                </div>
                                <div class="content__text">
                                    <?php echo $text ?>
                                </div>
                                <div class="logos mt-3">
                                    <?php foreach ($logos as $el) : ?>
                                    <a href="<?php echo $el['link'] ?>" class="logos__item">
                                        <img src="<?php echo $el['logotyp'] ?>" alt="">
                                    </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 offset-md-1 d-flex justify-content-center flex-column">
                                <img src="<?php echo $img ?>" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="icons-cons py-5">
            <?php
            $data = get_field('part_2');
            $title = $data['title'];
            $icons = $data['ikonki'];
            ?>
            <div class="row mx-0 px-0">
                <div class="col-12 col-md-10 offset-md-1">
                    <div class="content__title text-center">
                        <?php echo $title ?>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="row gx-5 mx-0 px-0 d-flex flex-column flex-md-row flex-wrap justify-content-center">
                        <?php foreach ($icons as $el) : ?>
                            <div class="col-12 col-md-4 mt-4">
                                <div class="icons-cons__item cons__item">
                                    <img class="cons__item--icon" src="<?php echo $el['img'] ?>" alt="">
                                    <div class="cons__item--text">
                                        <?php echo $el['text']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="rent-part-3 mb-5">
            <?php
            $data = get_field('part_3');
            $text_title = $data['text_title'];
            $text = $data['text'];
            $img = $data['img'];
            $logos = $data['logos']
            ?>
            <div class="row mx-0 px-0">
                <div class="col-12 col-md-10 offset-md-1 mt-5">
                    <div class="wrapper h-100">
                        <div class="row mx-0 px-0">
                            <div class="col-12 col-md-6 pe-md-5 d-flex justify-content-center flex-column">
                                <img src="<?php echo $img ?>" alt="" class="w-100">
                            </div>
                            <div class="col-12 col-md-6 ps-md-5 px-0 h-100 d-flex justify-content-center flex-column">
                                <div class="content__title">
                                    <?php echo $text_title ?>
                                </div>
                                <div class="content__text">
                                    <?php echo $text ?>
                                </div>
                                <div class="logos mt-3">
                                    <?php foreach ($logos as $el) : ?>
                                        <a href="<?php echo $el['link'] ?>" class="logos__item">
                                            <img src="<?php echo $el['logotyp'] ?>" alt="">
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="part-4 bg-gray-light py-5">
            <?php
            $data = get_field('part_4')
            ?>
            <div class="row mx-0 px-0">
                <div class="col-12 col-md-10 offset-md-1">
                    <div class="wrapper">
                        <div class="row d-flex flex-column flex-md-row flex-wrap justify-content-center">
                            <?php foreach ($data as $el) : ?>
                            <div class="col-12 col-md-5 text-center">
                                <div class="content__title">
                                    <?php echo $el['text']; ?>
                                </div>
                                <a href="<?php echo $el['link']; ?>">
                                    <img src="<?php echo $el['img'] ?>" alt="" style="height: 60px">
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="part-5 my-5 px-5">
            <?php
            $data = get_field('part_5');
            $title = get_field('part_5_title');
            ?>
            <div class="content__title text-center">
                <?php echo $title; ?>
            </div>
            <div class="d-flex flex-wrap justify-content-center">
                <?php foreach ($data as $el) : ?>
                    <div class="mt-3">
                        <a href="<?php echo $el['link']; ?>" class="d-block">
                            <img src="<?php echo $el['img'] ?>" alt="" class="mx-3" style="height: 60px">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php get_template_part('/components/component-contact-form'); ?>
    </main>
<?php get_footer(); ?>