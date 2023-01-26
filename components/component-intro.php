<?php
$intro = get_field('intro', 'options');

?>
<div class="intro stage__default text-white" data-intro>
    <div class="intro--wrapper">
        <?php $counter = 0; ?>
        <div class="intro__text--wrapper"
             data-text_wrap
        >
            <div class="intro__text--content">
                <?php foreach ($intro as $el) : ?>
                    <?php if (!empty($el)) : ?>
                        <div class="intro__text--item"
                             data-slide_text="<?php echo $counter; ?>"
                        >
                            <?php echo $el['text']; ?>
                        </div>
                    <?php endif; ?>
                    <?php
                    $counter++;
                endforeach;
                ?>
            </div>
        </div>
        <?php $counter = 0; ?>
        <div class="intro__image--wrapper"
             data-img_wrap
        >
            <div class="intro__image--content">
                <?php foreach ($intro as $el) : ?>
                    <?php if (!empty($el)) : ?>
                        <div class="intro__image--item-wrapper"
                             data-slide_img="<?php echo $counter; ?>"
                             >
                            <img src="<?php echo $el['grafika']; ?>"
                                 alt="<?php $el['text'] ?>"
                                 class="intro__image--item-image"
                >
                        </div>
                    <?php endif; ?>
                    <?php
                    $counter++;
                endforeach;
                ?>
            </div>
        </div>
    </div>
</div>