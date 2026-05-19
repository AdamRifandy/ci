<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        
        $data['judul'] = "Halaman depan";
        // $this->load->view('v_index',$data);
        $this->load->view('template_sederhana/v_header',$data);
        $this->load->view('template_sederhana/v_index_dynamic',$data);
        $this->load->view('template_sederhana/v_footer',$data);
    }
    public function about(){
        $data['judul'] = "Halaman about";
        $this->load->view('template_sederhana/v_header',$data);
        $this->load->view('template_sederhana/v_about',$data);
        $this->load->view('template_sederhana/v_footer',$data);
    }
}
