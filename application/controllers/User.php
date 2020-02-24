<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function index() 
    {
        $data['title'] = 'My Profile';
        $data['tb_user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sider');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
}