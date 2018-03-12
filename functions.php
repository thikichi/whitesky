<?php

// include css
require_once 'functions/include-css.php';
// include js
require_once 'functions/include-js.php';
// Navigation
require_once 'functions/custom-menu.php';
// Images
require_once 'functions/add-image-size.php';
// Widget
require_once 'functions/widget.php';
// Custom Header
require_once 'functions/custom-header.php';
// Theme Customizer
require_once 'functions/customizer.php';


/**
 * Archive title
*/
function get_mw_archive_title() {
  $title_name = '';
  if(is_category()) {
    $title_name = single_cat_title('', false);
  } else if(is_tag()) {
    $title_name = single_tag_title('', false);
  } else if(is_tax()) {
    $title_name = single_term_title( '' , false );
  } elseif(is_year() || is_month() || is_date()) {
    $title_name = get_the_archive_title();
  } elseif(is_archive()) {
    $title_name = post_type_archive_title('',false);
  } elseif(is_home()) {
    $title_name = get_the_title();
  }
  return $title_name;
}