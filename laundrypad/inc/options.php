<?php
/**
 * Optional ACF options page registration.
 *
 * @package LaundryPad
 */

if ( ! function_exists( 'laundrypad_register_options_page' ) ) {
/**
 * Adds an ACF options page if ACF is active.
 */
function laundrypad_register_options_page(): void {
if ( function_exists( 'acf_add_options_page' ) ) {
acf_add_options_page(
[
'page_title' => __( 'Site Settings', LAUNDRYPAD_TEXT_DOMAIN ),
'menu_title' => __( 'Site Settings', LAUNDRYPAD_TEXT_DOMAIN ),
'menu_slug'  => 'laundrypad-site-settings',
'capability' => 'manage_options',
'redirect'   => false,
]
);
}
}
}
add_action( 'after_setup_theme', 'laundrypad_register_options_page' );
