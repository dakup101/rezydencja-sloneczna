<?php
$text = get_field('text');
$faq_title = get_field('faq_title');
$faq = get_field('faq');
?>
<section class="mb-5">
    <div class="row mx-0 px-0">
        <div class="col-12 col-md-10 offset-md-1">
            <h1 class="content__title text-center">
                <?php echo $faq_title ?>
            </h1>
            <?php $counter = 0 ?>
            <?php foreach ($faq as $el) :?>
                <div class="faq <?php echo $counter == 0 ? "active" : "" ?>" data-faq <?php echo $counter == 0 ? 'style="border:none;"' : '' ?>>
                    <a class="faq-title" data-trigger>
                        <?php echo $el['title'] ?>
                    </a>
                    <div class="faq-content" data-content>
                        <div class="content__text">
                            <?php echo $el['text'] ?>
                        </div>
                    </div>
                </div>
            <?php $counter++; endforeach; ?>
        </div>
    </div>
</section>