<?php
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);
			$data['unit']=$this->tendik_model->listUnit();
			$data['tendik']=$this->tendik_model->listTendik();
			$data['user']=$this->db->get_where('users', ['username' =>$this->session->userdata('username')])->row_array();
			$data['user2']=$this->session->userdata('role_id');

			//print_r($data['user2']);
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page);
			$this->load->view('templates/footer');
		}

		public function error(){
			$this->load->view('pages/404');
		}
	}
