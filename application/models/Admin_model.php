<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends Ci_Model {

	public function ubahWaktu()
	{
		$data = [
			'waktu' => $this->input->post('waktu'),
		];
		$this->db->where('id',$this->input->post('id'));
		return $this->db->update('tb_timer',$data);
	}
}