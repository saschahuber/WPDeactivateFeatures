<?php

class WPDF_OptionsProvider{
	/**
     * Start up
     */
    public function __construct(){
    }
	
	public function get_options_bool(){
		$options = array(
			array('title' => 'Disable emojis', 'option_key' => 'disable_emojis', 'recommended' => false, 'class' => 'WPDF_EmojiDeactivator'),
			array('title' => 'Disable heartbeat', 'option_key' => 'disable_heartbeat', 'recommended' => true, 'class' => 'WPDF_HeartbeatDeactivator'),
			array('title' => 'Disable comments', 'option_key' => 'disable_comments', 'recommended' => false, 'class' => 'WPDF_CommentsDeactivator'),
			array('title' => 'Disable RSS-feed', 'option_key' => 'disable_rss_feed', 'recommended' => false, 'class' => 'WPDF_RssFeedDeactivator'),
			array('title' => 'Disable pingbacks', 'option_key' => 'disable_pingbacks', 'recommended' => true, 'class' => 'WPDF_PingbackDeactivator'),
			array('title' => 'Disable REST-API', 'option_key' => 'disable_rest_api', 'recommended' => false, 'class' => 'WPDF_RestAPIDeactivator'),
		);
		
		return $options;
	}
}

?>