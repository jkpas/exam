<?php

/**подключаем стили и скрипты**/
function skokov_scripts () {
	wp_enqueue_style( 'bs_styles', get_template_directory_uri() . "/css/bootstrap.min.css" );
	wp_enqueue_style( 'main_styles', get_stylesheet_uri() );	
}

add_action( "wp_enqueue_scripts", "skokov_scripts");

/**регистрируем меню**/
register_nav_menus( array(
	'main_menu' => 'Main Menu',
) );

/**класс эктив в меню???**/
// add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
// function special_nav_class($classes, $item){
//      if( in_array('current-menu-item', $classes) ){
//              $classes[] = 'active ';
//      }
//      return $classes;
// }

/**регистрируем виджеты*/
function register_text_widgets(){
	register_sidebar(array(
	"name" => "Виджеты сайдбара",
	"id" => "sidebar",
	"description" => "Здесь добавляйте виджеты сайдбара",
	'before_widget' => '<section id="%1$s" class="aside-section">',
	"after_widget" => " </section>",
	"before_title" => "<h3>",
	"after_title" => "</h3>",
	));	
}
add_action( 'widgets_init', 'register_text_widgets' );

add_theme_support('post-thumbnails');








