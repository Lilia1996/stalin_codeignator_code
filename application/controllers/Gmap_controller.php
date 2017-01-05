<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gmap_controller extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('form');

	}
	public function indexone(){
		
		$this->load->view('templates/header');
		$this->load->view('gmap/gmapform',$data);
		$this->load->view('templates/footer');
		
	}
	public function index(){
	
		$this->load->library('GMap');
	
		$this->gmap->GoogleMapAPI();
	
		// valid types are hybrid, satellite, terrain, map
		$this->gmap->setMapType('hybrid');
		$this->gmap->width = "100%";
		$this->gmap->height = "86%";
		// you can also use addMarkerByCoords($long,$lat)
		// both marker methods also support $html, $tooltip, $icon_file and $icon_shadow_filename
		$this->gmap->addMarkerByAddress("Thambaiya Road, West Mambalam, Chennai, India","Marker Title", "Marker Description");
	
	
	
		$data['headerjs'] = $this->gmap->getHeaderJS();
		$data['headermap'] = $this->gmap->getMapJS();
		$data['onload'] = $this->gmap->getOnLoad();
		$data['map'] = $this->gmap->getMap();
		$data['sidebar'] = $this->gmap->getSidebar();
	
	
		$this->load->view('templates/header');
		$this->load->view('gmap/gmapview',$data);
		$this->load->view('templates/footer',$data);
	}
}