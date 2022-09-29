<?php

class Belajar extends CI_Controller{
    public function index()
    {
        $this->load->view('view_belajar');
    }
    public function parsing(){
        //$data['bio']="Nama Saya Viona";
        $data=array(
            'nama' => "Viona Zalsha Ramadhia",
            'pekerjaan' => "Mahasiswa"
        );
        $this->load->view('view_belajar', $data);
    }
}