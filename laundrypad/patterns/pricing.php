<?php
/**
 * Pricing pattern.
 *
 * @package LaundryPad
 */

ob_start();
?>
<!-- wp:group {"anchor":"pricing","style":{"spacing":{"padding":{"top":"5.5rem","bottom":"5.5rem"},"blockGap":"2.75rem"}},"layout":{"type":"constrained","contentSize":"1140px"},"className":"laundrypad-pricing"} -->
<div id="pricing" class="wp-block-group laundrypad-pricing" style="padding-top:5.5rem;padding-bottom:5.5rem"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"2.5rem","lineHeight":"1.2","fontWeight":"700"}}} -->
<h2 style="font-size:2.5rem;line-height:1.2;font-weight:700"><?php esc_html_e( 'Flexible plans for every community', LAUNDRYPAD_TEXT_DOMAIN ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"var:preset|color|neutral-700"},"spacing":{"maxWidth":"480px"}}} -->
<p class="has-neutral-700-color has-text-color" style="font-size:1.125rem;max-width:480px"><?php esc_html_e( 'Switch between monthly or annual billing anytime. Discounts applied automatically when you pay yearly.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pricing-toggle","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"},"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0.5rem","right":"0.5rem"}},"border":{"radius":"999px"},"color":{"background":"var:preset|color|neutral-100"}}} -->
<div class="wp-block-group pricing-toggle has-neutral-100-background-color has-background" style="border-radius:999px;padding-top:0.5rem;padding-right:0.5rem;padding-bottom:0.5rem;padding-left:0.5rem" data-pricing-toggle="monthly"><button type="button" class="toggle-option is-active" data-plan="monthly"><?php esc_html_e( 'Monthly billing', LAUNDRYPAD_TEXT_DOMAIN ); ?></button><button type="button" class="toggle-option" data-plan="annual"><?php esc_html_e( 'Annual billing (save 15%)', LAUNDRYPAD_TEXT_DOMAIN ); ?></button></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"2rem"}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"1.75rem"}},"className":"pricing-card"} -->
<div class="wp-block-column pricing-card" data-plan-price="monthly" data-monthly-price="$299" data-annual-price="$269"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:0.95rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600"><?php esc_html_e( 'Essential', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2.35rem","fontWeight":"700"}}} -->
<h3 style="font-size:2.35rem;font-weight:700"><span class="price-value">$299</span><span class="price-frequency"><?php esc_html_e( '/month', LAUNDRYPAD_TEXT_DOMAIN ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"var:preset|color|neutral-700"}}} -->
<p class="has-neutral-700-color has-text-color" style="font-size:1rem"><?php esc_html_e( 'Perfect for boutique properties launching premium laundry service.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"pricing-features"} -->
<ul class="pricing-features"><!-- wp:list-item -->
<li><?php esc_html_e( 'Up to 150 active residents', LAUNDRYPAD_TEXT_DOMAIN ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Courier dispatch automation', LAUNDRYPAD_TEXT_DOMAIN ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Resident mobile + web app', LAUNDRYPAD_TEXT_DOMAIN ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="#cta"><?php esc_html_e( 'Start Essential', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.75rem"}},"className":"pricing-card is-featured"} -->
<div class="wp-block-column pricing-card is-featured" data-plan-price="monthly" data-monthly-price="$449" data-annual-price="$389"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="font-size:0.95rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600"><?php esc_html_e( 'Recommended', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2.35rem","fontWeight":"700"}}} -->
<h3 style="font-size:2.35rem;font-weight:700"><span class="price-value">$449</span><span class="price-frequency"><?php esc_html_e( '/month', LAUNDRYPAD_TEXT_DOMAIN ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"var:preset|color|neutral-700"}}} -->
<p class="has-neutral-700-color has-text-color" style="font-size:1rem"><?php esc_html_e( 'Scale LaundryPad across communities with advanced analytics and resident engagement.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"pricing-features"} -->
<ul class="pricing-features"><!-- wp:list-item -->
<li><?php esc_html_e( 'Unlimited residents', LAUNDRYPAD_TEXT_DOMAIN ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Smart locker integrations', LAUNDRYPAD_TEXT_DOMAIN ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Dedicated success manager', LAUNDRYPAD_TEXT_DOMAIN ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Advanced analytics dashboard', LAUNDRYPAD_TEXT_DOMAIN ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="#cta"><?php esc_html_e( 'Start Scale', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.75rem"}},"className":"pricing-card"} -->
<div class="wp-block-column pricing-card" data-plan-price="monthly" data-monthly-price="$649" data-annual-price="$559"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:0.95rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600"><?php esc_html_e( 'Enterprise', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2.35rem","fontWeight":"700"}}} -->
<h3 style="font-size:2.35rem;font-weight:700"><span class="price-value">$649</span><span class="price-frequency"><?php esc_html_e( '/month', LAUNDRYPAD_TEXT_DOMAIN ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"var:preset|color|neutral-700"}}} -->
<p class="has-neutral-700-color has-text-color" style="font-size:1rem"><?php esc_html_e( 'Custom workflows, API access, and white-labeled resident experiences.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"pricing-features"} -->
<ul class="pricing-features"><!-- wp:list-item -->
<li><?php esc_html_e( 'API + SSO access', LAUNDRYPAD_TEXT_DOMAIN ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Field ops integrations', LAUNDRYPAD_TEXT_DOMAIN ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Quarterly innovation roadmap', LAUNDRYPAD_TEXT_DOMAIN ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="#cta"><?php esc_html_e( 'Contact sales', LAUNDRYPAD_TEXT_DOMAIN ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php

return [
'title'       => __( 'Pricing', LAUNDRYPAD_TEXT_DOMAIN ),
'description' => __( 'Pricing cards with toggle.', LAUNDRYPAD_TEXT_DOMAIN ),
'categories'  => [ 'laundrypad-sections' ],
'content'     => ob_get_clean(),
];
