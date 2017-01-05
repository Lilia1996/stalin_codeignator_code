<?php
class Menus{

	function show_menu()
	{
		$obj =& get_instance();	
		$obj->load->helper('url');
		$menu	= anchor("start/hello/fred","<button type='button' class='btn btn-primary'>Say hello to Fred |</button>","style='padding:10px'");
		$menu	.= anchor("start/hello/bert","<button type='button' class='btn btn-primary'>Say hello to Bert |</button>","style='padding:10px'");
		$menu	.= anchor("start/hello/another_function","<button type='button'   class='btn btn-primary'>Do something else |</button>","style='padding:10px'");
		return $menu;
	}
}

?>