<?php /* Template Name: Apartamenty */ ?>
<?php get_header('page') ?>
<main class="page-main">
    <section class="apartament-filters">
        <div class="row mx-0 px-0">
            <div class="col-12 col-md-10 offset-md-1">
                <h1 class="content__title mb-5">Apartamenty</h1>

            </div>
        </div>
        <div class="row mx-0 px-0">
            <div class="col-12 col-md-6 d-flex position-relative overflow-hidden">
                <?php get_template_part('/components/component-canvas'); ?>
            </div>
            <div class="col-12 col-md-6 px-0">
                <?php
                $args = array(
                    'numberposts' => -1,
                    'post_type' => 'apartaments',
                    'status' => 'published'
                );
                $apartaments = get_posts($args);
                $meters = array();
                $rooms = array();
                $floors = array();
                foreach ($apartaments as $apartament) {
                    $post_id = $apartament->ID;
                    $info = get_field('apartament', $post_id);
                    $meters[] = (int)$info['meters'];
                    $rooms[] = (int)$info['rooms'];
                    $floors[] = (int)$info['floor'];
                }
                sort($meters);
                sort($rooms);
                sort($floors);
                $min_meter = $meters[0] - 1;
                $max_meter = $meters[sizeof($meters) - 1] + 1;
                $min_floor = $floors[0];
                $max_floor = $floors[sizeof($floors) - 1];
                $min_room = $rooms[0];
                $max_room = $rooms[sizeof($rooms) - 1];
                ?>
                <form class="filters w-100">
                    <div class="filters__header">
                        Rezydencja słoneczna
                    </div>
                    <div class="filters__info">
                        <div class="filters__info--text">
                            <strong data-found_amount><?php echo sizeof($apartaments); ?></strong>
                            <span>Dostępnych apartamentów</span>
                        </div>
                        <a href="#" data-filter_rest>Wyczyść Filtrowanie</a>
                    </div>
                    <div class="filters__sliders">
                        <div class="filters__sliders--item meters">
                            <p>Powierzchnia</p>
                            <div class="filters__multi-range">
                                <input type="range"
                                       min="<?php echo $min_meter ?>"
                                       max="<?php echo $max_meter; ?>"
                                       value="<?php echo $min_meter ?>"
                                       data-type="0"
                                       data-lower
                                >
                                <input type="range"
                                       min="<?php echo $min_meter ?>"
                                       max="<?php echo $max_meter; ?>"
                                       value="<?php echo $max_meter ?>"
                                       data-type="0"
                                       data-upper
                                >
                                <div class="filters__multi-range--lefty"
                                     data-min data-for="meter"
                                >
                                    <?php echo $min_meter ?>m²
                                </div>
                                <div class="filters__multi-range--righty"
                                     data-max data-for="meter"
                                >
                                    <?php echo $max_meter ?>m²
                                </div>
                            </div>
                        </div>
                        <div class="filters__sliders--item floors">
                            <p>Piętro</p>
                            <div class="filters__multi-range">
                                <input type="range"
                                       min="<?php echo $min_floor ?>"
                                       max="<?php echo $max_floor; ?>"
                                       value="<?php echo $min_floor ?>"
                                       data-type="2"
                                       data-lower
                                >
                                <input type="range"
                                       min="<?php echo $min_floor ?>"
                                       max="<?php echo $max_floor; ?>"
                                       value="<?php echo $max_floor ?>"
                                       data-type="2"
                                       data-upper
                                >
                                <div class="filters__multi-range--lefty" data-min>
                                    <?php echo $min_floor ?>
                                </div>
                                <div class="filters__multi-range--righty" data-max>
                                    <?php echo $max_floor ?>
                                </div>
                            </div>
                        </div>
                        <div class="filters__sliders--item rooms">
                            <p>Ilość pokoi</p>
                            <div class="filters__multi-range">
                                <input type="range"
                                       min="<?php echo $min_room ?>"
                                       max="<?php echo $max_room; ?>"
                                       value="<?php echo $min_room ?>"
                                       data-type="1"
                                       data-lower
                                >
                                <input type="range"
                                       min="<?php echo $min_room ?>"
                                       max="<?php echo $max_room; ?>"
                                       value="<?php echo $max_room ?>"
                                       data-type="1"
                                       data-upper
                                >
                                <div class="filters__multi-range--lefty" data-min>
                                    <?php echo $min_room ?>
                                </div>
                                <div class="filters__multi-range--righty" data-max>
                                    <?php echo $max_room ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filters__bottom">
                        <div class="filters__status">
                            <p>Status</p>
                            <div class="filters__status--row">
                                <a href="" class="filters__status--item active" data-status="all">
                                    Wszystkie
                                </a>
                                <a href="" class="filters__status--item" data-status="wolne">
                                    Wolne
                                </a>
                                <a href="" class="filters__status--item" data-status="rezerwacja">
                                    Rezerwacja
                                </a>
                                <a href="" class="filters__status--item" data-status="sprzedane">
                                    Sprzedane
                                </a>
                            </div>
                        </div>
                        <div class="filters__change-view">
                            <p>Przełącz widok</p>
                            <a href="#" data-mode="1">Karty
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
                                    <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"/>
                                </svg>
                            </a>
                            <a href="#" class="hidden" data-mode="0">Lista
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </form>
                <div class="table-wrapper">
                    <?php get_template_part('/components/component-apartaments-table'); ?>
                    <div class="apartaments-cards" data-cards>

                    </div>
                    <div class="loader-overlay" data-overlay>
                        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('/components/component-contact-form'); ?>
</main>
<?php get_footer(); ?>
