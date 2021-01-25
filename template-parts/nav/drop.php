<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 11.5.0
 */

use Framework\Helper;

if ( ! Helper::has_drop_nav() ) {
	return;
}
?>

<div class="p-drop-nav">
	<div class="c-container">
		<?php
		Helper::get_template_part(
			'template-parts/nav/global',
			null,
			[
				'_vertical'          => false,
				'_gnav-hover-effect' => get_theme_mod( 'gnav-hover-effect' ),
			]
		);
		?>
	</div>
</div>
