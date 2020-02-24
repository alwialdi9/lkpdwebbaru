<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Soal extends CI_Controller {

    function __construct()
    {
        parent::__construct();              
        $this->load->model('Soal_model');

         if($this->session->userdata('role_id') != 1){
            redirect('auth');
    }
    
}

    public function index()
    {
        $data['title'] = 'Soal';
        $data['ambil'] = $this->Soal_model->ambil();
        $data['name'] = $this->session->userdata('name');
    
        // $data['soal'] = $this->soal_model->soal();
        // $data['jawaban'] = $this->soal_model->jawaban();
        // $this->session->userdata('soal')])->row_array();        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('soal/index', $data);
        $this->load->view('templates/footer', $data);
        
    }

    public function update()
    {
        $id = $this->input->post('id');
        $soal = $this->input->post('soal');

        $data = array(
            'soal' => $soal);

        $where = array(
            'id' => $id);

        $this->Soal_model->update_data($where,$data,'tb_soal');
        redirect ('soal/index');
    }

    public function edit ($id)
    {

        $data['title'] = 'Soal';

        $data['name'] = $this->session->userdata('name');
        // $data['soal'] = $this->soal_model->Edit();
        $data['ambilsoal'] = $this->Soal_model->Edit($id);
        $data['detail'] = $data['ambilsoal']['soal'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('soal/edit',$data);
        $this->load->view('templates/footer', $data);
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