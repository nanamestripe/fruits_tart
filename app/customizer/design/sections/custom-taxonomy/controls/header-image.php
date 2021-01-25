<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 11.5.3
 */

use Inc2734\WP_Customizer_Framework\Framework;
use Framework\Helper;

$taxonomies = Helper::get_taxonomies( [ 'hierarchical' => true ] );

foreach ( $taxonomies as $taxonomy ) {
	$terms = Helper::get_terms( $taxonomy );

	foreach ( $terms as $_term ) {
		Framework::control(
			'image',
			$_term->taxonomy . '-' . $_term->term_id . '-header-image',
			[
				'label'    => __( 'Featured Image', 'snow-monkey' ),
				'priority' => 100,
			]
		);
	}
}

if ( ! is_customize_preview() ) {
	return;
}

$panel = Framework::get_panel( 'design' );

foreach ( $taxonomies as $taxonomy ) {
	$terms = Helper::get_terms( $taxonomy );

	foreach ( $terms as $_term ) {
		$section = Framework::get_section( 'design-' . $_term->taxonomy . '-' . $_term->term_id );
		$control = Framework::get_control( $_term->taxonomy . '-' . $_term->term_id . '-header-image' );
		$control->join( $section )->join( $panel );
	}
}
