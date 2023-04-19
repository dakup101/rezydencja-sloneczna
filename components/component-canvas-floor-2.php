<?php
$args = array(
    "post_type" => "apartaments",
    "posts_per_page" => -1,
    "tax_query" => array(
        array(
            "taxonomy" => "floor",
            "field" => "slug",
            "terms" => "2-pietro"
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

<div style="position: fixed; display: flex; flex-direction: column; color: white; align-items: center; justify-content: center; gap: 2rem; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.65); text-align: center; z-index: 9999"
    id="floor2Canvas" data-floor_plan="2">
    Dostępne <?php echo $counter ?> z <?php echo $countrr_all ?> apartamentów <br> Kliknij poza okienkiem by zamknąć

    <div class="canvas-item position-relative" style="width: 90%; max-width: 1400px">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/pietro2/pietro2-1.jpg' ?>" alt=""
            style="width: 100%">
        <a href="<?php echo THEME_DOC . '/A32.pdf' ?>" target="_blank"
            style="position: absolute; top: 12%; left: 5.7%; width: 14.6%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205.23 231.02">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 436)["status"]); ?>"
                        class="cls-1"
                        points="0 94.11 70.3 94.11 70.3 0 205.23 0 205.23 183.4 205.23 231.02 159.64 231.02 159.64 183.4 75.4 183.4 70.3 183.4 70.3 182.83 0 182.83 0 94.11" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A31.pdf' ?>" target="_blank"
            style="position: absolute; top: 39.5%; left: 5.7%; width: 10.9%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 161.05 248.67">
                <g>
                    <polygon
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 431)["status"]); ?>"
                        class="cls-1"
                        points="0 248.67 74.16 248.67 74.16 148.45 161.05 148.45 161.05 0 .03 0 0 248.67" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A30.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 10.8%; width: 15.9%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 228.75 249.27">
                <g>
                    <polygon
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 427)["status"]); ?>;"
                        class="cls-1"
                        points="0 54.83 0 249.27 228.75 249.27 228.75 152.05 140.25 152.05 140.25 0 90.91 0 90.91 52.94 0 54.83" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A29.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 20.7%; width: 13%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.81 249.27">
                <g>
                    <polygon
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 423)["status"]); ?>;"
                        class="cls-1"
                        points=".23 152.05 88.73 152.05 88.73 249.27 192.81 249.27 192.81 0 0 0 .23 152.05" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A33.pdf' ?>" target="_blank"
            style="position: absolute; top: 12%; left: 20.7%; width: 13.2%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.82 231.02">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 440)["status"]); ?>;"
                        class="cls-1" points="184.82 0 184.82 231.02 0 231.02 0 0 184.82 0" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A34.pdf' ?>" target="_blank"
            style="position: absolute; top: 18.4%; left: 34.5%; width: 15%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.03 187.94">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 444)["status"]); ?>"
                        class="cls-1"
                        points="0 187.94 0 51.18 108.43 51.18 108.43 0 212.03 0 212.03 85.32 138.9 85.32 138.9 187.94 0 187.94" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A35.pdf' ?>" target="_blank"
            style="position: absolute; top: 18.4%; left: 50.2%; width: 15%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.03 187.94">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 448)["status"]); ?>"
                        class="cls-1"
                        points="212.03 187.94 73.13 187.94 73.13 85.32 0 85.32 0 0 103.61 0 103.61 51.18 212.03 51.18 212.03 187.94" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A36.pdf' ?>" target="_blank"
            style="position: absolute; top: 12%; left: 65.8%; width: 13%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.82 231.02">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 452)["status"]); ?>"
                        class="cls-1" points="184.82 0 184.82 231.02 0 231.02 0 0 184.82 0" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/APARTAMENT-A37.pdf' ?>" target="_blank"
            style="position: absolute; top: 12%; left: 79.6%; width: 14.5%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205.23 231.02">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 456)["status"]); ?>"
                        class="cls-1"
                        points="205.23 94.11 205.23 182.83 134.93 182.83 134.93 183.4 129.83 183.4 45.59 183.4 45.59 231.02 0 231.02 0 183.4 0 0 134.93 0 134.93 94.11 205.23 94.11" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/APARTAMENT-A38.pdf' ?>" target="_blank"
            style="position: absolute; top: 40%; left: 83.1%; width: 10.9%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 162.03 248.33">
                <g>
                    <polygon
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 461)["status"]); ?>"
                        class="cls-1" points="0 146.11 0 0 162.03 0 162.03 248.33 91.58 248.33 91.58 146.38 0 146.11" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A39.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 72.9%; width: 16%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 234.54 240.51">
                <g>
                    <polygon
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 465)["status"]); ?>"
                        class="cls-1"
                        points=".57 148.31 .57 240.51 234.54 240.51 234.54 49.33 142.82 49.33 142.82 0 94.19 0 94.19 144.85 0 144.85 .57 148.31" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A40.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 65.8%; width: 13%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.81 249.27" style="transform: scale(-1,1)">
                <g>
                    <polygon
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 469)["status"]); ?>;"
                        class="cls-1"
                        points=".23 152.05 88.73 152.05 88.73 249.27 192.81 249.27 192.81 0 0 0 .23 152.05" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A41.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 51.4%; width: 14%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 195.59 193.61">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 473)["status"]); ?>"
                        class="cls-1"
                        points="76.82 0 76.82 3.4 86.03 3.4 86.03 8.5 165.54 8.5 165.54 0 195.59 0 195.59 8.5 195.59 142.02 86.03 142.02 86.03 193.61 0 193.61 0 0 76.82 0" />
                </g>
            </svg>
        </a>
        <a href="<?php echo THEME_DOC . '/A28.pdf' ?>" target="_blank"
            style="position: absolute; top: 54%; left: 34.5%; width: 16.3%; opacity: 30%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 230.93 193.61">
                <g>
                    <polyline
                        style="fill: <?php echo apartament_color_switch(get_field("apartament", 477)["status"]); ?>"
                        class="cls-1"
                        points="0 8.5 0 0 31.94 0 31.94 8.5 124.63 8.5 124.63 0 154.11 0 230.93 0 230.93 193.61 109.89 193.61 109.89 142.02 0 142.02 0 8.5" />
                </g>
            </svg> </a>
    </div>
</div>