<?php 

class Login extends CI_Controller{
	//mengextend login dari ci controler

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login'); //load data di m login

	}

	function index(){
		$this->load->view('v_login'); //tampilkan view v login
	}

	function aksi_login(){
		$username = $this->input->post('username'); //tangkap data username
		$password = $this->input->post('password'); //tangkap data password 
		$where = array( //ubah data ke array
			'username' => $username,
			'password' => md5($password) //enkripsi password
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows(); //cek data apakah ada data di database
		if($cek > 0){ //jika data ada
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{ //jika data tidak ada
			echo "Username dan password salah !";
		}
	}

	function logout(){ //fungsi logout
		$this->session->sess_destroy(); //hancurkan session
		redirect(base_url('login')); //kembali ke halaman login
	}
}