<?php
class model_testimoni extends CI_Model 
{
	function __construct() {
		$this->load->database();
	}
	function get_testimoni(){
		$query = $this->db->get('testimoni');
		if ($query->num_rows() > 0) {
			return $query;			
		}
	}
}