<?php
/**
 * Hero pattern.
 *
 * @package LaundryPad
 */

$asset_base = LAUNDRYPAD_ASSETS_URI;

ob_start();
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"32px"},"color":{"gradient":"var:preset|gradient|hero"},"boxShadow":"var(--wp--custom--laundrypad--shadows--lg)"},"layout":{"type":"constrained"},"className":"laundrypad-hero"} -->
<div class="wp-block-group alignwide laundrypad-hero" style="border-radius:32px;padding-top:6rem;padding-bottom:6rem"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","letterSpacing":"0.24em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|white"},"spacing":{"margin":{"bottom":"0.5rem"}}}} -->
<p class="has-white-color has-text-color" style="margin-bottom:0.5rem;font-size:0.875rem;letter-spacing:0.24em;text-transform:uppercase;font-weight:600"><?php esc_html_e( 'Smart laundry logistics', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"white","style":{"typography":{"fontSize":"3.25rem","lineHeight":"1.1","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
<h2 class="has-white-color has-text-color" style="margin-bottom:1.25rem;font-size:3.25rem;line-height:1.1;font-weight:700"><?php esc_html_e( 'Laundry pickup &amp; delivery that feels automatic.', LAUNDRYPAD_TEXT_DOMAIN ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#F4F5FF"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
<p class="has-white-color has-text-color" style="margin-bottom:2rem;font-size:1.25rem"><?php esc_html_e( 'LaundryPad routes couriers, optimizes loads, and keeps your residents on schedule with a frictionless platform experience.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.85rem","bottom":"0.85rem","left":"1.75rem","right":"1.75rem"}},"typography":{"fontWeight":"700"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button" href="#pricing"><?php esc_html_e( 'Get started', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"primary-dark","textColor":"white","className":"is-style-outline","style":{"border":{"radius":"999px","width":"2px"},"spacing":{"padding":{"top":"0.85rem","bottom":"0.85rem","left":"1.75rem","right":"1.75rem"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-primary-dark-background-color has-text-color has-background wp-element-button" href="#how-it-works"><?php esc_html_e( 'See how it works', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"2.5rem"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","gap":"1.25rem"}} -->
<div class="wp-block-group" style="margin-top:2.5rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","textTransform":"uppercase","letterSpacing":"0.16em","fontWeight":"600"},"color":{"text":"#D9DCFF"}}} -->
<p class="has-text-color" style="color:#d9dcff;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.16em;font-weight:600"><?php esc_html_e( 'Trusted by', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|white"},"typography":{"fontSize":"1rem","lineHeight":"1.6"}}} -->
<p class="has-white-color has-text-color" style="font-size:1rem;line-height:1.6"><?php esc_html_e( '200+ multifamily partners', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","gap":"1.5rem","verticalAlignment":"center"},"className":"hero-logo-row"} -->
<div class="wp-block-group hero-logo-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $asset_base . 'img/logo-01.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $asset_base . 'img/logo-02.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $asset_base . 'img/logo-03.svg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"left":"2.5rem"}}}} -->
<div class="wp-block-column" style="flex-basis:50%;padding-left:2.5rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hero-illustration"} -->
<figure class="wp-block-image size-full hero-illustration"><img src="<?php echo esc_url( $asset_base . 'img/hero-illustration.svg' ); ?>" alt="<?php esc_attr_e( 'Courier carrying laundry bags', LAUNDRYPAD_TEXT_DOMAIN ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php

return [
'title'       => __( 'Hero', LAUNDRYPAD_TEXT_DOMAIN ),
'description' => __( 'Hero section with badges, heading, and illustration.', LAUNDRYPAD_TEXT_DOMAIN ),
'categories'  => [ 'laundrypad-sections' ],
'content'     => ob_get_clean(),
];
