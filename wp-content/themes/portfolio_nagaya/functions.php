<?php

function add_scripts() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), "3.6.0", true);
  wp_enqueue_script('mainJs', get_theme_file_uri('/assets/js/index.js'), array('jquery'), true);
  wp_enqueue_style('resetStyle', get_theme_file_uri('/assets/css/sanitize.css'), array());
  wp_enqueue_style('mainStyle', get_theme_file_uri('/assets/css/style.css'), array());
}

add_action('wp_enqueue_scripts', 'add_scripts');

function add_theme_setup() {
  register_nav_menus(
    array(
      'global' => 'グローバル',
    )
  );
}

add_action('after_setup_theme', 'add_theme_setup');

function hooks() {
  add_action('wp_enqueue_scripts', 'add_scripts');
  add_action('after_setup_theme', 'add_theme_setup');
}

function init() {
  hooks();
}

init();