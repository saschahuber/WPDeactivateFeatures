<?php

class WPPerformanceOptionsProvider{
	/**
     * Start up
     */
    public function __construct(){
    }
	
	public function get_options_bool(){
		$options = array(
			array('title' => 'Disable emojis', 'option_key' => 'disable_emojis', 'recommended' => false, 'class' => 'WPEmojiDeactivator'),
			array('title' => 'Disable heartbeat', 'option_key' => 'disable_heartbeat', 'recommended' => true, 'class' => 'WPHeartbeatDeactivator'),
			array('title' => 'Disable comments', 'option_key' => 'disable_comments', 'recommended' => false, 'class' => 'WPCommentsDeactivator'),
			array('title' => 'Disable RSS-feed', 'option_key' => 'disable_rss_feed', 'recommended' => false, 'class' => 'WPRssFeedDeactivator'),
			array('title' => 'Disable Pingbacks', 'option_key' => 'disable_pingbacks', 'recommended' => true, 'class' => 'WPPingbackDeactivator'),
			array('title' => 'Disable REST-API', 'option_key' => 'disable_rest_api', 'recommended' => false, 'class' => 'WPRestAPIDeactivator'),
		);
		
		return $options;
	}
}

?>