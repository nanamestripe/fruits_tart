<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 */

use Framework\Helper;
use Inc2734\WP_Customizer_Framework\Style;

if ( ! Helper::is_ie() ) {
	return;
}

$accent_color = get_theme_mod( 'accent-color' );
if ( $accent_color ) {
	Style::register(
		'.smb-section__subtitle',
		'color: ' . $accent_color
	);

	Style::register(
		'.smb-section__title::after',
		'background-color: ' . $accent_color
	);
}

Style::extend( 'entry-content', [ '.smb-section__body' ] );
