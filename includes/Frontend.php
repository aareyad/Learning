<?php

namespace WeDevs\Academy;

/**
 * Frontend handler class
 *
 * @package WeDevs\Academy
 */
class Frontend {

    /**
     * Initializes the class
     */
    public function __construct() {
        new Frontend\Shortcodes();
    }
}