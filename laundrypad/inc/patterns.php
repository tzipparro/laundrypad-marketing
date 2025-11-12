<?php
/**
 * Block patterns registration.
 *
 * @package LaundryPad
 */

if ( ! function_exists( 'laundrypad_register_patterns' ) ) {
/**
 * Registers custom block pattern categories and includes pattern files.
 */
function laundrypad_register_patterns(): void {
register_block_pattern_category(
'laundrypad-sections',
[
'label' => __( 'LaundryPad Sections', LAUNDRYPAD_TEXT_DOMAIN ),
]
);

$patterns = [
'hero',
'features-grid',
'how-it-works',
'stats-logos',
'testimonials',
'pricing',
'faq',
'cta-band',
];

foreach ( $patterns as $pattern ) {
register_block_pattern(
'laundrypad/' . $pattern,
include LAUNDRYPAD_PATH . 'patterns/' . $pattern . '.php'
);
}
}
}
add_action( 'init', 'laundrypad_register_patterns' );
