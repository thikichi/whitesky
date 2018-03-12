<?php
/*----------------------------------------------------------------------------------------------------*/
/* サイトに読み込むCSSファイルを指定 */
/*----------------------------------------------------------------------------------------------------*/

function wp_enqueue_css() {

  /*
   * reset.css
  */
  wp_enqueue_style(
    'reset',
    get_stylesheet_directory_uri() . '/css/reset.css'
  );

  /*
   * bootstrap-grid.min.css
  */
  wp_enqueue_style(
    'bootstrap',
    get_template_directory_uri() . '/css/bootstrap.min.css'
  );

  /*
   * bootstrap-theme.css
  */
  wp_enqueue_style(
    'bootstrap',
    get_template_directory_uri() . '/css/bootstrap-theme.css'
  );

  /*
   * module.css
  */
  wp_enqueue_style(
    'module',
    get_stylesheet_directory_uri() . '/css/module.css'
  );

  /*
   * font-awesome
  */
  // wp_enqueue_style(
  //   'font-awesome',
  //   get_stylesheet_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.min.css'
  // );
  wp_enqueue_style(
    'font-awesome',
    get_stylesheet_directory_uri() . '/fonts/fontawesome/css/fontawesome-all.min.css'
  );

  /*
   * slicknav
  */
  wp_enqueue_style(
    'slicknav',
    get_stylesheet_directory_uri() . '/vendor/slicknav/slicknav.css'
  );

  /*
   * slick
  */
  wp_enqueue_style(
    'slick',
    get_stylesheet_directory_uri() . '/vendor/slick/slick.css'
  );

  /*
   * slick-theme
  */
  wp_enqueue_style(
    'slick-theme',
    get_stylesheet_directory_uri() . '/vendor/slick/slick-theme.css'
  );

  /*
   * style.css
  */
  wp_enqueue_style(
    'my-common',
    get_stylesheet_directory_uri() . '/css/common.css'
  );

}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_css' );