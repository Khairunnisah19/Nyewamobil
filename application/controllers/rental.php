<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rental extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('model_rental');
	}
	function registrasirental(){
		$data['provinsi'] = $this->model_rental->get_provinsi();
		$this->load->view('v_sub_menu');
		$this->load->view('v_header');
		$this->load->view('registrasirental', $data);
		$this->load->view('v_footer');
	}
	
	function get_kota($id){
		$q = $this->model_rental->get_kota($id);
		echo "<option >- Pilih Kota -</option>";
		foreach($q->result_array() as $row){
			echo "<option value='".$row['id']."'>".$row['nama']."</option>";
		}
	}
	function get_kecamatan($id){
		$q = $this->model_rental->get_kecamatan($id);
		echo "<option >- Pilih Kecamatan -</option>";
		foreach($q->result_array() as $row){
			echo "<option value='".$row['id']."'>".$row['nama']."</option>";
		}
	}
	function get_kelurahan($id){
		$q = $this->model_rental->get_kelurahan($id);
		echo "<option >- Pilih Kelurahan -</option>";
		foreach($q->result_array() as $row){
			echo "<option value='".$row['id']."'>".$row['nama']."</option>";
		}
	}
	function insert_rental() {
		//$this->load->helper('input_helper');			
		$params=array(
			ifunsetempty($_POST,'nama_depan',NULL),
			ifunsetempty($_POST,'nama_belakang',NULL),
			ifunsetempty($_POST,'email',NULL),
			ifunsetempty($_POST,'telp',NULL),
			ifunsetempty($_POST,'username',NULL),
			ifunsetempty($_POST,'password',NULL)
		);
		$this->load->model('model_user');
		$q = $this->model_user->insert_user($params);
		if($q){
			echo json_encode(array('success'=>TRUE));
		}else{
			echo json_encode(array('success'=>FALSE));
		}
	}
}