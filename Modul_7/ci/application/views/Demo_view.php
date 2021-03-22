<?php
/**
 * 
 */
class Demo_view extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('headerview');
		$this->load->view('controller');
		$this->load->view('footerview')
	}
}
  ?>