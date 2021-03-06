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

  public function getSoalById($id)
  {
    $data = $this->db->get_where('tb_soal', ['id' => $id])->row_array();
    return $data;
  }

   function Update($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function Hapus($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
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
?>