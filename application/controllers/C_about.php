<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_about extends CI_Controller {

	public function elin()
	{
		$this->load->view('elin.php');
	}

	public function pipit()
	{
		$this->load->view('pipit.php');
	}

	public function lifya()
	{
		$this->load->view('lifya.php');
	}

	public function yulin()
	{
		$this->load->view('yulin.php');
	}
}
