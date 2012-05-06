<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Twitter {

	// The possible apis
	private $apis = array('search', 'rest', 'streaming');

	// The Twitter API to use.
	private $api = 'search';

	// The Search API Settings
	private $search_api_settings = array(
		'q' => '',					// Required
		'callback' => '',			// Optional
		'geocode' => '',			// Optional
		'lang' => '',				// Optional
		'locale' => '',				// Optional
		'page' => '',				// Optional
		'result_type' => '',		// Optional
		'rpp' => '1',				// Optional
		'show_user' => '',			// Optional
		'until' => '',				// Optional
		'since_id' => '',			// Optional
		'max_id' => '',				// Optional
		'include_entities' => 'true'// Optional
	);

	// REST API settings
	private $rest_api_settings = array();

	// The Streaming API settings.
	private $streaming_api_settings = array();

	// The base search url
	private $base_search_api_url = 'http://search.twitter.com/search.json?';

	// Current set of settings.
	private $current_settings;


	public function __construct() 
	{
		// http://search.twitter.com/search.json?q=from%3Ahoudmont&rpp=1&include_entities=true
		$this->current_settings =& $search_api_settings;
	}

	/**
	 * Return the currently set api, or a list of all possible apis.
	 *
	 * @return array current api	
	 */
	public function get_api($all = false) {
		
		if($all) {
			return $this->apis;
		}

		return $this->api;
	}

	/**
	 * Set the api if a valid api is passed
	 *
	 * @return boolean denoting success
	 */
    public function set_api($api = 'search')
    {
    	if(in_array($api, $this->apis)) 
    	{
    		$this->api = $api;
    	} 
    	else 
    	{
    		return 0;
    	}

    	// Assign a pointer to the settings array
    	$this->_assign_settings();

    	return 1;
    }

	/**
	 * Assign a value to a setting.
	 *
	 * @return boolean success value
	 */
    public function set_setting($setting = '', $value = '') 
    {
    	$this->current_settings[$setting] = urlencode($value);
    }

    /**
	 * Get the api setting denoted, or get them all. 
	 *
	 * @return Array Settings for the api chosen.
	 * @return String value of setting passed.
	 */
    public function get_setting($setting = null) 
    {
    	if( $setting !== null ) 
    	{
    		return urldecode($this->current_settings[$setting]);
    	}

    	return $this->current_settings;
    }

    /**
     * Get the results of the search API
     */
    public function search() {
    	$query = $this->_build_url();

/*
    	$curl = curl_init();

    	curl_setopt($curl, CURLOPT_URL, $query);
    	curl_setopt($curl, CURLOPT_HEADER, 1);
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    	$result = curl_exec($curl);

    	curl_close($curl);
*/
    	$result = file_get_contents($query);

    	$decoded_result = json_decode($result);

    	return $decoded_result->results;

    }

    /**
	 * Assign the appropriate settings array.
	 */
    public function _assign_settings() {
    	switch ($this->api) {
    		case 'search' :
    			$this->current_settings =& $this->search_api_settings;
    			break;
			case 'rest' :
				$this->current_settings =& $this->rest_api_settings;
				break;
			case 'streaming' :
				$this->current_settings =& $this->streaming_api_settings;
				break;
			default :
				return 0;
				break;
    	}
    }

    /**
     * Build the query url
     */
    public function _build_url() {

    	$query = $this->base_search_api_url;

    	$pairs = array();
    	foreach($this->current_settings as $k => $v) {
    		if(!!$v) {
    			$pairs[] = $k . '=' . $v;
    		}
    	}

    	$query .= implode('&', $pairs);

    	return $query;
    }
}

/* End of file Someclass.php */