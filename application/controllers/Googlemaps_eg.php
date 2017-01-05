<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Googlemaps_eg extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('form');
	
	}
	public function index(){
		// Load the library
		$this->load->library('googlemaps');
		
		// This is our Google API key. You will need to change this for your own website
		$config['apikey'] = 'AIzaSyAujVuc34gbYSScpM71OujRCatOV06PQ8g';
		// Initialize our map, passing in any configuration values we have set
		$config['center_lat_long'] ="10.959815,79.380898";
		
		$config['zoom'] = '10';
		
		
		
		//$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);
		
		$marker = array();
		$marker['lat_long'] = "10.959815,79.380898";
		$this->googlemaps->add_marker($marker);
		
		// Create the map. This will return the Javascript to be included in our pages <head> section and the HTML code to be
		// placed where we want the map to appear.
		$data['map'] = $this->googlemaps->create_map();
		// Load our view, passing the map data that has just been created
		$this->load->view('templates/header');
		$this->load->view('googlemaps/my_view', $data);
		$this->load->view('templates/footer');
		
	}
	

}