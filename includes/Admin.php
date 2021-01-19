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
        $this->dispatch_actions();

        new Admin\Menu();
    }

    public function dispatch_actions() {
        $addressbook = new Admin\Addressbook();

        add_action( 'admin_init', [ $addressbook, 'form_handler' ] );
    }
}