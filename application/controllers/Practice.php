<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Practice extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("form_validation");
		$this->load->library("session");
	}
	
	public $account = [
		[
			"username" => "andy",
			"password" => "akusayangpira123"
		],
		[
			"username" => "pira",
			"password" => "12345678"
		]
	];
	public function index() {
		if ($this->session->userdata("myAccount") == null) {
			$this->load->view("practice_concept/v_login");
		} else {
			$data["judul"] = "Home Page";
			$this->load->view("practice_concept/v_header", $data);
			$this->load->view("practice_concept/v_home", $data);
			$this->load->view("practice_concept/v_footer", $data);
		}
	}
	
	public function login() {
		if ($this->session->userdata("myAccount") == null) {
			$this->form_validation->set_rules("username", "Username", "required");
			$this->form_validation->set_rules("password", "Password", "required");
			
			if ($this->form_validation->run() != false) {
				$hasil = null;
				foreach ($this->account as $akun) {
					if ($akun["username"] == $this->input->post("username")) {
						$hasil = $akun;
						break;
					}
				}
				if (!$hasil) {
					$this->form_validation->set_message("invalid_msg", "Username atau Password salah");
					$this->load->view("practice_concept/v_login");
				} else {
					if ($this->input->post("password") != $hasil["password"]) {
						$this->form_validation->set_message("invalid_msg", "Username atau Password salah");
						$this->load->view("practice_concept/v_login");
					} else {
						$this->session->set_userdata("myAccount", $hasil);
						redirect("practice");
					}
				}
			} else {
				$this->load->view("practice_concept/v_login");
			}
		} else {
			redirect('practice');
		}
	}
	
	public function input() {
		if ($this->session->userdata("myAccount") == null) {
			$this->load->view("practice_concept/v_login");
		} else {
			$data["judul"] = "Input Page";
			$this->load->view("practice_concept/v_header", $data);
			$this->load->view("practice_concept/v_input", $data);
			$this->load->view("practice_concept/v_footer", $data);
		}
	}
	
	public function report() {
		if ($this->session->userdata("myAccount") == null) {
			$this->load->view("practice_concept/v_login");
		} else {
			$data["judul"] = "Report Page";
			$this->load->view("practice_concept/v_header", $data);
			$this->load->view("practice_concept/v_report", $data);
			$this->load->view("practice_concept/v_footer", $data);
		}
	}
	
	public function logout() {
		if ($this->session->userdata("myAccount") != null) {
			$this->session->unset_userdata("myAccount");
			$this->load->view("practice_concept/v_login");
		}
	}
}
?>
