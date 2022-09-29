<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    Public function index(){
        $data=array(
            'pert' => "Pertemuan 3",
            'temp' => "Template Sederhana"
        );
        $this->load->view('v_index',$data);
       
    }
    public function about(){
        $this->load->view('v_about');
    }
}