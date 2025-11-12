<?php
/**
 * Enqueue scripts and styles.
 *
 * @package LaundryPad
 */

if ( ! function_exists( 'laundrypad_enqueue_assets' ) ) {
/**
 * Register theme assets.
 */
function laundrypad_enqueue_assets(): void {
$asset_file = LAUNDRYPAD_PATH . 'build/index.asset.php';

if ( file_exists( $asset_file ) ) {
$assets = include $asset_file;

wp_enqueue_style(
'laundrypad-style',
LAUNDRYPAD_BUILD_URI . 'style-index.css',
[],
LAUNDRYPAD_VERSION
);

wp_enqueue_script(
'laundrypad-frontend',
LAUNDRYPAD_BUILD_URI . 'index.js',
$assets['dependencies'] ?? [],
$assets['version'] ?? LAUNDRYPAD_VERSION,
true
);
}

wp_enqueue_style( 'laundrypad-fonts', LAUNDRYPAD_ASSETS_URI . 'css/fonts.css', [], LAUNDRYPAD_VERSION );
}
}
add_action( 'wp_enqueue_scripts', 'laundrypad_enqueue_assets' );

if ( ! function_exists( 'laundrypad_editor_assets' ) ) {
/**
 * Editor scripts and styles.
 */
function laundrypad_editor_assets(): void {
$editor_asset = LAUNDRYPAD_PATH . 'build/editor.asset.php';

if ( file_exists( $editor_asset ) ) {
$assets = include $editor_asset;
wp_enqueue_style(
'laundrypad-editor-style',
LAUNDRYPAD_BUILD_URI . 'editor.css',
[ 'wp-edit-blocks' ],
$assets['version'] ?? LAUNDRYPAD_VERSION
);
wp_enqueue_script(
'laundrypad-editor-script',
LAUNDRYPAD_BUILD_URI . 'editor.js',
$assets['dependencies'] ?? [],
$assets['version'] ?? LAUNDRYPAD_VERSION,
true
);
}
wp_enqueue_style( 'laundrypad-fonts', LAUNDRYPAD_ASSETS_URI . 'css/fonts.css', [], LAUNDRYPAD_VERSION );
}
}
add_action( 'enqueue_block_editor_assets', 'laundrypad_editor_assets' );
