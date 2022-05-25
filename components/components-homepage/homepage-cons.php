<?php
$title = get_field('cons_title');
$offer = get_field('oferta');
?>

<section class="cons py-5">
    <h2 class="content__title text-center"><?php echo $title['title']; ?></h2>
    <div class="content__text text-center mb-5 pb-3">
        <?php echo $title['subtitle']; ?>
    </div>
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1">
            <div class="cons__wrapper">
                <div class="row gx-5">
                    <?php foreach ($offer as $el) : ?>
                        <div class="cons__item col-6 col-md-3">
                            <img src="<?php echo $el['icon']; ?>"
                                 alt="<?php echo $el['text'] ?>"
                                 class="cons__item--icon"
                            >
                            <div class="cons__item--text">
                                <?php echo $el['text'] ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
