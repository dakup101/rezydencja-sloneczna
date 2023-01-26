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
        <div class="site-footer__banner">
            <img src="<?php echo $banner ?>" alt="Słoneczna Rezydencja" loading="lazy">
        </div>
        <div class="row mx-0 px-0 pt-5 pb-4">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="site-footer__wrapper text-center">
                    <img src="<?php echo THEME_URI . '/assets/images/footer-logo.jpg' ?>" alt="Rezydencja Słoneczna" loading="lazy">
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
                        <a href="<?php echo $link['link'] ?>" target="_blank" class="site-footer__sm--item">
                            <img src="<?php echo $link['ikonka'] ?>" alt="Social Media">
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="site-footer__copyright mt-4 pt-4">
                        <a href="<?php echo $pp_link ?>" class="site-footer__copyright--pp">
                            Polityka Prywatności
                        </a>
                        <div class="site-footer__copyright--everywhere">
                            <p class="site-footer__copyright--text">© 2022 Słoneczna Rezydencja Wszelkie prawa zastrzeżone.</p>
                            <a class="site-footer__copyright--link" href="https://everywhere.pl/">
                                <img src="<?php echo THEME_URI.'/assets/images/everywhere.jpg' ?>" class="site-footer__copyright--img" alt="Created By: Everywhere Polska" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="rodo" data-rodo_wrap>
        <p>Ta strona używa plików cookies. Zapoznaj się z naszą <a href="<?php echo $pp_link ?>">Polityką Prywatności</a></p>
        <a href="#" class="rodo__btn" data-rodo >Rozumiem</a>
    </div>
	<div class="language">
		<?php echo do_shortcode('[gtranslate]'); ?>
	</div>
    <?php wp_footer(); ?>
</footer>