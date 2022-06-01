<?php
function post_type_apartaments() {

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Apartamenty', 'Post Type General Name', 'sloneczna-rezydencja' ),
        'singular_name'       => _x( 'Apartament', 'Post Type Singular Name', 'sloneczna-rezydencja' ),
        'menu_name'           => __( 'Apartamenty', 'sloneczna-rezydencja' ),
        'all_items'           => __( 'Apartament', 'sloneczna-rezydencja' ),
        'view_item'           => __( 'Zobacz apartament', 'sloneczna-rezydencja' ),
        'add_new_item'        => __( 'Dodaj apartament', 'sloneczna-rezydencja' ),
        'add_new'             => __( 'Dodaj apartament', 'sloneczna-rezydencja' ),
        'edit_item'           => __( 'Edytuj apartament', 'sloneczna-rezydencja' ),
        'update_item'         => __( 'Zaktualizuj apartament', 'sloneczna-rezydencja' ),
        'search_items'        => __( 'Szukaj apartament', 'sloneczna-rezydencja' ),
        'not_found'           => __( 'Nie znaleziono apartament', 'sloneczna-rezydencja' ),
        'not_found_in_trash'  => __( 'Nie znaleziono apartament w koszu', 'sloneczna-rezydencja' ),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'apartaments', 'sloneczna-rezydencja' ),
        'description'         => __( 'Apartamenty: opisy, pliki etc', 'sloneczna-rezydencja' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => false,
        'menu_position'       => 5,
        'can_export'          => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-admin-home',

        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'department', 'med_title' ),
    );

    // Registering your Custom Post Type
    register_post_type( 'apartaments', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'post_type_apartaments', 0 );