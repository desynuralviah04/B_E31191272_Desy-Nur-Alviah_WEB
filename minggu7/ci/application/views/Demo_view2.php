<?php
/**
 * 
 */
class Demo_view2 extends CI_COntroller
{
		
		public function __construct()
		{
			parent :: __construct();
			$this->load->helper('url')
		}
		
	
	public function index ()
	{
		$this->load->view('demoview');
	}
}

  ?>