<?php

namespace WeDevs\Academy\Frontend;

/**
 * Shortcode handler class
 *
 * @package WeDevs\Academy\Frontend
 */
class Shortcodes {

    /**
     * Initializes the class
     */
    public function __construct() {
        add_shortcode( 'wedevs-academy', [ $this, 'render_shortcode'] );
    }

    /**
     * Render Shortcode
     *
     * @param $atts
     * @param string $content
     *
     * @return string
     */
    public function render_shortcode( $atts, $content = '') {
        return 'Hello from shortcode';
    }
}