<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != 1) {
            redirect('auth');
        }
        // } else {
        //     $this->load->view('admin/index');
        // }
    }
    
    public function index() 
    {
        $data['title'] = 'Admin';
        $data['admin'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['name'] = $data['admin']['name'];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);

    }
}