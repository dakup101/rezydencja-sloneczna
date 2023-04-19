<?php
$args = array(
    "post_type" => "apartaments",
    "posts_per_page" => -1,
    "tax_query" => array(
        array(
            "taxonomy" => "floor",
            "field" => "slug",
            "terms" => "1-pietro"
        )
    )
);

$aps = new WP_Query($args);
$counter = 0;
$countrr_all = 0;

if ($aps->have_posts()) {
    while ($aps->have_posts()) {
        $aps->the_post();
        echo get_the_title();
        if (get_field("apartament")["status"] == "wolne") $counter++;
        $countrr_all++;
    }
}

wp_reset_postdata();

?>

<div style="position: fixed; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 2rem; color: white; cursor: pointer; align-items: center; justify-content: center; top: 0; left: 0; text-align: center; width: 100%; height: 100%; background: rgba(0,0,0,0.65); z-index: 9999"
    id="floorCanvas" data-floor_plan="1">
    Dostępne <?php echo $counter ?> z <?php echo $countrr_all ?> apartamentów <br> Kliknij poza okienkiem by zamknąć
    <div class="canvas-item position-relative" style="width: 90%; max-width: 1400px">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/pietro1/pietro1-1.jpg' ?>" alt=""
            style="width: 100%; cursor: default">

        <a href="<?php echo THEME_DOC . '/A18.pdf' ?>" target="_blank"
            style="position: absolute; top: 14%; left: 6.7%; width: 14.6%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205.23 231.02">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 379)["status"]); ?>"
                        class="cls-1"
                        points="0 94.11 70.3 94.11 70.3 0 205.23 0 205.23 183.4 205.23 231.02 159.64 231.02 159.64 183.4 75.4 183.4 70.3 183.4 70.3 182.83 0 182.83 0 94.11" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A17.pdf' ?>" target="_blank"
            style="position: absolute; top: 40.5%; left: 6.7%; width: 10.9%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 156.55 143.36">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 375)["status"]); ?>;"
                        class="cls-1"
                        points="0 143.36 0 .57 71.43 .57 71.43 0 156.55 0 156.55 143.36 71.43 143.36 0 143.36" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A16.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 6.7%; width: 14.5%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205.23 236.13">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 372)["status"]); ?>;"
                        class="cls-1"
                        points="0 146.55 0 52.94 71.43 52.94 71.43 52.37 161.01 52.37 161.01 0 205.23 0 205.23 52.37 205.23 236.13 71.43 236.13 71.43 195.73 70.87 195.73 70.87 146.55 0 146.55" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A15.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 21.7%; width: 13%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.82 238.11">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 368)["status"]); ?>;"
                        class="cls-1" points="0 238.11 0 0 184.82 0 184.82 238.11 0 238.11" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A19.pdf' ?>" target="_blank"
            style="position: absolute; top: 14%; left: 21.7%; width: 13%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.82 231.02">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 383)["status"]); ?>"
                        class="cls-1" points="184.82 0 184.82 231.02 0 231.02 0 0 184.82 0" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A20.pdf' ?>" target="_blank"
            style="position: absolute; top: 20%; left: 35.2%; width: 15%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.03 187.94">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 387)["status"]); ?>"
                        class="cls-1"
                        points="0 187.94 0 51.18 108.43 51.18 108.43 0 212.03 0 212.03 85.32 138.9 85.32 138.9 187.94 0 187.94" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A21.pdf' ?>" target="_blank"
            style="position: absolute; top: 20%; left: 50.5%; width: 15%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.03 187.94">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 391)["status"]); ?>;"
                        class="cls-1"
                        points="212.03 187.94 73.13 187.94 73.13 85.32 0 85.32 0 0 103.61 0 103.61 51.18 212.03 51.18 212.03 187.94" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A22.pdf' ?>" target="_blank"
            style="position: absolute; top: 14%; left: 66.2%; width: 13%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.82 231.02">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 395)["status"]); ?>"
                        class="cls-1" points="184.82 0 184.82 231.02 0 231.02 0 0 184.82 0" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A23.pdf' ?>" target="_blank"
            style="position: absolute; top: 14%; left: 79.6%; width: 14.5%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205.23 231.02">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 399)["status"]); ?>"
                        class="cls-1"
                        points="205.23 94.11 205.23 182.83 134.93 182.83 134.93 183.4 129.83 183.4 45.59 183.4 45.59 231.02 0 231.02 0 183.4 0 0 134.93 0 134.93 94.11 205.23 94.11" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A24.pdf' ?>" target="_blank"
            style="position: absolute; top: 40.5%; left: 83.1%; width: 10.9%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 156.55 143.36">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 403)["status"]); ?>;"
                        class="cls-1"
                        points="156.55 143.36 85.11 143.36 0 143.36 0 0 85.11 0 85.11 .57 156.55 .57 156.55 143.36" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A25.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 79.3%; width: 14.9%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205.23 236.13">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 407)["status"]); ?>"
                        class="cls-1"
                        points="205.23 146.55 134.36 146.55 134.36 195.73 133.8 195.73 133.8 236.13 0 236.13 0 52.37 0 0 44.22 0 44.22 52.37 133.8 52.37 133.8 52.94 205.23 52.94 205.23 146.55" />
                </g>
            </svg> \
        </a>
        <a href="<?php echo THEME_DOC . '/A26.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 66.1%; width: 13%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.82 238.11">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 411)["status"]); ?>"
                        class="cls-1" points="0 238.11 0 0 184.82 0 184.82 238.11 0 238.11" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A27.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 51.8%; width: 14%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 195.59 193.61">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 415)["status"]); ?>"
                        class="cls-1"
                        points="76.82 0 76.82 3.4 86.03 3.4 86.03 8.5 165.54 8.5 165.54 0 195.59 0 195.59 8.5 195.59 142.02 86.03 142.02 86.03 193.61 0 193.61 0 0 76.82 0" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A14.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 35.1%; width: 16.3%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 230.93 193.61">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 364)["status"]); ?>"
                        class="cls-1"
                        points="0 8.5 0 0 31.94 0 31.94 8.5 124.63 8.5 124.63 0 154.11 0 230.93 0 230.93 193.61 109.89 193.61 109.89 142.02 0 142.02 0 8.5" />
                </g>
            </svg> </a>
    </div>
</div>