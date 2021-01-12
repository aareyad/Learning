<?php

namespace WeDevs\Academy\Admin;

/**
 * Menu handler class
 *
 * @package WeDevs\Academy\Admin
 */
class Menu {

    /**
     * Menu constructor.
     */
    function __construct() {
        add_action( 'admin_menu', [ $this, 'admin_menu'] );
    }

    /**
     * Add page menu
     */
    public function admin_menu() {
        add_menu_page( __( 'weDevs Academy', 'wedevs-academy' ), __( 'Academy', 'weDevs-academy' ), 'manage_options', 'wedevs-academy', [ $this, 'plugin_page'], 'dashicons-hourglass' );
    }

    /**
     * Render admin menu page content
     */
    public function plugin_page() {
        echo 'Hello World';
    }
}