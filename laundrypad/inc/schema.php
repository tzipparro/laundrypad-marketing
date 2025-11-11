<?php
/**
 * Structured data helpers.
 *
 * @package LaundryPad
 */

if ( ! function_exists( 'laundrypad_output_faq_schema' ) ) {
    /**
     * Print FAQPage schema when FAQ accordions exist on the page.
     */
    function laundrypad_output_faq_schema(): void {
        if ( ! is_singular() ) {
            return;
        }

        $post = get_post();
        if ( ! $post || ! has_block( 'core/details', $post ) ) {
            return;
        }

        $entries = laundrypad_collect_faq_entries( parse_blocks( $post->post_content ) );
        if ( empty( $entries ) ) {
            return;
        }

        $schema = [
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => array_map(
                static function ( $entry ) {
                    return [
                        '@type'          => 'Question',
                        'name'           => wp_strip_all_tags( $entry['question'] ),
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text'  => wp_kses_post( wpautop( $entry['answer'] ) ),
                        ],
                    ];
                },
                $entries
            ),
        ];

        echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}
add_action( 'wp_head', 'laundrypad_output_faq_schema', 5 );

if ( ! function_exists( 'laundrypad_collect_faq_entries' ) ) {
    /**
     * Recursively collect FAQ entries from parsed blocks.
     *
     * @param array $blocks Parsed block list.
     * @return array
     */
    function laundrypad_collect_faq_entries( array $blocks ): array {
        $entries = [];

        foreach ( $blocks as $block ) {
            if ( isset( $block['blockName'] ) && 'core/details' === $block['blockName'] ) {
                $html = $block['innerHTML'] ?? '';
                if ( empty( $html ) && ! empty( $block['innerContent'] ) ) {
                    $html = implode( '', array_filter( $block['innerContent'] ) );
                }

                if ( $html ) {
                    $question = '';
                    $answer   = '';

                    if ( preg_match( '/<summary[^>]*>(.*?)<\/summary>/is', $html, $summary_match ) ) {
                        $question = $summary_match[1];
                    }

                    if ( preg_match( '/<summary[^>]*>.*?<\/summary>(.*)/is', $html, $answer_match ) ) {
                        $answer = $answer_match[1];
                    }

                    if ( $question && $answer ) {
                        $entries[] = [
                            'question' => $question,
                            'answer'   => $answer,
                        ];
                    }
                }
            }

            if ( ! empty( $block['innerBlocks'] ) ) {
                $entries = array_merge( $entries, laundrypad_collect_faq_entries( $block['innerBlocks'] ) );
            }
        }

        return $entries;
    }
}
