<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends BackEnd_Controller {

	public function __contruct() {
		parent::__contruct();
	}


	public function index() {
		$data = array();
		$this->site->view('artikel', $data);
	}

}
