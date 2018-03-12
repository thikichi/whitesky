<?php
/*----------------------------------------------------------------------------------------------------*/
/* Custom Header */
/*----------------------------------------------------------------------------------------------------*/

// カスタムヘッダー画像を設置する
$custom_header_defaults = array(
  'default-image'          => get_stylesheet_directory_uri() . '/images/common/mv-default.jpg',
  'width'                  => 1000,
  'height'                 => 750,
  );
add_theme_support( 'custom-header', $custom_header_defaults );
