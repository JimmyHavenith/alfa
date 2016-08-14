<?php
require TEMPLATEPATH.'/WPHP-framework/theme.php';
$theme = new Theme(array(
  'menus' => array(
    'nav' => 'Navigation'
  )
));


if ( !function_exists('sf_get_current_url') ):
 	function sf_get_current_url( $mode = 'base' ) {
 		$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 		switch( $mode ){
 			case 'raw' : 	return $url; break;
 			case 'base' : 	return reset(explode('?', $url)); break;
 			case 'uri' : 	$exp = explode( '?', $url );
 			return trim( str_replace( home_url(),  », reset( $exp ) ), '/' ); break;
			default: 	return false;
 		}
  }
endif;

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

register_post_type( 'tarifs',
    array(
        'labels' => array(
            'name' => __( 'Tarifs' ),
            'singular_name' => __( 'tarifs' ),
            'add_new' => __('Nouveau tarif'),
            'add_new_item' => __('Ajouter un nouveau tarif'),
            'menu_name' => __('Tarifs'),
            'all_items' => __('Tous les tarifs'),
            'name_admin_bar' => __('Tarifs'),
            'view_item' => __('Voir les tarifs'),
            'edit_item' => __('Modifier le tarif')

        ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('thumbnail', 'title'),
    'menu_position' => 5
  )
);

register_post_type( 'partenariat-reseaux',
    array(
        'labels' => array(
            'name' => __( 'Partenariats & réseaux' ),
            'singular_name' => __( 'partenariats' ),
            'add_new' => __('Nouveau lien'),
            'add_new_item' => __('Ajouter un nouveau lien'),
            'menu_name' => __('Partenariats & réseaux'),
            'all_items' => __('Tous les liens'),
            'name_admin_bar' => __('Partenariats & réseaux'),
            'view_item' => __('Voir le lien'),
            'edit_item' => __('Modifier le lien')

        ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('thumbnail', 'title'),
    'menu_position' => 5
  )
);

register_post_type( 'self-help',
    array(
        'labels' => array(
            'name' => __( 'Self-help' ),
            'singular_name' => __( 'self-help' ),
            'add_new' => __('Nouveau self-help'),
            'add_new_item' => __('Ajouter un nouveau self-help'),
            'menu_name' => __('Self-help'),
            'all_items' => __('Tous les self-help'),
            'name_admin_bar' => __('Self-help'),
            'view_item' => __('Voir le self-help'),
            'edit_item' => __('Modifier le self-help')

        ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('thumbnail', 'title'),
    'menu_position' => 5
  )
);

register_post_type( 'faqs',
    array(
        'labels' => array(
            'name' => __( 'FAQs' ),
            'singular_name' => __( 'faq' ),
            'add_new' => __('Nouvelle question'),
            'add_new_item' => __('Ajouter une nouvelle question'),
            'menu_name' => __('FAQs'),
            'all_items' => __('Toutes les questions'),
            'name_admin_bar' => __('Faqs'),
            'view_item' => __('Voir la question'),
            'edit_item' => __('Modifier la question')

        ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('thumbnail', 'title'),
    'menu_position' => 4
  )
);
