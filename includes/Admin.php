<?php

namespace WeDevs\Academy;

/**
 * Admin handler class
 *
 * @package WeDevs\Academy
 */
class Admin {

    /**
     * Initializes the class
     */
    public function __construct() {
        new Admin\Menu();
    }
}