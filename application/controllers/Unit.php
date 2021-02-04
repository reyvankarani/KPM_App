<?php
	class Unit extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			is_logged_in();	
		}

		public function index($offset = 0){
			// Pagination config
			$config['base_url'] = base_url() . 'unit/index/';			
			$config['total_rows'] = $this->db->count_all('unit');
			$config['per_page'] = 5;
			$config['url_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination'); 

			// Init pagination
			$this->pagination->initialize($config);

			//if(!$this->session->userdata('logged_in')){
				//redirect('users/login');
			//}
			$data['title'] = 'Daftar Unit';
			$data['unit'] = $this->tendik_model->listUnit($config['per_page'], $offset);

			$this->load->view('templates/header',$data);
			$this->load->view('unit/list-unit',$data);
			$this->load->view('templates/footer');
		}

		public function baru($alias = NULL){
			$data['title'] = 'Buat Unit Baru';
			$data1['unit'] = $this->tendik_model->listUnit();

			$this->form_validation->set_rules('nama', 'Nama', 'required|callback_check_nama_exists');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header',$data1);
				$this->load->view('unit/unit-baru',$data);
				$this->load->view('templates/footer');
			} else {
				$this->tendik_model->create_unit();
				redirect('unit');
				}	 
			}

		public function ubah($id_unit){
			$data1['unit'] = $this->tendik_model->listUnit();
			$data['getunit'] = $this->unit_model->getUnit($id_unit);
			

			if(empty($data['getunit'])){
				redirect('pages/error');
			}
			
			print_r($data['getunit']);
			//print_r($this->db->last_query());
			$this->load->view('templates/header',$data1);
			$this->load->view('unit/edit-unit',$data);
			$this->load->view('templates/footer'); 
		}

		public function update(){
			$this->unit_model->update_unit();
			redirect('unit');
		}

		public function hapus($id_unit){
			//echo $id_unit;
			$this->unit_model->delete_unit($id_unit);
			redirect('unit');
		}

		//Mengecek ketersediaan nama unit
		public function check_nama_exists($nama){
			$nama1 = strtolower($nama);
			$this->form_validation->set_message('check_nama_exists', 'Nama unit sudah terpakai, mohon ubah nama unit.');
			if($this->unit_model->check_nama_exists($nama1)){
				return true;
			}else{
				return false;
			}
		}


}