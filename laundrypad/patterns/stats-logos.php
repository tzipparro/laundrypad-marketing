<?php
/**
 * Stats and logos pattern.
 *
 * @package LaundryPad
 */

$asset_base = LAUNDRYPAD_ASSETS_URI;

ob_start();
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"},"blockGap":"4rem"}},"layout":{"type":"constrained","contentSize":"1140px"},"className":"laundrypad-stats"} -->
<div class="wp-block-group laundrypad-stats" style="padding-top:5rem;padding-bottom:5rem"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"4rem"}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"2rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.5rem","lineHeight":"1.2","fontWeight":"700"}}} -->
<h2 style="font-size:2.5rem;line-height:1.2;font-weight:700"><?php esc_html_e( 'Metrics your residents feel.', LAUNDRYPAD_TEXT_DOMAIN ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'LaundryPad integrates into property tech stacks to eliminate friction, keep residents thrilled, and reduce onsite workload.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="#cta"><?php esc_html_e( 'Talk to sales', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"style":{"spacing":{"blockGap":"2rem"}}} -->
<div class="wp-block-columns"><!-- wp:column {"className":"stat-card"} -->
<div class="wp-block-column stat-card"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"3rem","fontWeight":"700"},"color":{"text":"var:preset|color|primary"}}} -->
<h3 class="has-primary-color has-text-color" style="font-size:3rem;font-weight:700"><?php esc_html_e( '98%', LAUNDRYPAD_TEXT_DOMAIN ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","textTransform":"uppercase","letterSpacing":"0.14em","fontWeight":"600"}},"textColor":"neutral-500"} -->
<p class="has-neutral-500-color has-text-color" style="font-size:1rem;text-transform:uppercase;letter-spacing:0.14em;font-weight:600"><?php esc_html_e( 'Resident retention', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"stat-card"} -->
<div class="wp-block-column stat-card"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"3rem","fontWeight":"700"},"color":{"text":"var:preset|color|secondary"}}} -->
<h3 class="has-secondary-color has-text-color" style="font-size:3rem;font-weight:700"><?php esc_html_e( '40%', LAUNDRYPAD_TEXT_DOMAIN ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","textTransform":"uppercase","letterSpacing":"0.14em","fontWeight":"600"}},"textColor":"neutral-500"} -->
<p class="has-neutral-500-color has-text-color" style="font-size:1rem;text-transform:uppercase;letter-spacing:0.14em;font-weight:600"><?php esc_html_e( 'Less onsite labor', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"2rem","margin":{"top":"2.5rem"}}}} -->
<div class="wp-block-columns" style="margin-top:2.5rem"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","gap":"2.5rem"},"className":"logo-grid"} -->
<div class="wp-block-group logo-grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $asset_base . 'img/logo-04.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $asset_base . 'img/logo-05.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $asset_base . 'img/logo-06.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $asset_base . 'img/logo-07.svg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php

return [
'title'       => __( 'Stats & logos', LAUNDRYPAD_TEXT_DOMAIN ),
'description' => __( 'KPIs with supporting logos.', LAUNDRYPAD_TEXT_DOMAIN ),
'categories'  => [ 'laundrypad-sections' ],
'content'     => ob_get_clean(),
];
