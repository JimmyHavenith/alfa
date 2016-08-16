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

function create_post_type() {
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

  register_post_type( 'contact',
      array(
          'labels' => array(
              'name' => __( 'contact' ),
              'singular_name' => __( 'contact' ),
              'add_new' => __('Nouveau lieu'),
              'add_new_item' => __('Ajouter un nouveau lieu'),
              'menu_name' => __('Contact'),
              'all_items' => __('Tous les lieux'),
              'name_admin_bar' => __('Contact'),
              'view_item' => __('Voir le lieu'),
              'edit_item' => __('Modifier le lieu')

          ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('thumbnail', 'title'),
      'menu_position' => 4
    )
  );

  register_post_type( 'documents',
      array(
          'labels' => array(
              'name' => __( 'documents' ),
              'singular_name' => __( 'document' ),
              'add_new' => __('Nouveau document'),
              'add_new_item' => __('Ajouter un nouveau document'),
              'menu_name' => __('Documents'),
              'all_items' => __('Tous les documents'),
              'name_admin_bar' => __('Documents'),
              'view_item' => __('Voir le document'),
              'edit_item' => __('Modifier le document')

          ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('thumbnail', 'title'),
      'menu_position' => 4
    )
  );

  register_post_type( 'services',
      array(
          'labels' => array(
              'name' => __( 'services' ),
              'singular_name' => __( 'article' ),
              'add_new' => __('Ajouter un article'),
              'add_new_item' => __('Ajouter un nouvel article'),
              'menu_name' => __('Services'),
              'all_items' => __('Tous les articles'),
              'name_admin_bar' => __('Services'),
              'view_item' => __('Voir l\'article'),
              'edit_item' => __('Modifier l\'article')
          ),
      'public' => true,
      'has_archive' => true,
      'supports' => ['title'],
      'menu_position' => 4
    )
  );
  register_post_type( 'equipes',
      array(
          'labels' => array(
              'name' => __( 'equipes' ),
              'singular_name' => __( 'equipe' ),
              'add_new' => __('Ajouter un membre'),
              'add_new_item' => __('Ajouter un nouveau membre'),
              'menu_name' => __('Equipes'),
              'all_items' => __('Tous les membres'),
              'name_admin_bar' => __('Equipes'),
              'view_item' => __('Voir le membre'),
              'edit_item' => __('Modifier le membre')
          ),
      'public' => true,
      'has_archive' => true,
      'supports' => ['title'],
      'menu_position' => 4
    )
  );
  register_post_type( 'banniere',
      array(
          'labels' => array(
              'name' => __( 'bannière' ),
              'singular_name' => __( 'bannière' ),
              'menu_name' => __('Bannière'),
              'all_items' => __('Voir la bannière'),
              'name_admin_bar' => __('Bannière'),
              'view_item' => __('Voir la bannière'),
              'edit_item' => __('Modifier la bannière')
          ),
      'public' => true,
      'has_archive' => true,
      'supports' => ['title'],
      'menu_position' => 4,
      'excerpt' => 'add_new_item'
    )
  );
}
function create_taxonomy() {
  register_taxonomy(
    'sous_services', /* Voici donc la taxonomie */
    'services', /* nom du custom post type */
    array(
        'hierarchical' => true,
        'labels' => array(
        'name' => __( 'Catégories', 'bakery' ),
        'singular_name' => __( 'Catégories', 'nom du theme' ),
        'search_items' =>  __( 'Rechercher une catégorie', 'nom du theme' ),
        'all_items' => __( 'Toutes les catégories', 'nom du theme' ),
        'parent_item' => __( 'Catégorie parente', 'nom du theme' ),
        'parent_item_colon' => __( 'Catégorie parente :', 'nom du theme' ),
        'edit_item' => __( 'Éditer une catégorie', 'nom du theme' ),
        'update_item' => __( 'Sauvegarder une catégorie', 'nom du theme' ),
        'add_new_item' => __( 'Ajouter une catégorie', 'nom du theme' ),
        'new_item_name' => __( 'Nouvelle catégorie', 'nom du theme' )
      ),
      'show_admin_column' => true,
      'show_ui' => true,
      'query_var' => true
    )
  );
  register_taxonomy(
    'nos_equipes',
    'equipes',
    array(
        'hierarchical' => true,
        'labels' => array(
        'name' => __( 'Catégories', 'bakery' ),
        'singular_name' => __( 'Catégories', 'nom du theme' ),
        'search_items' =>  __( 'Rechercher une catégorie', 'nom du theme' ),
        'all_items' => __( 'Toutes les catégories', 'nom du theme' ),
        'parent_item' => __( 'Catégorie parente', 'nom du theme' ),
        'parent_item_colon' => __( 'Catégorie parente :', 'nom du theme' ),
        'edit_item' => __( 'Éditer une catégorie', 'nom du theme' ),
        'update_item' => __( 'Sauvegarder une catégorie', 'nom du theme' ),
        'add_new_item' => __( 'Ajouter une catégorie', 'nom du theme' ),
        'new_item_name' => __( 'Nouvelle catégorie', 'nom du theme' )
      ),
      'show_admin_column' => true,
      'show_ui' => true,
      'query_var' => true
    )
  );
}


add_action( 'init', 'create_post_type' );
add_action( 'init', 'create_taxonomy' );
