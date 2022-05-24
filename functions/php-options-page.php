<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Ustawienia globalnych elementów motywu',
        'menu_title'	=> 'Ustawienia Motywu',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> true,
        'icon_url' => '',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Edycja animacji wstępnej',
        'menu_title'	=> 'Intro',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Edycja Nagłówku Strony',
        'menu_title'	=> 'Nagłówek',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Edycja Stopki Strony',
        'menu_title'	=> 'Stopka',
        'parent_slug'	=> 'theme-general-settings',
    ));
}