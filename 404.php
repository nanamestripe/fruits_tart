<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 9.0.0
 */

use Framework\Controller\Controller;

$layout = get_theme_mod( 'page-layout' );
$layout = $layout ? $layout : get_theme_mod( 'singular-post-layout' );

Controller::layout( $layout );
Controller::render( '404' );
