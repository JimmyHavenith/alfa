<?php
require TEMPLATEPATH.'/WPHP-framework/theme.php';
$theme = new Theme(array(
  'menus' => array(
    'nav' => 'Navigation'
  )
));

register_post_type( 'news',
    array(
        'labels' => array(
            'name' => __( 'News' ),
            'singular_name' => __( 'news' ),
            'add_new' => __('Nouvelle news'),
            'add_new_item' => __('Ajouter une nouvelle news'),
            'menu_name' => __('News'),
            'all_items' => __('Toutes les news'),
            'name_admin_bar' => __('News'),
            'view_item' => __('Voir la news'),
            'edit_item' => __('Modifier la news')

        ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('thumbnail', 'title'),
    'menu_position' => 5
  )
);
