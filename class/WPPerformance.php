<?php

class WPPerformance{
	/**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct(){
		$this->options_provider = new WPPerformanceOptionsProvider();
		add_action('init', array( $this, 'init_deactivations'));
    }
	
	/**
	 * Deactivates all functionality as configured in the plugins settings page
	*/
	public function init_deactivations(){
		$options = $this->options_provider->get_options_bool();
		foreach($options as $option){
			if(get_option('wp_deactivate_features_'.$option['option_key'])){
				$object = new $option['class']();
			}
		}
	}
}

$wp_performance = new WPPerformance();

?>