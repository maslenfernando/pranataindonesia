<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends MY_Model {
	Protected $_table_name 		= 'user';
	Protected $_primary_key 	= 'ID';
	Protected $_order_by 		= 'ID';
	Protected $_order_by_type 	= 'DESC';

	public $rules 				= array(
		'username' 		=> array(
			'field' 	=> 'username',
			'label' 	=> 'Username',
			'rules' 	=> 'trim|required',
		),

		'password' 		=> array(
			'field' 	=> 'password',
			'label' 	=> 'Password',
			'rules' 	=> 'trim|required|callback_password_check',
		),
	);


	function __construct() {
		parent::__construct();
	}

}
