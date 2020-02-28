<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Admin_model');
       if ($this->session->userdata('role_id') == null || $this->session->userdata('role_id') == 2){
            redirect('user');
        }
        // } else {
        //     $this->load->view('admin/index');
        // }
    }
    
    public function index() 
    {
        $data['title'] = 'Admin';
        $data['admin'] = $this->db->get_where('tb_user', ['nis' => $this->session->userdata('nis')])->row_array();

        $data['name'] = $data['admin']['name'];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);

    }

    public function waktu()
    {
        $data['title'] = 'Waktu';
        $data['admin'] = $this->db->get_where('tb_user', ['nis' => $this->session->userdata('nis')])->row_array();

        $data['waktu'] = $this->db->get('tb_timer')->row_array();
        $data['timer'] = $data['waktu']['waktu'];
        $data['idtimer'] = $data['waktu']['id'];

        $data['name'] = $data['admin']['name'];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/waktu', $data);
        $this->load->view('templates/footer', $data);
    }

    public function editwaktu(){
        $this->Admin_model->ubahWaktu();
        $data['title'] = 'Waktu';
        $data['admin'] = $this->db->get_where('tb_user', ['nis' => $this->session->userdata('nis')])->row_array();

        $data['waktu'] = $this->db->get('tb_timer')->row_array();
        $data['timer'] = $data['waktu']['waktu'];
        $data['idtimer'] = $data['waktu']['id'];

        $data['name'] = $data['admin']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/waktu', $data);
        $this->load->view('templates/footer', $data);
    }
}