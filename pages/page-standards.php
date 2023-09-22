<?php /* Template Name: Standardy */ ?>
<?php get_header(); ?>
<main class="page-main">
    <section class="mb-5">
        <div class="row mx-0 px-0">
            <div class="col-12 col-md-10 offset-md-1">
                <?php $title = get_the_title(); ?>
                <h1 class="content__title"><?php echo $title ?></h1>
                <div class="content__text">
                    <?php foreach (get_field("standards") as $item) :  ?>
                    <div class="standards">
                        <h2 class="standards-title">
                            <?php echo $item["title"] ?>
                        </h2>
                        <div class="standards-content">

                            <?php foreach ($item["content"] as $content) : ?>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="standards-left">
                                        <?php echo $content["left"]; ?>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="standards-right">
                                        <?php echo $content["right"]; ?>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('/components/component-contact-form'); ?>
</main>
<?php get_footer(); ?>