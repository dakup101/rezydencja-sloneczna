<?php
$args = array(
    'numberposts' => 4,
    'post_type' => 'apartaments'
);
$apartaments = get_posts($args);
?>

<section class="apartamets mt-5 pt-5">
    <h2 class="content__title text-center mb-5">
        Słoneczna Rezydencja to:
    </h2>
    <div class="row mx-0 px-0">
        <div class="col-12 col-md-10 offset-md-1">
            <div class="icons-desc">
                <div class="icons-desc__item">
                    <figure class="icons-desc__item--icon">
                        <?php echo file_get_contents(THEME_URI.'/assets/images/svg/lokalizacja.svg') ?>
                    </figure>
                    <div class="icons-desc__item--content">
                        <h4 class="icons-desc__item--title">
                            Świetna lokalizacja
                        </h4>
                        <div class="icons-desc__item--desc">
                            Białka Tatrzańska, często odwiedzana przez turystów
                        </div>
                    </div>
                </div>
                <div class="icons-desc__item">
                    <figure class="icons-desc__item--icon">
                        <?php echo file_get_contents(THEME_URI.'/assets/images/svg/wyciagi.svg') ?>
                    </figure>
                    <div class="icons-desc__item--content">
                        <h4 class="icons-desc__item--title">
                            Wyciągi narciarskie
                        </h4>
                        <div class="icons-desc__item--desc">
                            W pobliżu Rezydencji jest Ośrodek
                            Narciarski Kotelnica Białczańska
                        </div>
                    </div>
                </div>
                <div class="icons-desc__item">
                    <figure class="icons-desc__item--icon">
                        <?php echo file_get_contents(THEME_URI.'/assets/images/svg/widoki.svg') ?>
                    </figure>
                    <div class="icons-desc__item--content">
                        <h4 class="icons-desc__item--title">
                            Wspaniałe widoki
                        </h4>
                        <div class="icons-desc__item--desc">
                            Apartamenty z widokiem na Tatry oraz wyciągi narciarskie
                        </div>
                    </div>
                </div>
                <div class="icons-desc__item">
                    <figure class="icons-desc__item--icon">
                        <?php echo file_get_contents(THEME_URI.'/assets/images/svg/infrastruktura.svg') ?>
                    </figure>
                    <div class="icons-desc__item--content">
                        <h4 class="icons-desc__item--title">
                            Dobra infrastruktura
                        </h4>
                        <div class="icons-desc__item--desc">
                            W odległości max 1 km, znajdziesz sklepy, restauracje, czy aquapark
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>