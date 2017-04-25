<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends BackEnd_Controller {

	protected $user_detail;

	public function __contruct() {
		parent::__contruct();
	}


	public function login() {
		$post 	= $this->input->post(NULL, TRUE);

		if(isset($post['username'])) {
			$this->user_detail = $this->User_Model->get_by(
				array('username' => $post['username'] , 'group' => 'admin') , 1 , NULL, TRUE
			);
		}

		$this->form_validation->set_message('required', '%s kosong, tolong diisi !');

		$rules 	= $this->User_Model->rules;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE) {
			$this->site->view('login');
		
		} else {
			$login_data 	= array(
				'ID' 			=> $this->user_detail->ID,
				'username' 		=> $post['username'],
				'logged_in' 	=> TRUE,
				'active' 		=> $this->user_detail->active,
				'last_login' 	=> $this->user_detail->last_login,
				'group' 		=> $this->user_detail->group,
				'email' 		=> $this->user_detail->email
			);

			$this->session->set_userdata($login_data);

			if(isset($post['remember'])) {
				$expire = time() + (8640 * 7);
				set_cookie('username', $post['username'], $expire, "/");
				set_cookie('password', $post['password'], $expire, "/");
			}

			redirect(set_url('dashboard/'));
		}

	}


	public function password_check($str) {
		$user_detail 	= $this->user_detail;

		if(@$user_detail->password == crypt($str, @$user_detail->password)) {
			return TRUE;

		} elseif(@$user_detail->password) {
			$this->form_validation->set_message('password_check', 'Password Kamu salah !');
			return FALSE;
		
		} else {
			$this->form_validation->set_message('password_check', 'Kamu tidak memiliki hak akses admin !');
			return FALSE;
		}
	}


	public function logout() {
		$this->session->sess_destroy();
		redirect(set_url('login/'));
	}


	/* public function temporary_register() {
		$data_user_baru = array(
			'username' 	=> 'admin',
			'group' 	=> 'admin',
			'password' 	=> bCrypt('admin', 12),
			'email' 	=> 'admin@pranataindonesia.ac.id',
			'active' 	=> 1
		);

		$this->User_Model->insert($data_user_baru);
	} */

}
