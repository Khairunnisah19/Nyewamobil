<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class peta extends CI_Controller {
		function __construct(){
			parent::__construct();

		}
		function peta_() {
			$this->load->view('v_sub_menu');
			$this->load->view('v_header');
			$this->load->view('v_peta');
			$this->load->view('v_footer');
		}
}