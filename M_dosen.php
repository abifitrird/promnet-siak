<?php
class M_Dosen extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
	}

	/*menampilkan semua data yang ada di tabel data_mahasiswa*/
	function selectAll(){
		$this->db->select('*');
		$this->db->from('tb_dosen');

		return $this->db->get();
	}

	// menampilkan data sesuai idnya
	function selectById($id){
		$this->db->select('*');
		$this->db->from('tb_dosen');
		$this->db->where('id_dosen',$id);
		

		return $this->db->get();
	}

	// //menambah data pada tabel data_mahasiswa
	function insert($data){
		$this->db->insert('tb_dosen', $data);
	}

	// //merubah data pada tabel data_mahasiswa
	function update($id, $data){
		$this->db->set($data);
		$this->db->where('id_dosen',$id);
		$this->db->update('tb_dosen');
	}

	// //menghapus data pada tabel data_mahasiswa
	function delete($id){
		$this->db->where('id_dosen',$id);
		$this->db->delete('tb_dosen');
	}
}

?>