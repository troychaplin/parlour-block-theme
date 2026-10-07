<?php
/**
 * Parlour Block Theme Functions
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include our bundled autoload if not loaded globally.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

// Instantiate our modules.
$parlour_modules = array(
	new Parlour_Block_Theme\Block_Functions(),
	new Parlour_Block_Theme\Enqueues(),
	new Parlour_Block_Theme\Post_Types(),
	new Parlour_Block_Theme\Register_Blocks(),
);

foreach ( $parlour_modules as $parlour_module ) {
	$parlour_module->init();
}
