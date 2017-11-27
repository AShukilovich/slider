<?php


remove_filter('the_content', 'wpautop'); // правильное считывание контента во вкладке Текст

add_theme_support( 'post-thumbnails' ); // миниатюра записи для всех типов постов

add_filter('use_default_gallery_style', '__return_false');

add_filter('the_content', 'replace_url_to_https', 30);
function replace_url_to_https($text)
{
    $text = preg_replace('~http(://(?:www.)?' . preg_quote($_SERVER['HTTP_HOST']) . ')~', 'https\1', $text);
    return $text;
}


function jquery_scripts () {
	wp_register_script('jquery-min-214', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), null, false );
	wp_enqueue_script('jquery-min-214');
	wp_register_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', array('jquery-min-214'), '3.0.6', true);
	wp_enqueue_script('jquery-migrate');
}
add_action('wp_enqueue_scripts', 'jquery_scripts');

function nanzhul_styles() {
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
	wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700&amp;subset=cyrillic,latin,greek,vietnamese');
	wp_enqueue_style( 'font-style');
	wp_register_style('font-flaticon', get_template_directory_uri() . '/assets/nanzhul-theme/css/font-flaticon/flaticon.css');
	wp_enqueue_style( 'font-flaticon');
	// wp_register_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css');
	// wp_enqueue_style( 'bootstrap-css');
	wp_register_style('et-line-font-plugin', get_template_directory_uri() . '/assets/et-line-font-plugin/style.css');
	wp_enqueue_style( 'et-line-font-plugin');
	wp_register_style('material', get_template_directory_uri() . '/assets/bootstrap-material-design-font/css/material.css');
	wp_enqueue_style( 'material');
	// wp_register_style('tether.min', get_template_directory_uri() . '/assets/tether/tether.min.css');
	// wp_enqueue_style( 'tether.min');
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap-css');
	// wp_register_style('socicon', get_template_directory_uri() . '/assets/socicon/css/socicon.min.css');
	// wp_enqueue_style( 'socicon');
	wp_register_style('animate-min', get_template_directory_uri() . '/assets/animate.css/animate.min.css');
	wp_enqueue_style( 'animate-min');
	wp_register_style('dropdown', get_template_directory_uri() . '/assets/dropdown/css/style.css');
	wp_enqueue_style( 'dropdown');
	wp_register_style('theme-style', get_template_directory_uri() . '/assets/theme/css/style.css');
	wp_enqueue_style( 'theme-style');
	wp_register_style('mbr-additional', get_template_directory_uri() . '/assets/mobirise/css/mbr-additional.css');
	wp_enqueue_style( 'mbr-additional');
	wp_register_style('set1', get_template_directory_uri() . '/assets/nanzhul-theme/css/set1.css');
	wp_enqueue_style( 'set1');
	//fancybox
	wp_register_style('jquery.fancybox.css', get_template_directory_uri() . '/assets/fancybox/jquery.fancybox.css');
	wp_enqueue_style( 'jquery.fancybox.css');
	// fancybox
	// wp_register_style('fancy-fancybox-css', get_template_directory_uri() . '/assets/fancy/source/jquery.fancybox.css?v=2.1.5', array(), '2.1.5');
	// wp_enqueue_style( 'fancy-fancybox-css');
		// wp_register_style('fancy-buttons-css', get_template_directory_uri() . '/assets/fancy/source/helpers/jquery.fancybox-buttons.css?v=1.0.5', array(), '1.0.5');
		// wp_enqueue_style( 'fancy-buttons-css');
		// wp_register_style('fancy-thumbs-css', get_template_directory_uri() . '/assets/fancy/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7', array(), '1.0.7');
		// wp_enqueue_style( 'fancy-thumbs-css');
	//flexslider
	// wp_register_style('flexslider.css', get_template_directory_uri() . '/assets/flexslider/flexslider.css');
	// wp_enqueue_style( 'flexslider.css');
	//swiper
	wp_register_style('swiper.min.css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/css/swiper.min.css');
	wp_enqueue_style( 'swiper.min.css');
	// nanzhul-style
	wp_register_style('nanzhul-style', get_template_directory_uri() . '/assets/nanzhul-theme/css/nanzhul-style.css');
	wp_enqueue_style( 'nanzhul-style');
}
add_action('wp_enqueue_scripts', 'nanzhul_styles');

