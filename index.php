<?
/**
 * Plugin Name: WP Deactivate Features
 * Plugin URI: https://sascha-huber.com/projekte/wp-deactivate-features
 * Text Domain: wp-deactivate-features
 * Domain Path: /languages
 * Description: Configuration-Plugin to deactivate unneeded features
 * Version: 0.1
 * Author: Sascha Huber
 * Author URI: https://sascha-huber.com
*/

function wp_deactivate_features_load_plugin_textdomain() {
    load_plugin_textdomain( 'wp-deactivate-features', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'wp_deactivate_features_load_plugin_textdomain' );

include('class/WPPerformanceOptionsProvider.php');
include('class/WPPerformance.php');
include('class/WPPerformanceSettings.php');

include('class/deactivator/WPEmojiDeactivator.php');
include('class/deactivator/WPHeartbeatDeactivator.php');
include('class/deactivator/WPCommentsDeactivator.php');
include('class/deactivator/WPRssFeedDeactivator.php');
include('class/deactivator/WPRestAPIDeactivator.php');
include('class/deactivator/WPPingbackDeactivator.php');

?>