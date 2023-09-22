<?php get_header() ?>
<main class="page-main single-main">

    <section class="single--intro"
             style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
        <div class="single--intro--fade">
            <div class="row px-0 mx-0">
                <div class="col-12 col-md-10 offset-md-1">
                    <?php
                ob_start();
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                $breadcrumbs = ob_get_clean();
                
                if (is_single() && get_post_type() === 'post') {
                    $post_title = get_the_title();
                    $truncated_title = (strlen($post_title) > 30) ? substr($post_title, 0, 30) . '...' : $post_title;
                    echo str_replace($post_title, $truncated_title, $breadcrumbs);
                } else {
                    echo $breadcrumbs;
                }
                ?>
                </div>
            </div>
            <div class="container container-blog">
                <h1 class="single--title">
                    <?php echo get_the_title(); ?>
                </h1>




                <div class="single--meta">
                    <div class="single--meta__author">
                        <svg width="24"
                             height="24"
                             viewBox="0 0 24 24"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.55 17.625C6.6 16.8917 7.64167 16.3292 8.675 15.9375C9.70833 15.5458 10.8167 15.35 12 15.35C13.1833 15.35 14.2958 15.5458 15.3375 15.9375C16.3792 16.3292 17.425 16.8917 18.475 17.625C19.2083 16.725 19.7292 15.8167 20.0375 14.9C20.3458 13.9833 20.5 13.0167 20.5 12C20.5 9.58333 19.6875 7.5625 18.0625 5.9375C16.4375 4.3125 14.4167 3.5 12 3.5C9.58333 3.5 7.5625 4.3125 5.9375 5.9375C4.3125 7.5625 3.5 9.58333 3.5 12C3.5 13.0167 3.65833 13.9833 3.975 14.9C4.29167 15.8167 4.81667 16.725 5.55 17.625ZM11.9953 12.75C11.0318 12.75 10.2208 12.4193 9.5625 11.7578C8.90417 11.0964 8.575 10.2839 8.575 9.32035C8.575 8.35678 8.90572 7.54583 9.56715 6.8875C10.2286 6.22917 11.0411 5.9 12.0047 5.9C12.9682 5.9 13.7792 6.23072 14.4375 6.89215C15.0958 7.55358 15.425 8.36608 15.425 9.32965C15.425 10.2932 15.0943 11.1042 14.4329 11.7625C13.7714 12.4208 12.9589 12.75 11.9953 12.75ZM12.0117 22C10.6372 22 9.34167 21.7375 8.125 21.2125C6.90833 20.6875 5.84583 19.9708 4.9375 19.0625C4.02917 18.1542 3.3125 17.0936 2.7875 15.8809C2.2625 14.6681 2 13.3723 2 11.9934C2 10.6145 2.2625 9.32083 2.7875 8.1125C3.3125 6.90417 4.02917 5.84583 4.9375 4.9375C5.84583 4.02917 6.90638 3.3125 8.11915 2.7875C9.33192 2.2625 10.6278 2 12.0066 2C13.3855 2 14.6792 2.2625 15.8875 2.7875C17.0958 3.3125 18.1542 4.02917 19.0625 4.9375C19.9708 5.84583 20.6875 6.90443 21.2125 8.1133C21.7375 9.32217 22 10.6138 22 11.9883C22 13.3628 21.7375 14.6583 21.2125 15.875C20.6875 17.0917 19.9708 18.1542 19.0625 19.0625C18.1542 19.9708 17.0956 20.6875 15.8867 21.2125C14.6778 21.7375 13.3862 22 12.0117 22ZM12 20.5C12.9167 20.5 13.8125 20.3667 14.6875 20.1C15.5625 19.8333 16.425 19.3667 17.275 18.7C16.425 18.1 15.5583 17.6417 14.675 17.325C13.7917 17.0083 12.9 16.85 12 16.85C11.1 16.85 10.2083 17.0083 9.325 17.325C8.44167 17.6417 7.575 18.1 6.725 18.7C7.575 19.3667 8.4375 19.8333 9.3125 20.1C10.1875 20.3667 11.0833 20.5 12 20.5ZM12 11.25C12.5667 11.25 13.0292 11.0708 13.3875 10.7125C13.7458 10.3542 13.925 9.89167 13.925 9.325C13.925 8.75833 13.7458 8.29583 13.3875 7.9375C13.0292 7.57917 12.5667 7.4 12 7.4C11.4333 7.4 10.9708 7.57917 10.6125 7.9375C10.2542 8.29583 10.075 8.75833 10.075 9.325C10.075 9.89167 10.2542 10.3542 10.6125 10.7125C10.9708 11.0708 11.4333 11.25 12 11.25Z"
                                  fill="#A17758" />
                        </svg>
                        <span>
                            <?php
                        $author_id = get_the_author_meta('ID');
                        $first_name = get_the_author_meta('first_name', $author_id);
                        $last_name = get_the_author_meta('last_name', $author_id);

                        echo $first_name . ' ' . $last_name;
                        ?>
                        </span>
                    </div>

                    <?php $tags = get_the_tags() ?>

                    <?php if (!empty($tags)) :  ?>

                    <div class="single--meta__tags">


                        <?php foreach($tags as $key => $tag) : ?>

                        <?php if ($key < 3) : ?>

                        <div class="single--meta__tags--item">
                            <?php echo $tag->name; ?>
                        </div>

                        <?php endif; ?>

                        <?php endforeach; ?>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (have_rows('blog_post')) :
        while (have_rows('blog_post')) :
            the_row();
    ?>

    <?php if (get_row_layout() === 'text') : ?>


    <section class="single--text">
        <div class="container container-blog">
            <?php echo get_sub_field('text')?>
        </div>
    </section>

    <?php elseif (get_row_layout() === 'img') : ?>

    <section class="single--img">
        <div class="container">
            <img src="<?php echo get_sub_field('img')?>"
                 alt="Rezydencja Słoneczna">
        </div>
    </section>

    <?php elseif (get_row_layout() === 'cta_1') : ?>

    <section class="single--cta-1">
        <div class="container">
            <div class="single--cta-1__wrapper">
                <div class="single--cta-1__text">
                    <?php echo get_sub_field('text')?>
                </div>
                <a href="<?php echo get_sub_field('btn_link')?>"
                   class="button button__fill">
                    <?php echo get_sub_field('btn_text')?>
                </a>
            </div>
        </div>
    </section>

    <?php elseif (get_row_layout() === 'cta_2') : ?>

    <section class="single--cta-2">
        <div class="container">
            <div class="single--cta-2__wrapper">
                <?php echo get_sub_field('text')?>

            </div>
        </div>
    </section>

    <?php endif; ?>

    <?php
        endwhile;
    endif;
    ?>

    <section class="single--author">
        <div class="container">
            <div class="single--author__wrapper">
                <?php
                $author_id = get_the_author_meta('ID');
                $first_name = get_the_author_meta('first_name', $author_id);
                $last_name = get_the_author_meta('last_name', $author_id);

                $user = get_user_by('ID', $user_id);

                $desc = get_field('desc', 'user_' . $author_id);
                $img = get_field('zdjecie', 'user_' . $author_id);
                ?>
                <figure class="single--author__img">
                    <img src="<?php echo $img ?>"
                         alt="">
                </figure>
                <div class="single--author__desc">
                    <div class="single--author__top">
                        <div class="single--author__name">
                            <?php echo $first_name . ' ' . $last_name; ?>
                        </div>
                        <span class="single--author__desc separator">
                            |
                        </span>
                        <span class="single--author__desc">
                            autor artykułu
                        </span>
                    </div>
                    <div class="single--author__text">
                        <?php echo $desc ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="single--form">
        <div class="container">

            <h2 class="content__title text-center single--form__title">
                Chcesz wiedzieć więcej? <span>Skontaktuj się!</span>
                <svg width="45"
                     height="135"
                     viewBox="0 0 45 135"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1641 0.74372C10.4702 0.291062 9.54083 0.486566 9.08818 1.18039C8.63552 1.87421 8.83102 2.80362 9.52485 3.25628L11.1641 0.74372ZM0.542414 129.646C0.346806 130.451 0.840818 131.262 1.64582 131.458L14.7641 134.645C15.5691 134.841 16.3803 134.347 16.5759 133.542C16.7715 132.737 16.2775 131.926 15.4725 131.73L3.81177 128.897L6.6452 117.236C6.84081 116.431 6.3468 115.62 5.5418 115.424C4.7368 115.229 3.92564 115.723 3.73003 116.528L0.542414 129.646ZM9.52485 3.25628C24.4606 13.0005 38.7614 34.4613 41.1127 58.4588C43.449 82.3027 33.9957 108.758 1.21977 128.719L2.78023 131.281C36.5043 110.742 46.551 83.1973 44.0984 58.1662C41.6609 33.2887 26.8838 10.9995 11.1641 0.74372L9.52485 3.25628Z"
                          fill="#A17758" />
                </svg>
            </h2>

            <div class="single--form__wrapper">
                <h3 class="content__title text-center">
                    Wypełnij formularz kontaktowy
                </h3>
                <div class="content__text text-center mb-5">
                    lub zadzwoń teraz: <a href="tel:+48883663036">
                        +48 883 663 036
                    </a>
                </div>
                <div class="pt-3">
                    <?php echo do_shortcode( '[contact-form-7 id="b028951" title="Formularz Kontaktowy"]' ) ?>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <hr>

        <a href="<?php echo get_permalink( get_option('page_for_posts') ) ?>"
           class="single--return">
            <svg width="7"
                 height="11"
                 viewBox="0 0 7 11"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M6 1L2 5.5L6 10"
                      stroke="#C3C3C5"
                      stroke-width="2"
                      stroke-linecap="round" />
            </svg>
            <span>
                wróć do listy wpisów
            </span>
        </a>
    </div>

    <div class="articles--remove-border my-lg-5">
        <?php get_template_part('/components/component-articles'); ?>
    </div>
</main>
<?php get_footer() ?>