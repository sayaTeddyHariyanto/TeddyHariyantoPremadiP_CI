<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('html'); //memanggil/mengaktifkan helper html saat halaman di load
	}
 
	public function index(){
		$this->load->view('welcome');
	}
}