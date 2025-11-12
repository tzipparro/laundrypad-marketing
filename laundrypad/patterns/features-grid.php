<?php
/**
 * Features grid pattern.
 *
 * @package LaundryPad
 */

$asset_base = LAUNDRYPAD_ASSETS_URI;

ob_start();
?>
<!-- wp:group {"anchor":"features","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"},"margin":{"top":"0","bottom":"0"},"blockGap":"3.5rem"}},"layout":{"type":"constrained","contentSize":"1140px"},"className":"laundrypad-features"} -->
<div id="features" class="wp-block-group laundrypad-features" style="padding-top:5rem;padding-bottom:5rem"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"flex-start","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"700"},"color":{"text":"var:preset|color|primary"}}} -->
<h2 class="has-primary-color has-text-color" style="font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:700"><?php esc_html_e( 'Why LaundryPad', LAUNDRYPAD_TEXT_DOMAIN ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.75rem","lineHeight":"1.2","fontWeight":"700"}}} -->
<h2 style="font-size:2.75rem;line-height:1.2;font-weight:700"><?php esc_html_e( 'Resident-loved, operator approved.', LAUNDRYPAD_TEXT_DOMAIN ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.2rem"}},"textColor":"neutral-700"} -->
<p class="has-neutral-700-color has-text-color" style="font-size:1.2rem"><?php esc_html_e( 'Automated dispatching, smart lockers, and proactive support combine to deliver a 5-star experience every cycle.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"2rem"}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}},"className":"feature-card"} -->
<div class="wp-block-column feature-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"feature-icon"} -->
<figure class="wp-block-image size-full feature-icon"><img src="<?php echo esc_url( $asset_base . 'img/icon-routing.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} -->
<h3 style="font-size:1.5rem;font-weight:700"><?php esc_html_e( 'Optimized pickup windows', LAUNDRYPAD_TEXT_DOMAIN ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Dynamic routing auto-adjusts courier schedules and notifies residents instantly.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"feature-link"} -->
<p class="feature-link"><a href="#how-it-works"><?php esc_html_e( 'Learn more', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}},"className":"feature-card"} -->
<div class="wp-block-column feature-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"feature-icon"} -->
<figure class="wp-block-image size-full feature-icon"><img src="<?php echo esc_url( $asset_base . 'img/icon-locker.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} -->
<h3 style="font-size:1.5rem;font-weight:700"><?php esc_html_e( 'Smart locker workflows', LAUNDRYPAD_TEXT_DOMAIN ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Secure drop zones with resident SMS unlocks and live status updates.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"feature-link"} -->
<p class="feature-link"><a href="#faq"><?php esc_html_e( 'See details', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}},"className":"feature-card"} -->
<div class="wp-block-column feature-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"feature-icon"} -->
<figure class="wp-block-image size-full feature-icon"><img src="<?php echo esc_url( $asset_base . 'img/icon-support.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} -->
<h3 style="font-size:1.5rem;font-weight:700"><?php esc_html_e( 'White-glove resident care', LAUNDRYPAD_TEXT_DOMAIN ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '24/7 chat and bilingual support keeps satisfaction high without burdening your team.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"feature-link"} -->
<p class="feature-link"><a href="#testimonials"><?php esc_html_e( 'Hear from partners', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}},"className":"feature-card"} -->
<div class="wp-block-column feature-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"feature-icon"} -->
<figure class="wp-block-image size-full feature-icon"><img src="<?php echo esc_url( $asset_base . 'img/icon-analytics.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} -->
<h3 style="font-size:1.5rem;font-weight:700"><?php esc_html_e( 'Analytics that drive NOI', LAUNDRYPAD_TEXT_DOMAIN ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Real-time dashboards share utilization, satisfaction, and revenue metrics.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"feature-link"} -->
<p class="feature-link"><a href="#pricing"><?php esc_html_e( 'Explore plans', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php

return [
'title'       => __( 'Features grid', LAUNDRYPAD_TEXT_DOMAIN ),
'description' => __( 'Four-column feature grid with icons.', LAUNDRYPAD_TEXT_DOMAIN ),
'categories'  => [ 'laundrypad-sections' ],
'content'     => ob_get_clean(),
];
