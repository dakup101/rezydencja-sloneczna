<div class="row px-0 mx-0 articles--separator">
    <div class="col-12 col-md-10 offset-md-1">
        <hr>
    </div>
</div>

<div class="blog-grid row px-0 mx-0">
    <div class="col-12 col-md-10 offset-md-1 px-0">

        <h3 class="content__title text-center mb-5">
            <?php if (is_single()) : ?>
            Zobacz pozostałe wpisy
            <?php else : ?>
            Zobacz artykuły na blogu
            <?php endif; ?>
        </h3>

        <?php $current_post_id = get_the_ID() ?>

        <div class="row px-0 mx-0">
            <?php $query = new WP_Query( array(
                        "post_type" => "post",
                        "status" => "publish", 
                        "posts_per_page" => 3,
                        "post__not_in" => array( $current_post_id ), 
                    ) ) ?>
            <?php
                    if ($query->have_posts()) :
                        $post_counter = 0;
                        while ($query->have_posts()) :
                            $query->the_post();
                            get_template_part( "/components/component-blog-item" );
                            $post_counter++;
                        endwhile;
                    else :
                        echo 'No posts found.';
                    endif;
                    ?>
        </div>
    </div>
</div>