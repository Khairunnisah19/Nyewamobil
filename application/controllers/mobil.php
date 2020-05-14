<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mobil extends CI_Controller 
	{
		function __construct(){
			parent::__construct();
			/*$this->load->model('files_model');
			$this->config =  array(
                  'upload_path'     => dirname($_SERVER["SCRIPT_FILENAME"]).'resource/img_mobil/',
                  'upload_url'      => base_url()."resource/img_mobil/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'overwrite'       => TRUE,
                  'max_size'        => "1000KB",
                  'max_height'      => "768",
                  'max_width'       => "1024"  
                );
			*/
		}
		function index(){
		//	$this->load->view('upload');
		}
		function listmobil($id){
			//$id = $this->input->post('id_user');
			$this->load->model('model_mobil');
			$data['datamobil'] = $this->model_mobil->get_mobiluser($id, 6, $this->uri->segment(4));
			$data['hal'] = $this->pagination->create_links();
			$this->load->view('v_sub_menu');
			$this->load->view('v_header');
			$this->load->view('profil_list_mobil', $data);
			$this->load->view('v_footer');
		}
		function detailmobil(){
			$this->load->view('v_sub_menu');
			$this->load->view('v_header');
			$this->load->view('detailmobil');
			$this->load->view('v_footer');
		}
		function parkirmobil(){
			$this->load->view('v_sub_menu');
			$this->load->view('v_header');
			$this->load->view('parkirmobil');
			$this->load->view('v_footer');
		}
	}