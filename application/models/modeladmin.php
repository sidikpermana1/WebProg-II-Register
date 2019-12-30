<?php 
/**
 * 
 */
class modeladmin extends CI_model
{
	function tambah($table, $data){
		$this->db->insert($table, $data);
	}	

	function tampil(){
		return $this->db->get('data_mahasiswa')->result();
	}

	function hapus($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
 ?>