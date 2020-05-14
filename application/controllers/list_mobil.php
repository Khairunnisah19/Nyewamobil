<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class list_mobil extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('model_mobil');
			$this->load->library('pagination');
			$config['per_page'] = 6;
			//$config['num_links'] = 9;
			$config['total_rows'] = $this->model_mobil->jumlah_mobil1();
			$config['base_url'] = base_url().'index.php/list_mobil/mobil1';
			$this->pagination->initialize($config);

		}
		function mobil1() {
			$data['results'] = $this->model_mobil->fetch_mobil1(6, $this->uri->segment(3));
			$data['hal'] = $this->pagination->create_links();
			$this->load->view('v_sub_menu');
			$this->load->view('v_header');
			$this->load->view("daftar_mobil", $data);
			$this->load->view('v_footer');
		}
}