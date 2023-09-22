<?php /* Template Name: Apartamenty */ ?>
<?php get_header() ?>
<main class="page-main">
    <div class="row px-0 apartament-filters-row">
        <section class="apartament-filters col-md-10 col-12 offset-md-1">
            <h1 class="content__title mb-5">Apartamenty</h1>
            <div class="apartaments-filters-view">
                <p>Tryb wyszukania</p>
                <button class="change-search-view active"
                        data-view="apartaments-view-table">
                    Tabelka
                </button>
                <button class="change-search-view"
                        data-view="apartaments-view-visual">
                    Wizualizacja
                </button>
            </div>
            <div class="row mx-0 px-0">
                <div class="col-12 col-md-12 px-0 apartaments-view-element apartaments-view-table active">
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
                        <input type="hidden"
                               name="nonce"
                               id="nonce"
                               value="<?php echo wp_create_nonce('search_apartaments') ?>">
                        <div class="filters__header">
                            Rezydencja słoneczna
                        </div>
                        <div class="filters__info">
                            <div class="filters__info--text">
                                <strong data-found_amount><?php echo sizeof($apartaments); ?></strong>
                                <span>Dostępnych apartamentów</span>
                            </div>
                            <a href="#"
                               data-filter_rest>Wyczyść Filtrowanie</a>
                        </div>
                        <div class="filters__parking">
                            <b>Miejsce postojowe garaż - 45 000 zł</b> <br />
                            <b class="mb-0">Miejsce postojowe zewnętrzne - 20 000 zł</b>
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
                                           data-lower>
                                    <input type="range"
                                           min="<?php echo $min_meter ?>"
                                           max="<?php echo $max_meter; ?>"
                                           value="<?php echo $max_meter ?>"
                                           data-type="0"
                                           data-upper>
                                    <div class="filters__multi-range--lefty"
                                         data-min
                                         data-for="meter">
                                        <?php echo $min_meter ?>m²
                                    </div>
                                    <div class="filters__multi-range--righty"
                                         data-max
                                         data-for="meter">
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
                                           data-lower>
                                    <input type="range"
                                           min="<?php echo $min_floor ?>"
                                           max="<?php echo $max_floor; ?>"
                                           value="<?php echo $max_floor ?>"
                                           data-type="2"
                                           data-upper>
                                    <div class="filters__multi-range--lefty"
                                         data-min>
                                        <?php echo $min_floor ?>
                                    </div>
                                    <div class="filters__multi-range--righty"
                                         data-max>
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
                                           data-lower>
                                    <input type="range"
                                           min="<?php echo $min_room ?>"
                                           max="<?php echo $max_room; ?>"
                                           value="<?php echo $max_room ?>"
                                           data-type="1"
                                           data-upper>
                                    <div class="filters__multi-range--lefty"
                                         data-min>
                                        <?php echo $min_room ?>
                                    </div>
                                    <div class="filters__multi-range--righty"
                                         data-max>
                                        <?php echo $max_room ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filters__bottom">
                            <div class="filters__status">
                                <p>Status</p>
                                <div class="filters__status--row">
                                    <a href=""
                                       class="filters__status--item active"
                                       data-status_search="all">
                                        Wszystkie
                                    </a>
                                    <a href=""
                                       class="filters__status--item"
                                       data-status_search="wolne">
                                        Wolne
                                    </a>
                                    <a href=""
                                       class="filters__status--item"
                                       data-status_search="rezerwacja">
                                        Rezerwacja
                                    </a>
                                    <a href=""
                                       class="filters__status--item"
                                       data-status_search="sprzedane">
                                        Sprzedane
                                    </a>
                                </div>
                            </div>
                            <div class="filters__change-view">
                                <p>Przełącz widok</p>
                                <a href="#"
                                   data-mode="1">Karty
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="16"
                                         height="16"
                                         fill="currentColor"
                                         class="bi bi-grid-3x3-gap-fill"
                                         viewBox="0 0 16 16">
                                        <path
                                              d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z" />
                                    </svg>
                                </a>
                                <a href="#"
                                   class="hidden"
                                   data-mode="0">Lista
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="16"
                                         height="16"
                                         fill="currentColor"
                                         class="bi bi-list"
                                         viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="table-wrapper">
                        <?php get_template_part('/components/component-apartaments-table'); ?>
                        <div class="apartaments-cards"
                             data-cards>

                        </div>
                        <div class="search-info text-center p-5 hidden d-flex flex-column"
                             data-no_result>
                            <h3 class="content__text fw-bold mb-3">Brak Wyników</h3>
                            <p>Spróbuj inną konfigurację</p>
                        </div>
                        <div class="loader-overlay"
                             data-overlay>
                            <div class="lds-ellipsis">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                     class="col-12 col-md-12 px-0 flex-column position-relative overflow-hidden apartaments-view-element apartaments-view-visual">
                    <div class="filters__header">
                        Rezydencja słoneczna
                    </div>
                    <div class="filters__info">
                        <div class="filters__info--text">
                            <strong><?php echo sizeof($apartaments); ?></strong>
                            <span>Apartamentów do wyboru</span>
                        </div>
                    </div>
                    <div class="filters__parking">
                        <b>Miejsce postojowe garaż - 45 000 zł</b> <br />
                        <b class="mb-0">Miejsce postojowe zewnętrzne - 20 000 zł</b>
                    </div>
                    <?php get_template_part('/components/component-canvas'); ?>
                </div>
            </div>
        </section>
    </div>


    <?php get_template_part('/components/component-canvas-parter'); ?>
    <?php get_template_part('/components/component-canvas-floor-1'); ?>
    <?php get_template_part('/components/component-canvas-floor-2'); ?>
    <?php get_template_part('/components/component-canvas-roof'); ?>
    <style>
    .canvas-item polyline {
        fill: #06bd69;
        stroke: #129056;
    }

    .canvas-item .reserved polyline {
        fill: #f1bb59;
        stroke: #f1bb59;
    }

    .canvas-item .sold polyline {
        fill: #cc0000;
        stroke: #cc0000;
    }

    .canvas-item a {
        opacity: 50% !important;
        transition: all .2s ease-in-out;
    }

    .canvas-item a:hover {
        opacity: 80% !important;
    }

    .canvas-item a:hover polyline,
    #floor2Canvas .canvas-item a:hover * {
        fill: #129056 !important;
    }

    #floor2Canvas,
    #floorCanvas,
    #parterCanvas,
    #roofCanvas {
        opacity: 0;
        pointer-events: none;
        transition: all .3s ease-in-out;
    }

    #floor2Canvas.active,
    #floorCanvas.active,
    #parterCanvas.active,
    #roofCanvas.active {
        opacity: 1;
        pointer-events: all;
    }
    </style>

    <?php get_template_part('/components/component-contact-form'); ?>
</main>
<?php get_footer(); ?>