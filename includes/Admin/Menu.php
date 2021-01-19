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
        $parent_slug = 'wedevs-academy';
        $capability = 'manage_options';

        add_menu_page( __( 'weDevs Academy', 'wedevs-academy' ), __( 'Academy', 'weDevs-academy' ), $capability, $parent_slug, [ $this, 'addressbook_page'], 'dashicons-hourglass' );
        add_submenu_page( $parent_slug, __('Address Book', 'wedevs-academy'), __('Address Book', 'wedevs-academy'), $capability, $parent_slug, [ $this, 'addressbook_page'] );
        add_submenu_page( $parent_slug, __('Settings', 'wedevs-academy'), __('Settings', 'wedevs-academy'), $capability, 'wedevs-academy-settings', [ $this, 'settings_page'] );
    }

    /**
     * Render admin settings page content
     */
    public function addressbook_page() {
        $addressbook = new Addressbook();
        $addressbook->plugin_page();
    }

    /**
     * Render address book menu page content
     */
    public function settings_page() {
        echo 'Hello Addressbook';
    }
}