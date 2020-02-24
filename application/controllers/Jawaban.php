<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jawaban extends CI_Controller {

    function __construct()
    {
        parent::__construct();              
        $this->load->model('jawaban_model');

         if($this->session->userdata('role_id') != 1){
            redirect('auth');
    }
    
}

    public function index()
    {
        $data['title'] = 'Jawaban';
        $data['ambil'] = $this->jawaban_model->ambil();
        $data['name'] = $this->session->userdata('name');
        
        // $data['soal'] = $this->soal_model->soal();
        // $data['jawaban'] = $this->soal_model->jawaban();
        // $this->session->userdata('soal')])->row_array();        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jawaban/index', $data);
        $this->load->view('templates/footer', $data);
        
    }

    public function edit ()
    {
        $data['jawaban'] = $this->jawaban_model->Edit();
    }

    public function hapus ()
    {

    }

}
//     public function delete($kode = 0){
//         $this->ceklogin();
//         $hasil = $this->soal_model->Hapus('soal',array('id' => $kode));
//         if($hasil == 1){
//             redirect('soal');
//         }else{
//             echo "mohon periksa kembali";
//         }
//     }
// }