<?php
/**
 * Plugin Name: weDevs Academy
 * Plugin URI: https://woocommerce.com/
 * Description: A tutorial plugin from weDevs Academy
 * Version: 1.0
 * Author:
 * Author URI:
 * Text Domain:
 * Domain Path:
 * Requires at least: 5.2
 * Requires PHP: 7.0
 *
 * @package WooCommerce
 */

if ( !defined('ABSPATH') ) exit;

require_once __DIR__ . "/vendor/autoload.php";

/**
 * The Main plugin class
 */
final class WeDevs_Academy {
    /**
     * Plugin version
     */
    const version = '1.0';

    /**
     * WeDevs_Academy constructor.
     */
    function __construct() {
        $this->define_constants();

        register_activation_hook( __FILE__, [ $this, 'activate'] );

        add_action( 'plugins_loaded', [ $this, 'init_plugin' ]);
    }

    /**
     * Initializes a singleton instance
     *
     * @return bool|WeDevs_Academy
     */
    public static function init() {
        static $instance = false;

        if ( !$instance ) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * Define the required plugin activation
     *
     * @return void
     */
    public function define_constants() {
        define( 'WD_ACADEMY_VERSION', self::version );
        define( 'WD_ACADEMY_FILE', __FILE__ );
        define( 'WD_ACADEMY_PATH', __DIR__ );
        define( 'WD_ACADEMY_URL', plugins_url( '', WD_ACADEMY_PATH) );
        define( 'WD_ACADEMY_ASSETS', WD_ACADEMY_URL . '/assets' );
    }

    /**
     * Initialize the plugin
     */
    public function init_plugin() {
        if (is_admin()) {
            new \WeDevs\Academy\Admin();
        } else {
            new \WeDevs\Academy\Frontend();
        }
    }

    /**
     * Do staff upon plugin activation
     *
     * @return void
     */
    public function activate() {
        $installed = get_option( 'wd_academy_version' );

        if ( !$installed ) {
            update_option( 'wd_academy_installed', time() );
        }

        update_option('wd_academy_version', WD_ACADEMY_VERSION );
    }
}

/**
 * Initialized the main plugin
 *
 * @return bool|WeDevs_Academy
 */
function wedevs_academy() {
    return WeDevs_Academy::init();
}

// Kik-off the plugin
wedevs_academy();