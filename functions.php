<?php

function healthyfood_assets() {
    wp_enqueue_style( 'maincss', get_template_directory_uri(  ) . '/assets/css/index.css');
    wp_enqueue_style( 'fa', get_template_directory_uri(  ) . '/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'fa', get_template_directory_uri(  ) . '/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'output', get_template_directory_uri() . '/../../../dist/output.css');
    wp_enqueue_script( 'mainscript', get_template_directory_uri() . '/assets/js/index.js', true);
}
add_action( 'wp_enqueue_scripts', 'healthyfood_assets' );

show_admin_bar( true );

register_nav_menus(
	array(
		'head_menu' => 'Шапка сайта', // id области => Название области
	)
);