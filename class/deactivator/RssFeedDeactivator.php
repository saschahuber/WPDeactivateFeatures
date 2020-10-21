<?php

class WPDF_RssFeedDeactivator{
	/**
     * Start up
     */
    public function __construct(){
		add_action('do_feed', array($this, 'turn_off_feed'), 1);
		add_action('do_feed_rdf', array($this, 'turn_off_feed'), 1);
		add_action('do_feed_rss', array($this, 'turn_off_feed'), 1);
		add_action('do_feed_rss2', array($this, 'turn_off_feed'), 1);
		add_action('do_feed_atom', array($this, 'turn_off_feed'), 1);
		add_action('do_feed_rss2_comments', array($this, 'turn_off_feed'), 1);
		add_action('do_feed_atom_comments', array($this, 'turn_off_feed'), 1);
		
		remove_action( 'wp_head', 'feed_links_extra', 3 );
		remove_action( 'wp_head', 'feed_links', 2 );
    }
	
	public function turn_off_feed() {
		wp_die('No feed available...');
	}
}

?>