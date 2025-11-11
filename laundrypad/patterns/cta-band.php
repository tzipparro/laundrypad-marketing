<?php
/**
 * CTA band pattern.
 *
 * @package LaundryPad
 */

$asset_base = LAUNDRYPAD_ASSETS_URI;

ob_start();
?>
<!-- wp:group {"anchor":"cta","align":"wide","style":{"spacing":{"padding":{"top":"4.5rem","bottom":"4.5rem","left":"4rem","right":"4rem"}},"border":{"radius":"28px"},"color":{"gradient":"linear-gradient(120deg,rgba(79,70,229,1) 0%,rgba(14,165,233,1) 48%,rgba(249,115,22,1) 100%)"},"boxShadow":"var(--wp--custom--laundrypad--shadows--md)"},"className":"laundrypad-cta"} -->
<div id="cta" class="wp-block-group alignwide laundrypad-cta" style="border-radius:28px;padding-top:4.5rem;padding-right:4rem;padding-bottom:4.5rem;padding-left:4rem"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"#D9DCFF"}}} -->
<p class="has-text-color" style="color:#d9dcff;font-size:0.95rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600"><?php esc_html_e( 'Ready to upgrade laundry?', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.4rem","lineHeight":"1.2","fontWeight":"700"},"color":{"text":"var:preset|color|white"}}} -->
<h2 class="has-white-color has-text-color" style="font-size:2.4rem;line-height:1.2;font-weight:700"><?php esc_html_e( 'Let’s bring LaundryPad to your residents.', LAUNDRYPAD_TEXT_DOMAIN ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem"},"color":{"text":"#F4F5FF"}}} -->
<p class="has-text-color" style="color:#f4f5ff;font-size:1.1rem"><?php esc_html_e( 'Book a strategy session with our partnerships team.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%","style":{"spacing":{"blockGap":"1.25rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"2rem","right":"2rem"}},"typography":{"fontWeight":"700"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button" href="mailto:hello@laundrypad.com"><?php esc_html_e( 'Book a demo', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","backgroundColor":"primary-dark","textColor":"white","style":{"border":{"radius":"999px","width":"2px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"2rem","right":"2rem"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-primary-dark-background-color has-text-color has-background wp-element-button" href="tel:+18885551212"><?php esc_html_e( 'Call sales', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php

return [
'title'       => __( 'CTA band', LAUNDRYPAD_TEXT_DOMAIN ),
'description' => __( 'Gradient CTA banner with buttons.', LAUNDRYPAD_TEXT_DOMAIN ),
'categories'  => [ 'laundrypad-sections' ],
'content'     => ob_get_clean(),
];
