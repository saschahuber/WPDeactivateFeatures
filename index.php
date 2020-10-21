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

include('class/OptionsProvider.php');
include('class/DeactivationExecutor.php');
include('class/Settings.php');

include('class/deactivator/EmojiDeactivator.php');
include('class/deactivator/HeartbeatDeactivator.php');
include('class/deactivator/CommentsDeactivator.php');
include('class/deactivator/RssFeedDeactivator.php');
include('class/deactivator/RestAPIDeactivator.php');
include('class/deactivator/PingbackDeactivator.php');

?>