<?php
add_action('wp_ajax_search_apartaments', 'ajax_apartaments');
add_action('wp_ajax_nopriv_search_apartamenst', 'ajax_apartaments');

function ajax_apartaments(){
    $args = array(
        'numberposts' => -1,
        'post_type' => 'apartaments',
        'status' => 'published'
    );
    // meters
    $m_up = $_POST['meters_upper'];
    $m_low = $_POST['meters_lower'];
    $f_up = $_POST['floors_upper'];
    $f_low = $_POST['floors_lower'];
    $r_up = $_POST['rooms_upper'];
    $r_low = $_POST['rooms_lower'];
    $status = $_POST['status'];
    $apartaments = get_posts($args);
    $response = array();
    foreach ($apartaments as $apartament){
        $id = $apartament->ID;
        $data = get_field('apartament', $id);
        if ($status!=='all'){
            if (
                (float)$data['meters']>= (float)$m_low && (float)$data['meters'] <= (float)$m_up
                && (float)$data['rooms']>= (float)$r_low && (float)$data['rooms'] <= (float)$r_up
                && (float)$data['floor']>= (float)$f_low && (float)$data['floor'] <= (float)$f_up
                && $data['status'] == $status
            ) {
                $response[] = $data;
            }
        }
        else{
            if (
                (float)$data['meters']>= (float)$m_low && (float)$data['meters'] <= (float)$m_up
                && (float)$data['rooms']>= (float)$r_low && (float)$data['rooms'] <= (float)$r_up
                && (float)$data['floor']>= (float)$f_low && (float)$data['floor'] <= (float)$f_up
            ) {
                $response[] = $data;
            }
        }

    }
    echo json_encode($response);
    wp_die();
}