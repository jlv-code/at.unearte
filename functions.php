<?php

define('ATUNEARTE_VERSION', 1.0);

// Añade la posibilidad de RSS dentro del Sitio Web
add_theme_support('automatic-feed-links');

// Añade funcionalidades de HTML5
add_theme_support('html5', array( 'search-form', 'comment-form', 'comment-list' ));

// Añade soporte de los formatos de entradas
add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'));

// Añade la funcionalidad de Soporte de Thumbnails e Imagenes Destacadas
add_theme_support('post-thumbnails');

// Añade recortes de imágenes según las dimensiones que se le otorgen
if (function_exists('add_image_size')) {
	add_image_size('img-150x150', 150, 150, true);
}

// Añade menús al tema para personalizar su ubicación
register_nav_menus(
	array(
		'primary'	=>	'Principal', // Register the Primary menu
	)
);

// Función que permite controlar la cantidad de palabras en el Excerpt
function custom_excerpt_length($length) {
	return 90;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Función que permite cambiar "[...]" del excerpt por cualquier otra combinación de caracteres
function new_excerpt_more($more) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function the_breadcrumb() {
    echo '<span>» <a href="'.get_option('home').'">Inicio</a></span> ';
    if (is_single()) {
        echo "<span>» ";
        the_title();
        echo "</span> ";
    } elseif (is_category() || is_single()) {
    	echo "<span>» ";
		the_category('title_li=');
        echo "</span> ";
    } elseif (is_page()) {
    	echo "<span>» ";
        echo the_title();
        echo "</span> ";
    }
}

// Función que permite generar secciónes para uso de widgets
function atunearte_columns() {
	register_sidebar(array(
		'id' => 'home-sidebar',
		'name' => 'Home Sidebar',
		'description' => 'Agregue aquí los widgets que desea mostrar en esta sección.',
		'before_widget' => '<div class="widgets-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		'empty_title'=> '',
	));
	
} 
add_action( 'widgets_init', 'atunearte_columns' );

// Función que permite incorporar al tema Hojas de Estilos y Scripts de javascripts
function atunearte_styles_scripts() {
	// Añade script para mover el form de comentarios
	if (is_singular() && comments_open() && get_option('thread_comments')):
		wp_enqueue_script( 'comment-reply' );
	endif;

	// Añade las Hojas de Estilos
	wp_enqueue_style( 'atunearte_global', get_template_directory_uri() . '/style.css', '10000', 'all' );
			
	// Añade JavaScripts
	//wp_enqueue_script( 'naked-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), ATUNEARTE_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'atunearte_styles_scripts' );

// Función que añade la funcionalidad de paginador al template
function atunearte_post_paging() {
	global $wp_query;
	
	if ($wp_query->max_num_pages < 2)	
		return;
	?>
	<div class="entries-nav">
	<?php if ( get_previous_posts_link() ) : ?>
		<div class="nav-previous"><?php previous_posts_link('Anterior'); ?></div>
	<?php endif; ?>
	<?php if ( get_next_posts_link() ) : ?>
		<div class="nav-next"><?php next_posts_link('Siguiente'); ?></div>
	<?php endif; ?>
	</div>
	<?php 
}
?>

