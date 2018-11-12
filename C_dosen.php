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
		$data['id_dosen'] = $this->input->post('id_dosen');
		$data['nip'] = $this->input->post('nip');
		$data['nama'] = $this->input->post('nama');
		$data['matkul'] = $this->input->post('matkul');
		
		
		//memasukan data yang sudah diinput di form V_input ke database
		$this->M_Dosen->insert($data);

		//membuka kembali controller C_pekerja
		redirect(site_url('C_dosen'));		
	}

	// proses untuk pindah ke view V_edit
	public function edit($id){
	  if($this->input->post('submit')){ 
	   if($this->M_Dosen->validation("save")){ 
	    $this->M_Dosen->save(); 
	    redirect('C_Dosen');
	   }
  }
  
  $this->load->view('dosen/form_tambah');
	}

	// proses untuk merubah/mengedit data pada database
	public function update($id){
		//mengambil data sesuai inputan pada form V_edit
		$data['id_dosen'] = $this->input->post('ID');
		$data['nip'] = $this->input->post('NIP');
		$data['nama'] = $this->input->post('Nama Dosen');
		$data['matkul'] = $this->input->post('Mata Kuliah Yang Di Ampu');

		//merubah data yang sudah diinput di form V_edit ke database
		$this->M_dosen->update($id, $data);

		//membuka kembali controller C_pekerja
		redirect(site_url('C_Dosen'));
	}

	// proses untuk menghapus data pada database
	public function hapus($id){
		//mengambil id yang di kirimkan dari V_input
		$this->M_dosen->delete($id);

		//membuka kembali controller C_pekerja
		redirect(site_url('C_Dosen'));
	}
}
