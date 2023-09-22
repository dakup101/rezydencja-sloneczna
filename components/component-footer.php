<footer>
    <?php get_template_part('/components/component-intro'); ?>
    <section class="site-footer">
        <?php
        $banner = get_field('footer_banner', 'options');
        $content = get_field('tresci_stopki', 'options');
        $col_1 = $content['col_1'];
        $col_2 = $content['col_2'];
        $col_3 = $content['col_3'];
        $sm_links = get_field('sm_links', 'options');
        $pp_link = get_field('pp_link', 'options')
        ?>
        <div class="footer-cta">
            <div class="row mx-0 px-0">
                <div class="col-12 col-md-6 px-0 relative d-flex justify-content-end align-items-start">
                    <a href=#
                       class="footer-cta--item footer-cta--left">
                        <span>
                            Wszelkie aktualności zawsze znajdziesz <br><u>na naszym profilu<br>na Facebook</u>
                        </span>
                        <svg width="42"
                             height="15"
                             viewBox="0 0 42 15"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_130_2)">
                                <path d="M1 6.99994C0.447715 6.99994 4.82823e-08 7.44766 0 7.99994C-4.82823e-08 8.55222 0.447715 8.99994 1 8.99994V6.99994ZM41.7071 8.70706C42.0976 8.31654 42.0976 7.68336 41.7071 7.29284L35.3431 0.928879C34.9526 0.538355 34.3195 0.538355 33.9289 0.928879C33.5384 1.3194 33.5384 1.95256 33.9289 2.34309L39.5858 7.99994L33.9289 13.6568C33.5384 14.0473 33.5384 14.6804 33.9289 15.071C34.3195 15.4615 34.9526 15.4615 35.3431 15.071L41.7071 8.70706ZM1 8.99994H41V6.99994H1V8.99994Z"
                                      fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_130_2">
                                    <rect width="42"
                                          height="15"
                                          fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </a>
                    <figure class="footer-cta--bg">
                        <img src="<?php echo THEME_URI.'/assets/images/footer-cta-1.jpg' ?>"
                             alt="Rezydencja Słoneczna">
                    </figure>
                </div>
                <div class="col-12 col-md-6 px-0 d-flex align-items-end justify-content-start">
                    <a href=#
                       class="footer-cta--item footer-cta--right">
                        <span>
                            W każdej chwili możesz też do nas napisać <u>na czacie Messengera</u>
                        </span>

                        <svg width="42"
                             height="15"
                             viewBox="0 0 42 15"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_130_2)">
                                <path d="M1 6.99994C0.447715 6.99994 4.82823e-08 7.44766 0 7.99994C-4.82823e-08 8.55222 0.447715 8.99994 1 8.99994V6.99994ZM41.7071 8.70706C42.0976 8.31654 42.0976 7.68336 41.7071 7.29284L35.3431 0.928879C34.9526 0.538355 34.3195 0.538355 33.9289 0.928879C33.5384 1.3194 33.5384 1.95256 33.9289 2.34309L39.5858 7.99994L33.9289 13.6568C33.5384 14.0473 33.5384 14.6804 33.9289 15.071C34.3195 15.4615 34.9526 15.4615 35.3431 15.071L41.7071 8.70706ZM1 8.99994H41V6.99994H1V8.99994Z"
                                      fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_130_2">
                                    <rect width="42"
                                          height="15"
                                          fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </a>
                    <figure class="footer-cta--bg">
                        <img src="<?php echo THEME_URI.'/assets/images/footer-cta-2.jpg' ?>"
                             alt="Rezydencja Słoneczna">

                    </figure>
                </div>
            </div>
        </div>
        <div class="row mx-0 px-0 pt-5 pb-4">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="site-footer__wrapper text-center">
                    <img src="<?php echo THEME_URI . '/assets/images/footer-logo.jpg' ?>"
                         alt="Rezydencja Słoneczna"
                         loading="lazy">
                    <div class="row mt-5">
                        <div class="col-12 col-md-4">
                            <h4 class="content__title text-center">
                                <?php echo $col_1['naglowek']; ?>
                            </h4>
                            <div class="content__text text-center">
                                <?php echo $col_1['tresc']; ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <h4 class="content__title text-center">
                                <?php echo $col_2['naglowek']; ?>
                            </h4>
                            <div class="content__text text-center">
                                <?php echo $col_2['tresc']; ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <h4 class="content__title text-center">
                                <?php echo $col_3['naglowek']; ?>
                            </h4>
                            <div class="content__text text-center">
                                <?php echo $col_3['tresc']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__sm mt-3">
                        <?php foreach ($sm_links as $link) : ?>
                        <a href="<?php echo $link['link'] ?>"
                           target="_blank"
                           class="site-footer__sm--item">
                            <img src="<?php echo $link['ikonka'] ?>"
                                 alt="Social Media">
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="site-footer__copyright mt-4 pt-4">
                        <a href="<?php echo $pp_link ?>"
                           class="site-footer__copyright--pp">
                            Polityka Prywatności
                        </a>
                        <div class="site-footer__copyright--everywhere">
                            <p class="site-footer__copyright--text">© 2022 Słoneczna Rezydencja Wszelkie prawa
                                zastrzeżone.</p>
                            <a class="site-footer__copyright--link"
                               href="https://everywhere.pl/">
                                <img src="<?php echo THEME_URI.'/assets/images/everywhere.jpg' ?>"
                                     class="site-footer__copyright--img"
                                     alt="Created By: Everywhere Polska"
                                     loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="rodo"
         data-rodo_wrap>
        <p>Ta strona używa plików cookies. Zapoznaj się z naszą <a href="<?php echo $pp_link ?>">Polityką
                Prywatności</a></p>
        <a href="#"
           class="rodo__btn"
           data-rodo>Rozumiem</a>
    </div>
    <div class="language">
        <?php echo do_shortcode('[gtranslate]'); ?>
    </div>
    <?php wp_footer(); ?>
</footer>