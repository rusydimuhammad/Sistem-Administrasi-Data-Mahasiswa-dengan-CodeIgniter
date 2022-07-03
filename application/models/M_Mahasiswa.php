<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model {
	//read tabel tb_mahasiswa
	function getDataMahasiswa() {
		$query = $this->db->get('tb_mahasiswa');
		return $query->result();
	}
	//query insert ke tabel tb_mahasiswa
	function insertDataMahasiswa($data) {
		$this->db->insert('tb_mahasiswa', $data);
	}

	function getDataMahasiswaDetail($nim) {
		$this->db->where('nim', $nim);
		$query = $this->db->get('tb_mahasiswa');
		return $query->row();
	}
	//query update tabel tb_mahasiswa
	function updateDataMahasiswa($nim, $data) {
		$this->db->where('nim', $nim);
		$this->db->update('tb_mahasiswa', $data);
	}
	//query delete data pada table tb_mahasiswa
	function deleteDataMahasiswa($nim) {
		$this->db->where('nim', $nim);
		$this->db->delete('tb_mahasiswa');
	}

}

/* End of file M_Mahasiswa.php */
/* Location: ./application/models/M_Mahasiswa.php */