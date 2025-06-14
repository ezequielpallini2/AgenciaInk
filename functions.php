<?php
function landing_lader_enqueue_assets() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
}
add_action('wp_enqueue_scripts', 'landing_lader_enqueue_assets');
