<?php
$intro = get_field('intro', 'options');

?>
<div class="intro stage__default text-white" data-intro>
    <div class="intro--wrapper">
        <?php $counter = 0; ?>
        <?php foreach ($intro as $slide) : ?>
            <?php if (!empty($slide)) : ?>
                <?php
                $text = $slide['text'];
                $img = $slide['grafika'];
                ?>
                <div class="intro__slide"
                     data-intro_slide="<?php echo $counter ?>"
                >
                    <div class="intro__slide--img">
                        <img src="<?php echo $img ?>" alt="<?php echo $text ?>">
                    </div>
                    <div class="intro__slide--text">
                        <?php echo $text ?>
                    </div>
                </div>
                <?php
                $counter++;
            endif;
            ?>
        <?php
        endforeach;
        ?>
    </div>
</div>