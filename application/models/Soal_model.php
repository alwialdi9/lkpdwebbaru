<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_model extends Ci_Model {

   function Ambil() {
     $data = $this->db->query('SELECT * FROM tb_soal');
      return $data->result_array();
  }

  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Edit($id)
  {
    $data = $this->db->query("SELECT * FROM tb_soal WHERE id = $id");
    return $data->result_array();
  }

   function Update($id)
  {
    $this->db->where($id);
    $this->db->update($id);
  }

  function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }


  // public function tampil_data()
  // {
  //   return $this->db->get('tb_soal');
  // }
  public function AmbilJawaban($kode = 0) {
    $data = $this->db->query("select * from soal where id = '$kode'")->result_array();
    return $data[0]['kunci'];
  }

}