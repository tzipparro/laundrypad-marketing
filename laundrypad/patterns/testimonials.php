<?php
/**
 * Testimonials pattern.
 *
 * @package LaundryPad
 */

$asset_base = LAUNDRYPAD_ASSETS_URI;

ob_start();
?>
<!-- wp:group {"anchor":"testimonials","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"},"blockGap":"3rem"}},"layout":{"type":"constrained","contentSize":"1140px"},"className":"laundrypad-testimonials"} -->
<div id="testimonials" class="wp-block-group laundrypad-testimonials" style="padding-top:5rem;padding-bottom:5rem"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"2.5rem","lineHeight":"1.2","fontWeight":"700"}}} -->
<h2 style="font-size:2.5rem;line-height:1.2;font-weight:700"><?php esc_html_e( 'Loved by property teams and residents', LAUNDRYPAD_TEXT_DOMAIN ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"var:preset|color|neutral-700"},"spacing":{"maxWidth":"520px"}}} -->
<p class="has-neutral-700-color has-text-color" style="font-size:1.125rem;max-width:520px"><?php esc_html_e( 'Hear why operators trust LaundryPad to power their amenity stack.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"2rem"}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"1.75rem"}},"className":"testimonial-card"} -->
<div class="wp-block-column testimonial-card"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:1rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:600"><?php esc_html_e( 'Multifamily operator', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.4rem","fontWeight":"600","lineHeight":"1.6"}}} -->
<h3 style="font-size:1.4rem;font-weight:600;line-height:1.6"><?php esc_html_e( '“LaundryPad has become our most mentioned resident amenity.”', LAUNDRYPAD_TEXT_DOMAIN ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Onboarding was turnkey, communication is proactive, and our team spends zero time coordinating laundry pickups anymore.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","gap":"1rem","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":60,"height":60,"scale":"cover","className":"avatar"} -->
<figure class="wp-block-image avatar is-resized"><img src="<?php echo esc_url( $asset_base . 'img/avatar-01.svg' ); ?>" alt="" width="60" height="60"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"flex-start"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
<p style="font-weight:700"><?php esc_html_e( 'Maya Jensen', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm","textColor":"neutral-500"} -->
<p class="has-neutral-500-color has-text-color has-sm-font-size"><?php esc_html_e( 'Regional Property Manager, Broadstone', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.75rem"}},"className":"testimonial-card"} -->
<div class="wp-block-column testimonial-card"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:1rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:600"><?php esc_html_e( 'Resident', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.4rem","fontWeight":"600","lineHeight":"1.6"}}} -->
<h3 style="font-size:1.4rem;font-weight:600;line-height:1.6"><?php esc_html_e( '“Pickup reminders and locker codes are always right on time.”', LAUNDRYPAD_TEXT_DOMAIN ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'I can schedule my laundry around work, and it’s back in the locker before I get home. The app keeps me updated the whole time.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","gap":"1rem","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":60,"height":60,"scale":"cover","className":"avatar"} -->
<figure class="wp-block-image avatar is-resized"><img src="<?php echo esc_url( $asset_base . 'img/avatar-02.svg' ); ?>" alt="" width="60" height="60"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"flex-start"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
<p style="font-weight:700"><?php esc_html_e( 'Jordan Malik', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm","textColor":"neutral-500"} -->
<p class="has-neutral-500-color has-text-color has-sm-font-size"><?php esc_html_e( 'Resident, The Harper', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php

return [
'title'       => __( 'Testimonials', LAUNDRYPAD_TEXT_DOMAIN ),
'description' => __( 'Two-column testimonial layout.', LAUNDRYPAD_TEXT_DOMAIN ),
'categories'  => [ 'laundrypad-sections' ],
'content'     => ob_get_clean(),
];
