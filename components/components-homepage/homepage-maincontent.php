<?php
$mc = get_field('maincontent');
$offset_img = $mc['offset_img'];
$text_left = $mc['text_left'];
$img_left = $mc['img_left'];
$title_right = $mc['title_right'];
$text_right = $mc['text_right'];
$img_right = $mc['img_right'];
?>
<section class="homepage-maincontent content mt-5 pt-md-5">
    <div class="row mx-0 px-0 gx-5 mb-5">
        <div class="col-12 col-md-5 ps-md-0">
            <div class="offset-img left">
                <img src="<?php echo THEME_URI.'/assets/images/hp-content-1.png' ?>"
                     alt="Rezydencja Słoneczna"
                     loading="lazy">
            </div>
        </div>
        <div class="col-12 col-md-5 d-flex align-items-center">
            <div class="ps-5">
                <h2 class="content__title">
                    Wykorzystaj potencjał turystyczny Zakopanego
                </h2>
                <div class="content__text mt-5">
                    Czy wiesz, że w ciągu roku Zakopane odwiedza 3 miliony osób? To mniej więcej tyle samo, ile
                    mieszkańców jest w Dubaju. Zakopane to ogromny potencjał inwestycyjny, dlaczego więc z tego nie
                    skorzystać? Krupówki, szlaki górskie, wyciągi narciarskie, termy — Zakopane daje turystom wiele
                    możliwości odpoczynku, dlatego tak chętnie tu przyjeżdżają. Niektórzy inwestorzy twierdzą, że
                    doświadczyli większego zwrotu z inwestycji w nieruchomości w Zakopanem w porównaniu do mieszkań w
                    dużych miastach.
                </div>
            </div>
        </div>


    </div>

    <div class="row mx-0 px-0 gx-5 pt-5">
        <div class="col-12 col-md-5 offset-md-2 d-flex align-items-center">
            <div class="pe-5">
                <h2 class="content__title">
                    Rozważ inwestycję, która oferuje potencjalny dochód przez cały rok
                </h2>
                <div class="content__text mt-5">
                    Apartament to nie tylko możliwość dodatkowego dochodu, ale też inwestycja w nieruchomość z
                    potencjałem wzrostu wartości. Zakopane stale przyciąga nowych turystów — często zza granicy —
                    dlatego zapotrzebowanie na noclegi prawdopodobnie będzie tylko rosło. Zapewnij swoim gościom
                    komfortowe miejsce do wypoczynku i daj sobie szansę zarobku — bez względu na porę roku i
                    okoliczności. Nasze apartamenty znajdują się w samym centrum Białki Tatrzańskiej.
                </div>
            </div>
        </div>

        <div class="col-12 col-md-5 pe-md-0">
            <div class="offset-img left">
                <img src="<?php echo THEME_URI.'/assets/images/hp-content-2.png' ?>"
                     alt="Rezydencja Słoneczna"
                     loading="lazy">
            </div>
        </div>
    </div>
</section>