<?php
/**
 * Name: Simple
 *
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 9.0.0
 */

use Framework\Helper;

$classes = Helper::get_header_classes();
?>

<header class="<?php echo esc_attr( join( ' ', $classes ) ); ?>" role="banner">
	<?php
	if ( get_theme_mod( 'infobar-content' ) ) {
		Helper::get_template_part( 'template-parts/common/infobar' );
	}
	?>

	<div class="l-header__content">
		<?php Helper::get_template_part( 'template-parts/header/simple' ); ?>
	</div>
</header>
