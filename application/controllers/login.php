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
				'id_username' => $data['id_username'], 
				'username' => $data['username'], 
				'password' => $data['password'], 
				'nama_lengkap' => $data['nama_lengkap'],
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
