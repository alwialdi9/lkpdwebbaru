<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hasil extends CI_Controller {

    function __construct()
    {
        parent::__construct();              
        $this->load->model('Hasil_model');

         if($this->session->userdata('role_id') != 1){
            redirect('auth');
    }
    
}

    public function index()
    {
        $data['title'] = 'Hasil';
        $data['ambil'] = $this->Hasil_model->ambil();
        $data['name'] = $this->session->userdata('name');
    
        // $data['soal'] = $this->soal_model->soal();
        // $data['jawaban'] = $this->soal_model->jawaban();
        // $this->session->userdata('soal')])->row_array();        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('hasil/index', $data);
        $this->load->view('templates/footer', $data);
        
    }

    public function edit ()
    {
        $data['hasil'] = $this->hasil_model->Edit();
    }

    public function hapus ()
    {

    }

}