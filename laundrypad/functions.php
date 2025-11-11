<?php
/**
 * LaundryPad theme bootstrap.
 *
 * @package LaundryPad
 */

define( 'LAUNDRYPAD_VERSION', '1.0.0' );

define( 'LAUNDRYPAD_PATH', trailingslashit( get_template_directory() ) );
define( 'LAUNDRYPAD_URI', trailingslashit( get_template_directory_uri() ) );

define( 'LAUNDRYPAD_BUILD_URI', LAUNDRYPAD_URI . 'build/' );
define( 'LAUNDRYPAD_BUILD_PATH', LAUNDRYPAD_PATH . 'build/' );

define( 'LAUNDRYPAD_ASSETS_URI', LAUNDRYPAD_URI . 'assets/' );

define( 'LAUNDRYPAD_TEXT_DOMAIN', 'laundrypad' );

require_once LAUNDRYPAD_PATH . 'inc/setup.php';
require_once LAUNDRYPAD_PATH . 'inc/assets.php';
require_once LAUNDRYPAD_PATH . 'inc/patterns.php';
require_once LAUNDRYPAD_PATH . 'inc/schema.php';
require_once LAUNDRYPAD_PATH . 'inc/options.php';
