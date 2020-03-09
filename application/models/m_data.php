<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user'); //ambil database tabel user
	}

	function input_data($data,$table){
		$this->db->insert($table,$data); //masukkan data ke database
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table); //hapus data di database
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where); //tangkap data di database berdasarkan selection
	}

	function update_data($where,$data,$table){
		$this->db->where($where); //tangkap data kunci
		$this->db->update($table,$data); //update data di database
	}	
}