<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 11.7.3
 *
 * renamed: app/customizer/layout/sections/woocommerce-archive-page/controls/layout.php
 */

use Inc2734\WP_Customizer_Framework\Framework;
use Framework\Helper;

Framework::control(
	'select',
	'woocommerce-archive-page-layout',
	[
		'label'   => __( 'WooCommerce archive page layout', 'snow-monkey' ),
		'default' => 'right-sidebar',
		'choices' => is_customize_preview() ? Helper::get_wrapper_templates() : [],
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$panel   = Framework::get_panel( 'design' );
$section = Framework::get_section( 'design-woocommerce-archive-page' );
$control = Framework::get_control( 'woocommerce-archive-page-layout' );
$control->join( $section )->join( $panel );
