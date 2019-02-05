<?php
function register_enqueue_style() {
/* Registrando estilos */

//Primero agregamos el que tienes en tu html seria tu css
wp_register_style('main', get_theme_file_uri('/css/style.css'),
'normalize', '1.0', 'screen');

//Ahora el bootstrap, este no esta en tu carpeta por lo que va asi
/*
  1. Primero va el nombre
  2. Ubicacion
*/
wp_register_style('boostrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
'normalize', 'screen');

wp_register_style('b-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css',
'normalize', 'screen');

wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Playfair+Display:900i',
'normalize', '1.0', 'screen');
/* Estilos en cola */

//Aqui van los nombres que creamos
wp_enqueue_style('main');
wp_enqueue_style('boostrap');
wp_enqueue_style('b-theme');
wp_enqueue_style('googlefont');
}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

//Despues de aqui


function register_enqueue_scripts() {
  /* Registrando Scripts */
  wp_register_script('JS', 'http://code.jquery.com/jquery-1.11.0.min.js', null, null, true);
/* Enqueue Scripts */
  wp_enqueue_script('JS');


  /* Registrando Scripts */
  wp_register_script('JSbootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', null, null, true);
  /* Enqueue Scripts */
  wp_enqueue_script('JSbootstrap');
}


add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

//Menú personalizable?//

//Termino de Mnú personalizable//

// Register Custom Post Type
// CPT proyectos
function proyecto_post_type() {

	$labels = array(
		'name'                  => _x( 'proyecto', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'plato', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Platos', 'text_domain' ),
		'name_admin_bar'        => __( 'Platos', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'proyecto', 'text_domain' ),
		'description'           => __( 'personalización del proyecto', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'proyecto', $args );

}
add_action( 'init', 'proyecto_post_type', 0 );

?>
