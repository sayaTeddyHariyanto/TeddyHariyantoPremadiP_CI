<?php 
 
class M_data extends CI_Model{ //membuat class M_data dan extend m_data dengan CI_Model
	function ambil_data(){ //fungsi yang akan mengambil data pada table user
		return $this->db->get('user'); //mengambil data dari database, mengembalikan data yang ditangkap pada controller yang memanggil function ambil_data
	}
}