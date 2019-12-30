<?php 
/**
 * 
 */
class m_register extends CI_model{
	function tambah($table,$where){		
		return $this->db->get_where($table,$where);
	}		
}
?>