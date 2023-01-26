<?php
$args = array(
    'numberposts' => 4,
    'post_type' => 'apartaments'
);
$apartaments = get_posts($args);
?>

<section class="apartamets mb-5">
    <h2 class="content__title text-center mb-5">
        Spis <strong>apartamentów</strong>
    </h2>
    <div class="row mx-0 px-0">
        <div class="col-12 col-md-10 offset-md-1">
            <div class="wrapper w-100 table-wrapper">
                <table class="apartaments-list mb-3">
                    <caption></caption>
                    <thead>
                    <tr>
                        <th><a data-meters_trigger
                               data-type="0"
                               href="#"
                            >
                                Powierzchnia [m²]
                                <svg id="a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 15"><polygon id="b" points="21 0 24 3.06 12 15 0 3.06 3 0 12 9 21 0"/></svg>
                            </a>
                        </th>
                        <th>Piętro</th>
                        <th>Ilość pokoi</th>
                        <th>Cena netto [m²]</th>
                        <th>Cena netto</th>
                        <th>Numer mieszkania</th>
                        <th>Status</th>
                        <th>Rzut Apartamentu</th>
                    </tr>
                    </thead>
                    <tbody data-sort_table>
                    <?php foreach ($apartaments as $el) : ?>
                        <tr data-sort_table_row>
                            <?php
                            $el_args = get_field('apartament', $el->ID);
                            $meters = $el_args['meters'];
                            $rooms = $el_args['rooms'];
                            $floor = $el_args['floor'];
                            $price_meter = $el_args['price_meter'];
                            $price = $el_args['price'];
                            $number = $el_args['number'];
                            $status = $el_args['status'];
                            $file = $el_args['file'];
                            ?>
                            <td data-meters="<?php echo $meters ?>"><?php echo $meters ?></td>
                            <td><?php echo $floor ?></td>
                            <td><?php echo $rooms ?></td>
                            <td><?php echo $price_meter ?> zł</td>
                            <td><?php echo $price ?> zł</td>
                            <td><?php echo $number ?></td>
                            <td class="apartaments-list__status apartaments-list__status--<?php echo $status ?>">
                            <span class="apartaments-list__status--info">
                                <?php echo $status ?>
                            </span>
                            </td>
                            <td>
                                <a href="<?php echo $file ?>"
                                   class="apartaments-list__file"
                                   target="_blank"
                                >
                                    <svg id="a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 341.51 422.3">
                                        <path d="M216.69,271.66h-15.19c-3.69,0-6.68,2.99-6.68,6.68v62.88c0,3.69,2.99,6.68,6.68,6.68h15.19c21.44,0,38.89-17.07,38.89-38.05s-17.44-38.19-38.89-38.19Zm0,62.88h-8.51v-49.51h8.51c14.07,0,25.52,11.14,25.52,24.83s-11.45,24.69-25.52,24.69Z"/>
                                        <path d="M310.09,271.26h-36.61c-3.69,0-6.68,2.99-6.68,6.68v63.7c0,3.69,2.99,6.68,6.68,6.68s6.68-2.99,6.68-6.68v-24.98h24.09c3.69,0,6.68-2.99,6.68-6.68s-2.99-6.68-6.68-6.68h-24.09v-18.66h29.92c3.69,0,6.68-2.99,6.68-6.68s-2.99-6.68-6.68-6.68Z"/>
                                        <path d="M154.62,271.66h-14.27c-3.69,0-6.68,2.99-6.68,6.68v62.88c0,3.69,2.99,6.68,6.68,6.68s6.68-2.99,6.68-6.68v-14.92h7.59c18.93,0,30.69-10.54,30.69-27.51s-11.76-27.13-30.69-27.13Zm0,41.28h-7.59v-27.91h7.59c11.5,0,17.33,4.63,17.33,13.76s-5.83,14.15-17.33,14.15Z"/>
                                        <path d="M308.13,233.61V103.51c0-.09,0-.17-.01-.26,.07-1.8-.57-3.63-1.94-5L209.89,1.96c-1.33-1.33-3.07-1.97-4.81-1.95-.04,0-.07,0-.11,0H33.7C15.12,0,0,15.13,0,33.73V388.58c0,18.59,15.12,33.72,33.7,33.72h240.72c18.58,0,33.7-15.13,33.7-33.72v-2.62c18.41-.02,33.39-14.99,33.39-33.38v-85.56c0-18.41-14.97-33.39-33.39-33.41ZM211.66,22.63l74.2,74.2h-53.87c-11.21,0-20.33-9.13-20.33-20.35V22.63Zm83.11,365.95c0,11.22-9.12,20.36-20.33,20.36H33.7c-11.21,0-20.34-9.13-20.34-20.36V33.73c0-11.23,9.12-20.37,20.34-20.37H198.29v63.12c0,18.59,15.12,33.71,33.69,33.71h62.78v123.41H128.34c-18.43,0-33.42,14.99-33.42,33.41v85.56c0,18.41,14.99,33.39,33.42,33.39h166.43v2.62Zm33.39-36c0,11.04-9,20.02-20.05,20.02h-6.57s-.05,0-.08,0-.05,0-.08,0H128.34c-11.06,0-20.06-8.98-20.06-20.02v-85.56c0-11.05,9-20.05,20.06-20.05h179.76c11.06,0,20.05,8.99,20.05,20.05v85.56Z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <a href="#" class="site-btn site-btn__green">Zobacz więcej</a>
        </div>
    </div>
</section>
