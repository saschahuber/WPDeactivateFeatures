<?php

class WPPingbackDeactivator{
	/**
     * Start up
     */
    public function __construct(){
		add_action( 'pre_ping', array($this, 'no_self_ping'));
		add_filter('wp_headers', array($this, 'remove_wp_headers_filter'), 11, 2);
		add_filter( 'pre_option_enable_xmlrpc', '__return_false' );
		add_action('wp', array($this, 'remove_rsd_link'), 9);
		add_filter('bloginfo_url', array($this, 'remove_pingback_url'), 11, 2);
		add_action('xmlrpc_call', array($this, 'disable_pingback_xmlrpc'));
    }
	
	public function no_self_ping( &$links ) {
		$home = get_option( 'home' );
		foreach ( $links as $l => $link )
			if ( 0 === strpos( $link, $home ) )
				unset($links[$l]);
	}
	
	public function remove_wp_headers_filter($headers, $wp_query){
		if(isset($headers['X-Pingback'])){
			unset($headers['X-Pingback']);
		}
		return $headers;
	}
	
	public function remove_rsd_link(){
		remove_action('wp_head', 'rsd_link');
	}
	
	public function remove_pingback_url($output, $property){
		return ($property == 'pingback_url') ? null : $output;
	}
	
	public function disable_pingback_xmlrpc($method){
		if($method != 'pingback.ping') return;
		wp_die(
			'Pingback is disabled on this Website.',
			'Pingback disabled...',
			array('response' => 403)
		);
	}
}

?>