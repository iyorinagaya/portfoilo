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
  add_theme_support('post-thumbnails');
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

function subLoop($number) {
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => $number,
    'paged'=>get_query_var('paged'),
  );

  $myQuery = new WP_Query($args);

  return $myQuery;
}

function pagination($pages = '', $range = 2) {
  $showItems = ($range * 2) + 1;

  global $paged;
  if(empty($paged)) $paged = 1;

  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;

    if(!$pages) {
      $pages = 1;
    }
  }

  if(1 != $pages) {
    echo "<div class=\"pagerWrap\">";
    echo "<ul class=\"pageNav\">";

    if($paged > 1) echo "<li><a href=\"".get_pagenum_link($paged - 1)."\">&lt;</a></li>";

    for ($i = 1; $i <= $pages; $i ++) {
      if (1 != $pages &&(!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showItems )) {
        echo ($paged == $i)? "<li class=\"index current\"><a href=\"#\">".$i."</a></li>":
        "<li class=\"index\"><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
      }
    }

    if ($paged < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\">&gt;</a></li>";

    echo "</ul>\n";
    echo "</div>\n";
  }
}

function init() {
  hooks();
}

init();