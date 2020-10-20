<?php

class WPRestAPIDeactivator{
	/**
     * Start up
     */
    public function __construct(){
		add_filter( 'rest_authentication_errors', array($this, 'disable_rest_api'));
    }
	
	public function disable_rest_api( $result ) {
		return new WP_Error( 'rest_api_disabled', 'REST-API is disabled on this website.', array( 'status' => 401 ) );
	}
}

?>