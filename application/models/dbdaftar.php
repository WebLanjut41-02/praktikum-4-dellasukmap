<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class dbdaftar extends CI_Model{
	public function inputdaftar($data){
		$this->db->insert('daftar',$data);
	}

	function tampil_data(){
		return $this->db->get('daftar');
	}

	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}

}







 ?>