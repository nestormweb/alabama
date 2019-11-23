<?php 

// Register Custom Navigation Walker
require_once('bs4navwalker.php');


add_action( 'after_setup_theme', 'alabama_setup' );

	

	function alabama_setup() {

		

		//add_image_size('red_thumb',157,110, true);	

		//add_image_size('proyecto_thumb',256,137, true);		

		//add_image_size('noticia_thumb',54,54, true);

		//add_image_size('noticia_thumb',265,176, true);

		//add_image_size('thumb_pub',115,150, true);

				

		//add_image_size('izquierda_thumb',252,380, true);	

		add_image_size('banner_thumb',1280,393, true);



		add_theme_support('post-thumbnails' );


		 register_nav_menu( 'primary', 'Menu que va en el header' );
    register_nav_menu( 'lateral', 'Menu que va en el sidebar' );


		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video','audio','image', 'link' ) );

		add_post_type_support( 'page', 'excerpt' );


	}


// include custom jQuery
	/*
function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_bloginfo('template_url') . '/js/jquery-3.3.1.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
*/

function tienefamilia(){
	global $post; 

	$children = get_pages( array( 'child_of' => $post->ID ) );

	if($post->post_parent != 0 or count( $children ) != 0 ){
		return true;
	} else {
		return false;
	}
}


function wpb_list_child_pages() { 

global $post; 



if ( $post->post_parent != 0 ) {

	$principal = wp_list_pages( 'include=' . $post->post_parent . '&echo=0&title_li=' );
	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
}
else{
	
	$principal = wp_list_pages( 'include=' . $post->ID . '&echo=0&title_li=' );
	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
}
if ( $childpages ) {

	$string = '<ul  class="nav nav-pills flex-column lateral" id="v-pills-tab" role="tablist" aria-orientation="vertical">' ;

	$string .= $principal;
	$string .= $childpages ;
	$string .= '</ul>';
} 

return $string;

}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');

add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
 
function posts_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Thumbs');
    return $defaults;
}
 
function posts_custom_columns($column_name, $id){
    if($column_name === 'riv_post_thumbs'){
        echo the_post_thumbnail( 'thumbnail' );
    }
}

function tax2links2($postid,$tax=false){
  if($tax==false) {return false; }
  $taxo=wp_get_post_terms($postid,$tax);
  foreach ($taxo as $kt => $vt) {
    $htmlcode.=''.($vt->name).' / ';
    //$htmlcode.='<a href="#">'.($vt->name).'</a> / ';
    //$htmlcode.=''.($vt->name).' ';
  }
  if(strlen($htmlcode)>2){
    return substr($htmlcode,0,-2);
    //return $htmlcode;
  }
  return false;
}

/*  ###########################################################  Definicion de bloques ##################################################   */
$labels = array(
	'name' => _x('bloques', ''),
	'singular_name' => _x('bloques', ''),
	'add_new' => _x('Agregar', ''),
	'add_new_item' => __('Agregar documento'),
	'edit_item' => __('Editar bloques'),
	'new_item' => __('Nuevo bloques'),
	'view_item' => __('Ver bloques'),
	'search_items' => __('Buscar bloques'),
	'not_found' =>  __('Seccion en construcci&oacute;n'),
	'not_found_in_trash' => __('No hay documento en papelera'),
	'parent_item_colon' => '',
	'menu_name' => 'bloques'
);
$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'bloques'),
	'map_meta_cap' => true,
	'capability_type' => array('documento', 'bloques'),
	'has_archive' => true,
	'menu_icon' => get_bloginfo('template_directory') . '/images/bloques.png',
	'hierarchical' => true,
	'menu_position' => 7,
	'supports' => array('title','thumbnail','editor','excerpt','comments','page-attributes')
);
register_post_type('bloques',$args);
	flush_rewrite_rules();

	

	/*  ###########################################################  Definicion de promociones ##################################################   */
$labels = array(
	'name' => _x('promociones', ''),
	'singular_name' => _x('promociones', ''),
	'add_new' => _x('Agregar', ''),
	'add_new_item' => __('Agregar documento'),
	'edit_item' => __('Editar promociones'),
	'new_item' => __('Nuevo promociones'),
	'view_item' => __('Ver promociones'),
	'search_items' => __('Buscar promociones'),
	'not_found' =>  __('Seccion en construcci&oacute;n'),
	'not_found_in_trash' => __('No hay documento en papelera'),
	'parent_item_colon' => '',
	'menu_name' => 'promociones'
);
$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'promociones'),
	'map_meta_cap' => true,
	'capability_type' => array('documento', 'promociones'),
	'has_archive' => true,
	'menu_icon' => get_bloginfo('template_directory') . '/images/promociones.png',
	'hierarchical' => true,
	'menu_position' => 7,
	'supports' => array('title','thumbnail','editor','excerpt','comments','page-attributes')
);
register_post_type('promociones',$args);
	flush_rewrite_rules();


	
	/*  ###########################################################  Definicion de marcas ##################################################   */
$labels = array(
	'name' => _x('marcas', ''),
	'singular_name' => _x('marcas', ''),
	'add_new' => _x('Agregar', ''),
	'add_new_item' => __('Agregar documento'),
	'edit_item' => __('Editar marcas'),
	'new_item' => __('Nuevo marcas'),
	'view_item' => __('Ver marcas'),
	'search_items' => __('Buscar marcas'),
	'not_found' =>  __('Seccion en construcci&oacute;n'),
	'not_found_in_trash' => __('No hay documento en papelera'),
	'parent_item_colon' => '',
	'menu_name' => 'marcas'
);
$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'marcas'),
	'map_meta_cap' => true,
	'capability_type' => array('marca', 'marcas'),
	'has_archive' => true,
	'menu_icon' => get_bloginfo('template_directory') . '/images/marcas.png',
	'hierarchical' => true,
	'menu_position' => 7,
	'supports' => array('title','thumbnail','editor','excerpt','comments','page-attributes')
);
register_post_type('marcas',$args);
	flush_rewrite_rules();
