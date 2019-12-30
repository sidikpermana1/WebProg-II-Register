<?php 
/**
 * 
 */
class m_login extends CI_model{
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}		
}
?>