function nanzhul_scripts () {
	// wp_register_script('jquery-min-214', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js');
	// wp_enqueue_script('jquery-min-214');
	wp_register_script('bootstrap', get_template_directory_uri() . '/assets/nanzhul-theme/js/bootstrap.min.js', array('jquery-min-214'), null, true );
	wp_enqueue_script( 'bootstrap');
	// wp_register_script('tether', get_template_directory_uri() . '/assets/tether/tether.min.js', array('jquery-min-214'), null, true );
	// wp_enqueue_script( 'tether');
	wp_register_script('SmoothScroll', get_template_directory_uri() . '/assets/smooth-scroll/SmoothScroll.js', array('jquery-min-214'), null, true );
	wp_enqueue_script( 'SmoothScroll');
	wp_register_script('viewportchecker', get_template_directory_uri() . '/assets/viewportChecker/jquery.viewportchecker.js', array('jquery-min-214'), null, true );
	wp_enqueue_script( 'viewportchecker');
	wp_register_script('script.min', get_template_directory_uri() . '/assets/dropdown/js/script.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'script.min');
	wp_register_script('jquery.touchSwipe.min', get_template_directory_uri() . '/assets/touchSwipe/jquery.touchSwipe.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'jquery.touchSwipe.min');
	// wp_register_script('masonry.pkgd.min', get_template_directory_uri() . '/assets/masonry/masonry.pkgd.min.js', array('jquery-min-214'), null, true );
	// wp_enqueue_script( 'masonry.pkgd.min');
	// wp_register_script('imagesloaded.pkgd.min', get_template_directory_uri() . '/assets/imagesloaded/imagesloaded.pkgd.min.js', array('jquery-min-214'), null, true );
	// wp_enqueue_script( 'imagesloaded.pkgd.min');
	wp_register_script('script', get_template_directory_uri() . '/assets/theme/js/script.js', array('jquery-min-214'), null, true );
	wp_enqueue_script( 'script');
	// wp_register_script('formoid.min', get_template_directory_uri() . '/assets/formoid/formoid.min.js', array('jquery-min-214'), null, true );
	// wp_enqueue_script( 'formoid.min');
	//fancybox
	wp_register_script('jquery.fancybox-2.1.5', get_template_directory_uri() . '/assets/fancybox/jquery.fancybox-2.1.5.js', array('jquery-min-214'), null, false );
	wp_enqueue_script( 'jquery.fancybox-2.1.5');
	// fancybox
	wp_register_script('jquery-latest.min', 'http://code.jquery.com/jquery-latest.min.js', array('jquery-min-214'), null, false);
	wp_enqueue_script( 'jquery-latest.min');
	// wp_register_script('fancy-mousewheel', get_template_directory_uri() . '/assets/fancybox/jquery.mousewheel-3.0.6.pack.js', array('jquery-min-214'), '3.0.6', false);
	// wp_enqueue_script( 'fancy-mousewheel');
	wp_register_script('fancy-fancybox-js', get_template_directory_uri() . '/assets/fancybox/jquery.fancybox.js', array('jquery-min-214'), '2.1.5', false);
	wp_enqueue_script( 'fancy-fancybox-js');
	wp_register_script('fancy-buttons-js', get_template_directory_uri() . '/assets/fancybox/jquery.fancybox-buttons.js', array('fancy-buttons-css'), '1.0.5', false);
	wp_enqueue_script( 'fancy-buttons-js');
	wp_register_script('fancy-thumbs-js', get_template_directory_uri() . '/assets/fancybox/jquery.fancybox-thumbs.js', array('fancy-thumbs-css'), '1.0.7', false);
	wp_enqueue_script( 'fancy-thumbs-js');
	wp_register_script('fancy-media-js', get_template_directory_uri() . '/assets/fancybox/jquery.fancybox-media.js', array('fancy-thumbs-js'), '1.0.6', false);
	wp_enqueue_script( 'fancy-media-js');
	//swiper
	wp_register_script('swiper.min', get_template_directory_uri() . '/assets/swiper-slider/js/swiper.min.js', array('jquery-min-214'), null, false );
	wp_enqueue_script( 'swiper.min');
	wp_register_script('swiper.jquery.min', get_template_directory_uri() . '/assets/swiper-slider/js/swiper.jquery.min.js', array('jquery-min-214'), null, false );
	wp_enqueue_script( 'swiper.jquery.min');
	// scrollReveal
	wp_register_script('scrollReveal', get_template_directory_uri() . '/assets/scrollreveal/scrollreveal.min.js', array('jquery-min-214'), '0.0.1', false);
	wp_enqueue_script( 'scrollReveal');
	// nanzhul-script
	wp_register_script('nanzhul-script', get_template_directory_uri() . '/assets/nanzhul-theme/js/nanzhul-script.js', array('jquery-min-214'), '0.0.1', false);
	wp_enqueue_script( 'nanzhul-script');
	// maskedinput
	wp_register_script('maskedinput', get_template_directory_uri() . '/assets/nanzhul-theme/js/jquery.maskedinput.js', array('jquery-min-214'), '0.0.1', false);
	wp_enqueue_script( 'maskedinput');
}
add_action('wp_enqueue_scripts', 'nanzhul_scripts');

function mytheme_setup() {
	
	register_sidebar( array(
		'name' => 'Widget Footer Area',
		'id' => 'widget-footer-area',
		'description' => '',
		'before_widget' => '',
		'after_widget' => '',
	));
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function phone_number_format( $tel ) { 
	if ( $tel ) {
			$tel = str_replace( array( '-', '(', ')', ' ', '<big>', '</big>' ), '', trim( $tel ) );
	}
	return $tel;
}

function create_post_types() {
	/* Unset post_tag */
	register_taxonomy('post_tag', '', array());
    
    /* Section Landing Page */
	$labels = array(
		'name'               => 'Разделы LP',
		'singular_name'      => 'Раздел LP',
		'menu_name'          => 'Разделы LP',
		'name_admin_bar'     => 'Раздел',
		'add_new'            => 'Новый раздел',
		'add_new_item'       => 'Добавить новый раздел',
		'new_item'           => 'Новый раздел',
		'edit_item'          => 'Редактировать раздел',
		'view_item'          => 'Просмотреть раздел',
		'all_items'          => 'Все разделы',
		'search_items'       => 'Найти раздел',
		'not_found'          => 'Раздел не найден.',
		'not_found_in_trash' => 'No found in Trash.'
	);
	register_post_type( 'section_lp',        
		array(
            'labels' 			=> $labels,
            'public' 			=> false,
            'show_ui' 			=> true,
            'has_archive' 		=> false,
			'hierarchical'  	=> true,
            'menu_icon' 		=> 'dashicons-layout',
			'capability_type'   => 'post',			
			'menu_position'     => 5,
			'supports'          => array( 'title', 'revisions',  ) 
		)
    );  
}
add_action( 'init', 'create_post_types' );

function create_slide_types() {
	/* Unset post_tag */
	register_taxonomy('post_tag', '', array());
    
    /* Section Landing Page */
	$labels = array(
		'name'               => 'Слайды',
		'singular_name'      => 'Слайд',
		'menu_name'          => 'Слайды',
		'name_admin_bar'     => 'Слайд',
		'add_new'            => 'Новый слайд',
		'add_new_item'       => 'Добавить новый слайд',
		'new_item'           => 'Новый слайд',
		'edit_item'          => 'Редактировать слайд',
		'view_item'          => 'Просмотреть слайд',
		'all_items'          => 'Все слайды',
		'search_items'       => 'Найти слайд',
		'not_found'          => 'Слайд не найден.',
		'not_found_in_trash' => 'No found in Trash.'
	);
	register_post_type( 'sliders_block',        
		array(
            'labels' 			=> $labels,
            'public' 			=> false,
            'show_ui' 			=> true,
            'has_archive' 		=> false,
			'hierarchical'  	=> true,
            'menu_icon' 		=> 'dashicons-images-alt',
			'capability_type'   => 'post',			
			'menu_position'     => 5,
			'supports'          => array( 'title', 'revisions',  ) 
		)
    );  
}
add_action( 'init', 'create_slide_types' );

/**
 * Load TGM Plugins.
 */
require get_template_directory() . '/tgm/nanzhul.php';

?>