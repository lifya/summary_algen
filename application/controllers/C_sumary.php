<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class C_sumary extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('element/header');
		$this->load->view('content/sumary.php');
		$this->load->view('element/footer');
	}
}

