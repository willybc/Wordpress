<?php
add_theme_support('post-thumbnails');

function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __('Menu Superior'),
      'bottom-menu' => __('Menu Footer')
    )
  );
}
add_action('init', 'register_my_menus');

function wmpudev_enqueue_icon_stylesheet () {
	wp_register_style ( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_style ( 'fontawesome');
}
add_action ( 'wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet');
?>
