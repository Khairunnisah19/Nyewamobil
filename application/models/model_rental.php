<?php
class model_rental extends CI_Model 
{

	function __construct() {
	}
	function get_provinsi() {
		$q = $this->db->get('provinsi');
		return $q;
	}
	function get_kota($id) {
		$q = $this->db->query("SELECT * FROM kota WHERE id_provinsi = ?", array($id));
		return $q;
	}
	function get_kecamatan($id) {
		$q = $this->db->query("SELECT * FROM kecamatan WHERE id_kota = ?", array($id));
		return $q;
	}
	function get_kelurahan($id) {
		$q = $this->db->query("SELECT * FROM kelurahan WHERE id_kecamatan = ?", array($id));
		return $q;
	}
}