<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tcourse extends CI_Controller {

	public function index()
	{
		$this->load->view('Teacher-Course');
	}


}
