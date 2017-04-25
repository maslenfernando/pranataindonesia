<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends BackEnd_Controller {

	public function index() {
		$data = array('tes' => 'Testing, Test Bunting');
		$this->site->view('index', $data);
	}

}
