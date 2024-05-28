<?php 
add_action("wp_enqueue_scripts", function() {

    wp_enqueue_style("reset", get_template_directory_uri() . "/assets/styles/reset.css");
    wp_enqueue_style("style", get_template_directory_uri() . "/assets/styles/style.css");
    wp_enqueue_style("slick", get_template_directory_uri() . "/assets/styles/slick.css");
    wp_enqueue_style("fancybox", get_template_directory_uri() . "/assets/styles/jquery.fancybox.css");
    wp_enqueue_style("animate", get_template_directory_uri() . "/assets/styles/animate.min.css");

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script("slick", get_template_directory_uri() . "/assets/scripts/slick.min.js", array('jquery'), "null", true);
    wp_enqueue_script("wow", get_template_directory_uri() . "/assets/scripts/wow.min.js", array('jquery'), "null", true);
    wp_enqueue_script("fancybox", get_template_directory_uri() . "/assets/scripts/jquery.fancybox.min.js", array('jquery'), "null", true);
    wp_enqueue_script("main", get_template_directory_uri() . "/assets/scripts/main.js", array('jquery'), "null", true);
});

add_action( 'after_setup_theme', function(){
    add_theme_support("custom-logo");
    add_theme_support("title-tag");
    add_theme_support( 'post-thumbnails' );
});

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

register_nav_menus(array(
  "head_menu" => "Header menu",
  "footer_menu" => "Footer menu"
));