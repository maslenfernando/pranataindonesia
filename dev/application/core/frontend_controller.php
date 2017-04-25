<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontEnd_Controller extends MY_Controller {

	function __construct() {
		parent::__construct();

		$this->load->helper(array());
		$this->load->library(array());
		$this->load->model(array());

		$this->load->model(array('User_Model'));

		$this->site->side 			= 'frontend';
		$this->site->template 		= 'default';
	}

}
