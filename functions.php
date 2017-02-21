<?php
function wptuts_scripts_basic()
{
  wp_register_script( 'jquery', get_template_directory_uri() . 'js/jquery-1.11.3.min.js' );
  wp_register_script( 'bootstrap', get_template_directory_uri() . 'js/bootstrap.min.js' );
  wp_register_script( 'animsition', get_template_directory_uri() . 'js/animsition.min.js' );
  wp_register_script( 'photoswipe', get_template_directory_uri() . 'js/photoswipe.min.js' );
  wp_register_script( 'photoswipe-ui', get_template_directory_uri() . 'js/photoswipe-ui-default.min.js' );
  wp_register_script( 'custom-scrollbar', get_template_directory_uri() . 'js/jquery.mCustomScrollbar.concat.min.js' );
  wp_register_script( 'sketch', get_template_directory_uri() . 'js/sketch.js' );
  wp_register_script( 'script', get_template_directory_uri() . 'js/script_dos.js' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );
?>
