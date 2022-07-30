<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Cec
 * @since 0.1
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '0.1' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
    wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );






function my_targeted_link_rel($rel_values) {
    return 'noopener';
}

add_filter('wp_targeted_link_rel', 'my_targeted_link_rel', 999);




function im_formatter($content) {
    $replace = array(" noreferrer" => "" ,"noreferrer " => "");
    $new_content = strtr($content, $replace);
    return $new_content;
}

add_filter('the_content', 'im_formatter', 999);




function credits_shortcode() {
  $devBy = 'Criação <a href="https://arriminum.com" rel="noopener">arriminum.com</a>';

  echo '<div class="devby-cont">';
  echo $devBy;
  echo '</div>';
} 

add_shortcode('arm_credits', 'credits_shortcode');



