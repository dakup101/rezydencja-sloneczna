<?php
// Register Custom Taxonomy
function floor_taxonomy()
{

    $labels = array(
        'name'                       => _x('Piętra', 'Taxonomy General Name', 'rezydencja-sloneczna'),
        'singular_name'              => _x('Piętro', 'Taxonomy Singular Name', 'rezydencja-sloneczna'),
        'menu_name'                  => __('Piętra', 'rezydencja-sloneczna'),
        'all_items'                  => __('Wszystkie piętra', 'rezydencja-sloneczna'),
        'parent_item'                => __('', 'rezydencja-sloneczna'),
        'parent_item_colon'          => __('', 'rezydencja-sloneczna'),
        'new_item_name'              => __('Piętro', 'rezydencja-sloneczna'),
        'add_new_item'               => __('Dodaj', 'rezydencja-sloneczna'),
        'edit_item'                  => __('Edytuj', 'rezydencja-sloneczna'),
        'update_item'                => __('Aktualizuj', 'rezydencja-sloneczna'),
        'view_item'                  => __('Pokaż', 'rezydencja-sloneczna'),
        'separate_items_with_commas' => __('Odziel przecinkiem', 'rezydencja-sloneczna'),
        'add_or_remove_items'        => __('Dodaj / usuń', 'rezydencja-sloneczna'),
        'choose_from_most_used'      => __('Wybierz wśród często używanych', 'rezydencja-sloneczna'),
        'popular_items'              => __('Popularne', 'rezydencja-sloneczna'),
        'search_items'               => __('Szukaj', 'rezydencja-sloneczna'),
        'not_found'                  => __('Nie znaleziono', 'rezydencja-sloneczna'),
        'no_terms'                   => __('Brak', 'rezydencja-sloneczna'),
        'items_list'                 => __('Lista', 'rezydencja-sloneczna'),
        'items_list_navigation'      => __('Nawigacja listy', 'rezydencja-sloneczna'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => false,
        'show_tagcloud'              => false,
        'rewrite'                    => false,
        'show_in_rest'               => false,
    );
    register_taxonomy('floor', array('apartaments'), $args);
}
add_action('init', 'floor_taxonomy', 0);


function post_type_apartaments()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Apartamenty', 'Post Type General Name', 'sloneczna-rezydencja'),
        'singular_name'       => _x('Apartament', 'Post Type Singular Name', 'sloneczna-rezydencja'),
        'menu_name'           => __('Apartamenty', 'sloneczna-rezydencja'),
        'all_items'           => __('Apartament', 'sloneczna-rezydencja'),
        'view_item'           => __('Zobacz apartament', 'sloneczna-rezydencja'),
        'add_new_item'        => __('Dodaj apartament', 'sloneczna-rezydencja'),
        'add_new'             => __('Dodaj apartament', 'sloneczna-rezydencja'),
        'edit_item'           => __('Edytuj apartament', 'sloneczna-rezydencja'),
        'update_item'         => __('Zaktualizuj apartament', 'sloneczna-rezydencja'),
        'search_items'        => __('Szukaj apartament', 'sloneczna-rezydencja'),
        'not_found'           => __('Nie znaleziono apartament', 'sloneczna-rezydencja'),
        'not_found_in_trash'  => __('Nie znaleziono apartament w koszu', 'sloneczna-rezydencja'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('apartaments', 'sloneczna-rezydencja'),
        'description'         => __('Apartamenty: opisy, pliki etc', 'sloneczna-rezydencja'),
        'labels'              => $labels,
        'supports'            => array('title', 'revisions', 'custom-fields',),
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
        'taxonomies'          => array('floor'),
    );

    // Registering your Custom Post Type
    register_post_type('apartaments', $args);
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action('init', 'post_type_apartaments', 0);