<?php
/**
 * FAQ pattern.
 *
 * @package LaundryPad
 */

ob_start();
?>
<!-- wp:group {"anchor":"faq","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"},"blockGap":"3rem"}},"layout":{"type":"constrained","contentSize":"960px"},"className":"laundrypad-faq"} -->
<div id="faq" class="wp-block-group laundrypad-faq" style="padding-top:5rem;padding-bottom:5rem"><!-- wp:heading {"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700","lineHeight":"1.2"}},"textAlign":"center"} -->
<h2 class="has-text-align-center" style="font-size:2.5rem;font-weight:700;line-height:1.2"><?php esc_html_e( 'Frequently asked questions', LAUNDRYPAD_TEXT_DOMAIN ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"var:preset|color|neutral-700"}},"className":"faq-intro"} -->
<p class="has-text-align-center faq-intro has-neutral-700-color has-text-color" style="font-size:1.125rem"><?php esc_html_e( 'Everything you need to know about how LaundryPad fits into your communities.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"faq-accordion","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-group faq-accordion"><!-- wp:details {"className":"faq-item"} -->
<details class="wp-block-details faq-item"><summary><?php esc_html_e( 'How fast can we launch LaundryPad?', LAUNDRYPAD_TEXT_DOMAIN ); ?></summary><div class="faq-content"><p><?php esc_html_e( 'Most properties are live within 14 days. We handle resident onboarding, courier training, and locker setup.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p></div></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-item"} -->
<details class="wp-block-details faq-item"><summary><?php esc_html_e( 'Do residents need an app?', LAUNDRYPAD_TEXT_DOMAIN ); ?></summary><div class="faq-content"><p><?php esc_html_e( 'LaundryPad works across iOS, Android, and web. Residents can also schedule via SMS.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p></div></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-item"} -->
<details class="wp-block-details faq-item"><summary><?php esc_html_e( 'What support do property teams receive?', LAUNDRYPAD_TEXT_DOMAIN ); ?></summary><div class="faq-content"><p><?php esc_html_e( 'Your success manager provides weekly performance reviews, training refreshers, and 24/7 escalation paths.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p></div></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-item"} -->
<details class="wp-block-details faq-item"><summary><?php esc_html_e( 'Can LaundryPad integrate with our PMS?', LAUNDRYPAD_TEXT_DOMAIN ); ?></summary><div class="faq-content"><p><?php esc_html_e( 'Yes. We support API and SFTP integrations with leading PMS and access systems to sync residents and work orders.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p></div></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-item"} -->
<details class="wp-block-details faq-item"><summary><?php esc_html_e( 'Is there a minimum property count?', LAUNDRYPAD_TEXT_DOMAIN ); ?></summary><div class="faq-content"><p><?php esc_html_e( 'No minimums. Start with a single property and expand as residents fall in love with the service.', LAUNDRYPAD_TEXT_DOMAIN ); ?></p></div></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem"}},"textColor":"neutral-500"} -->
<p class="has-text-align-center has-neutral-500-color has-text-color" style="font-size:1rem"><?php esc_html_e( 'Still have questions? Email', LAUNDRYPAD_TEXT_DOMAIN ); ?> <a href="mailto:hello@laundrypad.com">hello@laundrypad.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php

return [
'title'       => __( 'FAQ', LAUNDRYPAD_TEXT_DOMAIN ),
'description' => __( 'Accordion with common questions.', LAUNDRYPAD_TEXT_DOMAIN ),
'categories'  => [ 'laundrypad-sections' ],
'content'     => ob_get_clean(),
];
