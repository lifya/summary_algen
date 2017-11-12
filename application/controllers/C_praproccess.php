<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_praproccess extends CI_Controller {

	public function index()
	{
		// $this->load->library('preprocessor');
		
		
		// $dokumen = $this->preprocessor->casefolding($dokumen);
		// $terms = $this->preprocessor->tokenizing($dokumen);

		$this->load->view('element/header');
		$this->load->view('content/praproccess');
	}
}
