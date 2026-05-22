<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index() {
		echo "ini method index pada controller belajar";
	}

	public function halo() {
		// dengan array
		$data_assosiatif = array(
			'hasil_parsing' => "Modul 2",
			'nilai_pertama' => "Cara parsing data dengan menggunakan assosiatif array",
			'nilai_kedua' => "Ini adalah nilai kedua dari data yang di parsing"
		);
		$this->load->view('v_belajar', $data_assosiatif);
	}
}
