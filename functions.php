<?php
function ccsunny_files()
{
  wp_enqueue_style('ccsunny_main_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'ccsunny_files');