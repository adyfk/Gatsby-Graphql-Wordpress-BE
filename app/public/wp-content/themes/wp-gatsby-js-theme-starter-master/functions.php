<?php
add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('post-thumbnails');

function create_custom_portfolio_post_type()
{
  register_post_type(
    'portofolio',
    array(
      'labels' => array(
        'name' => __('Portofolio'),
        'singular_name' => __('Portofolio')
      ),
      'public' => true,
      'show_in_admin_bar' => true,
      'show_in_rest' => true
    )
  );
  add_post_type_support('portofolio', array('thumbnail', 'excerpt'));
}

add_action('init', 'create_custom_portfolio_post_type');
