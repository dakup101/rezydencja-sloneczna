<?php get_header(); ?>
<main class="page-main">

    <?php
        $queried_object = get_queried_object();
        $highlighter = false;
        $current_tag_slug = null;
        if ($queried_object instanceof WP_Term && isset($queried_object->slug)) {
            $current_tag_slug = $queried_object->slug;
            $highlighter = true;
        }
    ?>

    <h1 class="text-center mb-5">Blog<?php if ($highlighter) echo " | $queried_object->name" ?></h1>
    <div class="row px-0 mx-0">




        <div class="col-12 col-md-10 offset-md-1">
            <ul class="blog-tags">

                <li class="blog-tags__item">
                    <a class="button <?php if (!$highlighter) echo 'button__fill'; else echo 'button__stroke-accent'; ?>"
                       href="<?php echo get_permalink(get_option('page_for_posts')) ?>">
                        Wszystkie Wpisy
                    </a>
                </li>

                <?php
                $tags = get_tags(); // Get all unique tags with posts

                if ($tags) {
                    foreach ($tags as $tag) :
                        ?>
                <li class="blog-tags__item"
                    <?php if ($highlighter && $tag->slug == $current_tag_slug) echo 'style="order: 1"'; else echo 'style="order: 2"' ?>>
                    <a draggable="false"
                       class="button <?php echo ($highlighter && $tag->slug == $current_tag_slug) ? 'button__fill' : 'button__stroke-accent' ?>"
                       href="<?php echo get_tag_link($tag); ?>">
                        <?php echo  $tag->name; ?>
                    </a>
                </li>
                <?php
                    endforeach;
                }
                ?>
            </ul>
        </div>
    </div>


    <div class="blog-grid row px-0 mx-0">
        <div class="col-12 col-md-10 offset-md-1">
            <div class="row px-0 mx-0 gx-xl-5">
                <?php
            if (have_posts()) :
                $post_counter = 0;
                while (have_posts()) :
                    the_post();
                    if ($post_counter == 0) get_template_part( "/components/component-blog-item-alt" );
                    else get_template_part( "/components/component-blog-item" );
                    $post_counter++;
                endwhile;
            else :
                echo 'No posts found.';
            endif;
            ?>
            </div>
        </div>

    </div>

    <div class="row px-0 mx-0">
        <div class="col-12 col-md-10 offset-md-1">
            <div class="blog-pagination <?php if (get_query_var('paged') < 2) echo "no-first-margin" ?>">
                <?php
        global $wp_query;

        $pagination_args = array(
            'prev_text' => '<svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 1L2 5.5L6 10" stroke="#C3C3C5" stroke-width="2" stroke-linecap="round"/></svg>',
            'next_text' => '<svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999999 10L5 5.5L1 0.999999" stroke="#C3C3C5" stroke-width="2" stroke-linecap="round"/></svg>',
            'mid_size'  => 3,
            'type'      => 'list',
            'current'   => max(1, get_query_var('paged')),
            'total'     => $wp_query->max_num_pages
        );

        echo paginate_links($pagination_args);
        ?>
            </div>
        </div>

    </div>

    <div class="row px-0 mx-0">
        <div class="col-12 col-md-10 offset-md-1">
            <h2 class="content__title blog-authors__title">
                Piszą dla nas:
            </h2>
            <div class="blog-authors">
                <div class="blog-authors--item">
                    <figure class="blog-authors--item__img">
                        <img src="<?php echo THEME_URI.'/assets/images/author.png' ?>"
                             alt="Rezydencja Słoneczna"
                             loading="lazy">
                    </figure>
                    <div class="blog-authors--item__name">
                        Jan Kowalski
                    </div>
                    <div class="blog-authors--item__pos">
                        architekt
                    </div>
                </div>
                <div class="blog-authors--item">
                    <figure class="blog-authors--item__img">
                        <img src="<?php echo THEME_URI.'/assets/images/author.png' ?>"
                             alt="Rezydencja Słoneczna"
                             loading="lazy">
                    </figure>
                    <div class="blog-authors--item__name">
                        Jan Kowalski
                    </div>
                    <div class="blog-authors--item__pos">
                        architekt
                    </div>
                </div>
                <div class="blog-authors--item">
                    <figure class="blog-authors--item__img">
                        <img src="<?php echo THEME_URI.'/assets/images/author.png' ?>"
                             alt="Rezydencja Słoneczna"
                             loading="lazy">
                    </figure>
                    <div class="blog-authors--item__name">
                        Jan Kowalski
                    </div>
                    <div class="blog-authors--item__pos">
                        architekt
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>