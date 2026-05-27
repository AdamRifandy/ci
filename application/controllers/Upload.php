<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Upload extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper("url");
	}
	
	public function index() {
		$this->load->view("v_upload");
	}
	
	public function aksi() {
		
	}
}
?>