<?php 
 
class Form extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); //memanggil library form_validation untuk dapat menggunakan library form_validation
	}
 
	function index(){
		$this->load->view('v_form');
	}
 
	function aksi(){
		$this->form_validation->set_rules('nama','Nama','required'); //menetapkan aturan untuk form dengan parameter 1 adalah nama form yang akan di validasi, parameter2 kata yang akan dimunculkan, required berarti harus diisi
		$this->form_validation->set_rules('email','Email','required'); //menetapkan aturan untuk form dengan parameter 1 adalah nama form yang akan di validasi, parameter2 kata yang akan dimunculkan, required berarti harus diisi
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required'); //menetapkan aturan untuk form dengan parameter 1 adalah nama form yang akan di validasi, parameter2 kata yang akan dimunculkan, required berarti harus diisi
 
		if($this->form_validation->run() != false){ //jika form_validation run dan tidak ada error maka tampilkan Form Validation oke
			echo "Form validation oke";
		}else{ //jika false maka
			$this->load->view('v_form'); //tampil v_form
		}
	}
}