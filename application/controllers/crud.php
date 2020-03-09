<?php 

class Crud extends CI_Controller{
	//untuk extend crud dari CI Controler

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data'); //meload data dari model m data
	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result(); //menampilkan data dengan method tampil data di model data
		$this->load->view('v_tampil',$data); // menampilkan view v tampil dengan data yang dibawa $data
	}

	function tambah(){
		$this->load->view('v_input'); //menampilkan view v input
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama'); //ambil data nama
		$alamat = $this->input->post('alamat'); //ambil data alamat
		$pekerjaan = $this->input->post('pekerjaan'); //ambil data pekerjaan
 
		$data = array( //data yang didapat diubah ke array
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$this->m_data->input_data($data,'user'); //data dikirim ke m data dan dimasukkan ke tabel user
		redirect('crud/index'); //kembali tampilkan halaman crud
	}

	function hapus($id){
		$where = array('id' => $id); //ubah data yang telah ditangkap di variabel $id ke id
		$this->m_data->hapus_data($where,'user'); //data dikirim ke m data dan hapus data di tabel user
		redirect('crud/index'); //kembali tampilkan halaman crud
	}

	function edit($id){
		$where = array('id' => $id); //ubah data yang telah ditangkap di variabel $id ke id
		$data['user'] = $this->m_data->edit_data($where,'user')->result(); //tangkap data dari database
		$this->load->view('v_edit',$data); //tampilkan view v edit
	}

	function update(){
		$id = $this->input->post('id'); //tangkap data id
		$nama = $this->input->post('nama'); //tangkap data nama
		$alamat = $this->input->post('alamat'); //tangkap data alamat
		$pekerjaan = $this->input->post('pekerjaan'); //tangkap data pekerjaan
	
		$data = array( //ubah data ke array
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_data->update_data($where,$data,'user'); //kirim data ke m data dan update database
		redirect('crud/index'); //kembali tampilkan halaman crud
	}
}