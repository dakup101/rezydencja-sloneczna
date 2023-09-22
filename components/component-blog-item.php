<div class="col-12 col-xl-4 blog-grid__item">
    <figure class="blog-grid__item--img">
        <img src="<?php echo get_the_post_thumbnail_url() ?>"
             alt="<?php echo get_the_title() ?>">
    </figure>
    <?php $tags = get_the_tags() ?>

    <div class="blog-grid__item--content">
        <div class="blog-grid__item--meta">

            <?php
            $author_first_name = get_the_author_meta('first_name');
            $author_last_name = get_the_author_meta('last_name');
            ?>

            <span class="blog-grid__item--author">
                <?php echo $author_first_name . " " . $author_last_name; ?>
            </span>

            <?php if (!empty($tags)) :  ?>

            <span class="blog-grid__item--meta__item">
                |
            </span>

            <?php foreach($tags as $key => $tag) : ?>

            <?php if ($key < 3) : ?>

            <span class="blog-grid__item--meta__item">
                <?php echo $tag->name; ?>
            </span>

            <?php endif; ?>

            <?php endforeach; ?>

            <?php endif; ?>
        </div>

        <div class="blog-grid__item--title">
            <?php echo get_the_title() ?>
        </div>

        <a class="blog-grid__item--link"
           href="<?php echo get_the_permalink() ?>">
            <span>Przeczytaj artykuł</span>
            <svg width="7"
                 height="10"
                 viewBox="0 0 7 10"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M1 9L5 5L1 0.999999"
                      stroke="#A17758"
                      stroke-width="2"
                      stroke-linecap="round" />
            </svg>

        </a>
    </div>
</div>