<?php
/*----------------------------------------------------------------------------------------------------*/
/* Theme Customizer */
/*----------------------------------------------------------------------------------------------------*/

/**
 * Theme Customizer
*/
function my_theme_customize_register( $wp_customize ) {

  // Section
  $wp_customize->add_section( 'mw_theme_option_image', array(
    'title' => '下層ページの共通画像',
    'priority' => 200,
    'description' => '画像をアップロードしてください。',
  ));

  // Setting
  $wp_customize->add_setting( 'mw_theme_option[image][0]' ); //設定項目を追加

  // Controle
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mw_theme_option_image', array(
    'settings' => 'mw_theme_option[image][0]',
    'label' => '画像',
    'section' => 'mw_theme_option_image',
    'description' => '画像を設定してください。',
  )));

  // セッティング
  $wp_customize->add_setting( 'mw_theme_option[number][0]', array(
   'default'   => '',
   'type'      => 'option',
   'transport' => 'postMessage',
  ));
  // コントロール
  $wp_customize->add_control( 'mw_theme_option_text_1', array(
   'settings'  => 'mw_theme_option[number][0]',
   'label'     => '画像の縦位置( %指定 )',
   'section'   => 'mw_theme_option_image',
   'type'      => 'number',
  ));

}
add_action( 'customize_register', 'my_theme_customize_register' );


