<?php
/**
 * Block-related filters and functions.
 *
 * @package Parlour_Block_Theme
 */

namespace Parlour_Block_Theme;

/**
 * Class Block_Functions
 */
class Block_Functions {

    /**
     * Initialize the module.
     */
    public function init(): void {
        add_action( 'init', array( $this, 'register_pattern_categories' ) );
    }

    /**
     * Register a custom block pattern category for the theme.
     */
    public function register_pattern_categories(): void {
        register_block_pattern_category(
            'parlour-sections',
            array( 'label' => __( 'Parlour Sections', 'parlour-block-theme' ) )
        );
    }
}
