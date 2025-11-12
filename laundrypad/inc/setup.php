<?php
/**
 * Theme setup.
 *
 * @package LaundryPad
 */

use WP_Post;

if ( ! function_exists( 'laundrypad_setup' ) ) {
    /**
     * Configure theme defaults and supports.
     */
    function laundrypad_setup(): void {
        load_theme_textdomain( LAUNDRYPAD_TEXT_DOMAIN, LAUNDRYPAD_PATH . 'languages' );

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'html5', [ 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets', 'search-form' ] );
        add_theme_support( 'align-wide' );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'editor-styles' );
        add_editor_style( 'style-index.css' );

        register_nav_menus(
            [
                'primary' => __( 'Primary Menu', LAUNDRYPAD_TEXT_DOMAIN ),
                'footer'  => __( 'Footer Menu', LAUNDRYPAD_TEXT_DOMAIN ),
            ]
        );
    }
}
add_action( 'after_setup_theme', 'laundrypad_setup' );

if ( ! function_exists( 'laundrypad_image_sizes' ) ) {
    /**
     * Register additional image sizes.
     */
    function laundrypad_image_sizes(): void {
        add_image_size( 'laundrypad-card', 560, 420, true );
        add_image_size( 'laundrypad-avatar', 160, 160, true );
        add_image_size( 'laundrypad-logo', 200, 120, false );
    }
}
add_action( 'init', 'laundrypad_image_sizes' );

if ( ! function_exists( 'laundrypad_seed_content' ) ) {
    /**
     * Create landing page starter content on first activation.
     */
    function laundrypad_seed_content(): void {
        if ( get_option( 'laundrypad_seeded' ) ) {
            return;
        }

        $existing = get_page_by_path( 'landing-page' );
        if ( $existing instanceof WP_Post ) {
            update_option( 'page_on_front', $existing->ID );
            update_option( 'show_on_front', 'page' );
            update_option( 'laundrypad_seeded', 1 );
            return;
        }

        $content = <<<HTML
<!-- wp:pattern {"slug":"laundrypad/hero"} /-->
<!-- wp:pattern {"slug":"laundrypad/features-grid"} /-->
<!-- wp:pattern {"slug":"laundrypad/how-it-works"} /-->
<!-- wp:pattern {"slug":"laundrypad/stats-logos"} /-->
<!-- wp:pattern {"slug":"laundrypad/testimonials"} /-->
<!-- wp:pattern {"slug":"laundrypad/pricing"} /-->
<!-- wp:pattern {"slug":"laundrypad/faq"} /-->
<!-- wp:pattern {"slug":"laundrypad/cta-band"} /-->
HTML;

        $page_id = wp_insert_post(
            [
                'post_title'   => __( 'Landing Page', LAUNDRYPAD_TEXT_DOMAIN ),
                'post_name'    => 'landing-page',
                'post_type'    => 'page',
                'post_status'  => 'publish',
                'post_content' => $content,
            ]
        );

        if ( ! is_wp_error( $page_id ) ) {
            update_option( 'page_on_front', $page_id );
            update_option( 'show_on_front', 'page' );
            update_option( 'laundrypad_seeded', 1 );
        }
    }
}
add_action( 'after_switch_theme', 'laundrypad_seed_content' );
