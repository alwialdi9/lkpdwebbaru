<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends Ci_Model {

   function getSiswa() {
     $data = $this->db->query('SELECT * FROM tb_user WHERE role_id = 2');
      return $data->result_array();
  }

  public function getSiswaById($id)
    {
        $this->db->from('tb_user');
        $this->db->where('id',$id);
        $query = $this->db->get();
  
        return $query->row();
    }
}