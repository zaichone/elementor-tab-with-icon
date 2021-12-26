<?php
/**
 * Plugin Name: Elementor Tab with Icon Widget
 * Description: Auto embed any embbedable content from external URLs into Elementor.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-tab-with-icon-widget
 *
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register Tab with Icon Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_tab_with_icon_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/tab-with-icon-widget.php' );

	$widgets_manager->register( new \Tab_With_Icon_Widget() );

}
add_action( 'elementor/widgets/register', 'register_tab_with_icon_widget' );