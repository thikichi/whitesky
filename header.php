<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no,address=no,email=no">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" type="application/rss+xml" title="RSSフィード">
  <?php if(is_admin_bar_showing()): ?>
    <style type="text/css">
      /* ログイン時に管理バーが表示されている時に読み込ませたいスタイルを定義 */
    </style>
  <?php endif; ?>
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- header -->
<!--==================================================-->

<header id="header" class="header">
  <div class="container">
    <div class="header-inner">
      <h1 class="header-title family-serif">
        <?php bloginfo( 'name' ); ?>
      </h1>
      <p class="header-subttl">
        <?php bloginfo( 'description' ); ?>
      </p>
    </div>
  </div>
</header><!-- /header -->
<nav id="navigation-pc" class="navigation">
  <div class="container">
    <?php
    wp_nav_menu(
      array(
        'theme_location'=>'GLOBAL NAVIGATION'
      )
    );
    ?>
  </div>
</nav><!-- .navigation -->
<nav id="navigation-sp"></nav>

<?php if( is_front_page() ): ?>
<?php else: ?>

  <?php
  // Get subvisual data from theme customizer.
  $theme_custom_img = get_theme_mod( 'mw_theme_option' );
  $subvisual_url = $theme_custom_img['image'][0];
  $theme_custom_txt = get_option( 'mw_theme_option' );
  $bg_position_top  = $theme_custom_txt['number'][0] ? $theme_custom_txt['number'][0] : 'center';
  ?>
  <div class="subvisual">
    <div class="subvisual-inner" style="background-image:url(<?php echo esc_url( $subvisual_url ); ?>);background-position: center <?php echo $bg_position_top; ?>%">
    </div>
  </div>

<?php endif; ?>