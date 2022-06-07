<?php
$icons = get_field('icons_row_vertical', 23);
$icons_title = get_field('icons_row_title', 23);
?>
<h2 class="content__title my-5 pb-5 text-center"><?php echo $icons_title ?></h2>
<div class="row icons-row horizontal">
    <?php foreach ($icons as $el) : ?>
    <div class="col-6 col-md-4">
        <div class="icons-row__wrapper">
            <img src="<?php echo $el['icon']; ?>"
                 alt="<?php echo $el['title'] ?>"
                 class="icons-row__icon"
                 loading="lazy"
            >
            <div class="icons-row__content">
                <div class="icons-row__content--title">
                    <?php echo $el['title'] ?>
                </div>
                <div class="icons-row__content--text">
                    <?php echo $el['text'] ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
