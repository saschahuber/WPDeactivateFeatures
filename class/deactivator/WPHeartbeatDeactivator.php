<?php

class WPHeartbeatDeactivator{
	/**
     * Start up
     */
    public function __construct(){
		add_action( 'init', array($this, 'stop_heartbeat'), 1 );
    }
	
	public function stop_heartbeat() {
		wp_deregister_script('heartbeat');
	}
}

?>