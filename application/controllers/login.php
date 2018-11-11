<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('tampilan_login');
	}

	public function getlogin(){

		if($this->model_login->getlogin($this->input->post('username'),$this->input->post('password'))){

			$data = $this->model_login->selectByUsername($this->input->post('username'))->row_array();

			$userdata = array(
				'id' => $data['id'], 
				'nama' => $data['nama'],
				'username' => $data['username'], 
				'password' => md5($data['password']), 
				'logged_in' => true		 
			);

			$this->session->set_userdata($userdata);
			redirect('home');
		}else{
			redirect('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
