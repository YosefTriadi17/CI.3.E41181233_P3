<?php 

class Admin extends CI_Controller{
	//untuk extend Admin dari CI Controler

	function __construct(){ //method construct
		parent::__construct(); //agar dijalankan pertama kali
	
		if($this->session->userdata('status') != "login"){ //cek status di session jika tidak sama dengan login maka kembali ke url login
			redirect(base_url("login")); //kembali ke url login
		}
	}

	function index(){ //method index
		$this->load->view('v_admin'); //menampilkan view v admin
	}
}