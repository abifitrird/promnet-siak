<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dosen extends CI_Controller {

	// proses yang akan di buka saat pertama masuk ke controller
	public function index()
	{
		$data['db_siak'] = $this->M_Dosen->selectAll()->result();
		
		$this->load->view('V_Dosen', $data);		
	}

	// proses untuk menambah data
	public function insert(){
		//mengambil data sesuai inputan pada form V_input
		$data['nip'] = $this->input->post('nip');
		$data['nama'] = $this->input->post('nama');
		$data['matkul'] = $this->input->post('matkul');
		
		
		//memasukan data yang sudah diinput di form V_input ke database
		$this->M_Dosen->insert($data);

		$this->load->view('V_Dosen2');

		//membuka kembali controller C_pekerja
		redirect(site_url('C_Dosen'));		
	}

	// proses untuk pindah ke view V_edit
	public function fedit($id_dosen){	
	$data['db_siak'] = $this->M_Dosen->selectById($id_dosen)->row_array();

	$this->load->view('V_Dosen3', $data);
	}

	// proses untuk merubah/mengedit data pada database
	public function update($id_dosen){
		//mengambil data sesuai inputan pada form V_edit
		$data['id_dosen'] = $this->input->post('id_dosen');
		$data['nip'] = $this->input->post('nip');
		$data['nama'] = $this->input->post('nama');
		$data['matkul'] = $this->input->post('matkul');

		//merubah data yang sudah diinput di form V_edit ke database
		$this->M_Dosen->update($id_dosen, $data);

		//membuka kembali controller C_pekerja
		redirect(site_url('C_Dosen'));
	}

	// proses untuk menghapus data pada database
	public function hapus($id_dosen){
		//mengambil id yang di kirimkan dari V_input
		$this->M_Dosen->hapus($id_dosen);

		//membuka kembali controller C_pekerja
		redirect(site_url('C_Dosen'));
	}
}
