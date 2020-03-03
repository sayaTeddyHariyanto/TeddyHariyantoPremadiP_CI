<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //mencegah akses langsung pada file controller
 
class Belajar extends CI_Controller { //nama kelas sesuai dengan nama file namun diawali huruf kapital
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
 
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result(); //memanggil function ambil_data pada model m_data. kemudian dijadikan result sebagai array
		$this->load->view('v_user.php',$data); //memanggil view v_user
	}
 
}

