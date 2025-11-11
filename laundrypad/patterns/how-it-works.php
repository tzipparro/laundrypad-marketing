<?php
/**
 * How it works pattern.
 *
 * @package LaundryPad
 */

$asset_base = LAUNDRYPAD_ASSETS_URI;

ob_start();
?>
<!-- wp:group {"anchor":"how-it-works","style":{"spacing":{"padding":{"top":"5.5rem","bottom":"5.5rem"},"blockGap":"3.5rem"}},"layout":{"type":"constrained","contentSize":"1140px"},"className":"laundrypad-steps"} -->
<div id="how-it-works" class="wp-block-group laundrypad-steps" style="padding-top:5.5rem;padding-bottom:5.5rem"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.65rem","fontWeight":"700","lineHeight":"1.2"}}} -->
<h2 style="font-size:2.65rem;font-weight:700;line-height:1.2"><?php esc_html_e( 'How LaundryPad flows', LAUNDRYPAD_TEXT_DOMAIN ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"var:preset|color|neutral-700"},"spacing":{"maxWidth":"520px"}}} -->
<p class="has-neutral-700-color has-text-color" style="font-size:1.125rem;max-width:520px"><?php esc_html_e( 'From resident request to delivery confirmation, the LaundryPad platform orchestrates every touchpoint automatically.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"2.5rem"}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}},"className":"step-card"} -->
<div class="wp-block-column step-card"><!-- wp:group {"className":"step-badge","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"},"style":{"border":{"radius":"999px"},"color":{"background":"var:preset|color|primary-light"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.35rem","right":"1.35rem"}}}} -->
<div class="wp-block-group step-badge has-primary-light-background-color has-background" style="border-radius:999px;padding-top:0.75rem;padding-right:1.35rem;padding-bottom:0.75rem;padding-left:1.35rem"><!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontSize":"1.1rem","fontWeight":"700","letterSpacing":"0.08em"}}} -->
<p class="has-primary-color has-text-color" style="font-size:1.1rem;font-weight:700;letter-spacing:0.08em"><?php esc_html_e( 'Step 01', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.6rem","fontWeight":"700"}}} -->
<h3 style="font-size:1.6rem;font-weight:700"><?php esc_html_e( 'Residents schedule pickup', LAUNDRYPAD_TEXT_DOMAIN ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Branded mobile and web app capture preferences, detergents, and timing in seconds.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"step-illustration"} -->
<figure class="wp-block-image size-full step-illustration"><img src="<?php echo esc_url( $asset_base . 'img/step-01.svg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}},"className":"step-card"} -->
<div class="wp-block-column step-card"><!-- wp:group {"className":"step-badge","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"},"style":{"border":{"radius":"999px"},"color":{"background":"var:preset|color|secondary"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.35rem","right":"1.35rem"}}}} -->
<div class="wp-block-group step-badge has-secondary-background-color has-background" style="border-radius:999px;padding-top:0.75rem;padding-right:1.35rem;padding-bottom:0.75rem;padding-left:1.35rem"><!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"1.1rem","fontWeight":"700","letterSpacing":"0.08em"}}} -->
<p class="has-white-color has-text-color" style="font-size:1.1rem;font-weight:700;letter-spacing:0.08em"><?php esc_html_e( 'Step 02', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.6rem","fontWeight":"700"}}} -->
<h3 style="font-size:1.6rem;font-weight:700"><?php esc_html_e( 'We handle cleaning & logistics', LAUNDRYPAD_TEXT_DOMAIN ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Courier routing, partner cleaners, and locker assignments are automated with smart monitoring.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"step-illustration"} -->
<figure class="wp-block-image size-full step-illustration"><img src="<?php echo esc_url( $asset_base . 'img/step-02.svg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}},"className":"step-card"} -->
<div class="wp-block-column step-card"><!-- wp:group {"className":"step-badge","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"},"style":{"border":{"radius":"999px"},"color":{"background":"var:preset|color|accent"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.35rem","right":"1.35rem"}}}} -->
<div class="wp-block-group step-badge has-accent-background-color has-background" style="border-radius:999px;padding-top:0.75rem;padding-right:1.35rem;padding-bottom:0.75rem;padding-left:1.35rem"><!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"1.1rem","fontWeight":"700","letterSpacing":"0.08em"}}} -->
<p class="has-white-color has-text-color" style="font-size:1.1rem;font-weight:700;letter-spacing:0.08em"><?php esc_html_e( 'Step 03', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.6rem","fontWeight":"700"}}} -->
<h3 style="font-size:1.6rem;font-weight:700"><?php esc_html_e( 'Delivery confirmed & rated', LAUNDRYPAD_TEXT_DOMAIN ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Residents receive delivery ETAs, locker unlock codes, and satisfaction surveys instantly.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"step-illustration"} -->
<figure class="wp-block-image size-full step-illustration"><img src="<?php echo esc_url( $asset_base . 'img/step-03.svg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php

return [
'title'       => __( 'How it works', LAUNDRYPAD_TEXT_DOMAIN ),
'description' => __( 'Three-step process cards.', LAUNDRYPAD_TEXT_DOMAIN ),
'categories'  => [ 'laundrypad-sections' ],
'content'     => ob_get_clean(),
];
