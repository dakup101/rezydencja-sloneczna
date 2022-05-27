<?php
$mc = get_field('maincontent');
$offset_img = $mc['offset_img'];
$text_left = $mc['text_left'];
$img_left = $mc['img_left'];
$title_right = $mc['title_right'];
$text_right = $mc['text_right'];
$img_right = $mc['img_right'];
?>
<section class="homepage-maincontent content mt-5 pt-5">
    <div class="row mx-0 px-0 gx-5">
        <div class="col-12 col-md-6 ps-0">
            <div class="row">
                <div class="col-12 col-md-10">
                    <div class="offset-img left">
                        <img src="<?php echo $offset_img ?>"
                             alt="Rezydencja Słoneczna"
                        >
                    </div>
                </div>
                <div class="col-12 col-md-10 offset-md-2">
                    <div class="content__text my-5">
                        <?php echo $text_left ?>
                    </div>
                    <img src="<?php echo $img_left ?>"
                         alt="Słoneczna Rezydencja"
                         class="border-radius"
                    >
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="row">
                <div class="col-12 col-md-10">
                    <h2 class="content__title">
                        <?php echo $title_right; ?>
                    </h2>
                    <div class="content__text my-5">
                        <?php echo $text_right; ?>
                    </div>
                    <img src="<?php echo $img_right ?>"
                         alt="Białka Tatrzańska - Rezydencja"
                         class="border-radius"
                    >
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5 px-0 mx-0">
        <div class="col-md-10 col-12 offset-md-1">
            <?php get_template_part('/components/components-homepage/homepage-icons-row-horizontal')?>
        </div>
    </div>
    <img src="<?php echo THEME_URI.'/assets/images/svg/tree-bg.svg'; ?>"
         alt="Tree background"
         class="homepage-maincontent__bg"
    >
</section>

