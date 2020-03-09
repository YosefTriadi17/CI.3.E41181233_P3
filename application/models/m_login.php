<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){	//method cek login melalui database	
		return $this->db->get_where($table,$where);
	}	
}