<?php
class Adding_js_and_css extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$this->load->view('adding_js_and_css/test');
	}
	public function googleMap(){
		
		
		$this->load->library('GMap');
		
		$this->gmap->GoogleMapAPI();
		
		// valid types are hybrid, satellite, terrain, map
		$this->gmap->setMapType('hybrid');
		
		// you can also use addMarkerByCoords($long,$lat)
		// both marker methods also support $html, $tooltip, $icon_file and $icon_shadow_filename
		$this->gmap->addMarkerByAddress("Thambaiya Road, West mambalam, Chennai, India","Marker Title", "Marker Description");
		
		$data['headerjs'] = $this->gmap->getHeaderJS();
		$data['headermap'] = $this->gmap->getMapJS();
		$data['onload'] = $this->gmap->printOnLoad();
		$data['map'] = $this->gmap->printMap();
		$data['sidebar'] = $this->gmap->printSidebar();
		
		$this->load->view('adding_js_and_css/gmap',$data);
	}
}
?>