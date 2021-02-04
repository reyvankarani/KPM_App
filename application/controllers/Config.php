<?php
	class Config extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			is_logged_in();	
		}

		public function index($offset = 0){

			//if(!$this->session->userdata('logged_in')){
				//redirect('users/login');
			//}
			$data['title'] = 'Pengaturan';
			$data['unit'] = $this->tendik_model->listUnit();
			$data['personal']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_personal");

			// print_r($data['personal']);
			$this->load->view('templates/header',$data);
			$this->load->view('config/pengaturan',$data);
			$this->load->view('templates/footer');
		}

		public function edit_nilai(){

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title'] = 'EditNilai';
			$data['unit'] = $this->tendik_model->listUnit();
			$data['personal']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_personal");
			$data['administratif']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_administratif");
			$data['administratif2']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_administratif2");
			$data['administratif3']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_administratif3");
			$data['strukturalmanajerial']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_strukturalmanajerial");
			$data['strukturalmanajerial2']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_strukturalmanajerial2");
			$data['strukturalmanajerial3']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_strukturalmanajerial3");
			$data['penunjang']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang");
			$data['penunjang2']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang2");
			$data['penunjang3']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang3");
			$data['penunjang4']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang4");
			$data['penunjang5']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang5");
			$data['pengabdian']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_pengabdian");
			$data['pengabdian2']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_pengabdian2");


			// print_r($data['administratif2']);
			$this->load->view('templates/header',$data);
			$this->load->view('config/edit-nilai',$data);
			$this->load->view('templates/footer');
		}

		public function edit_variabel($kegiatan, $id){
			// if(!$this->session->userdata('logged_in')){
				// redirect('users/login');
			// }

			// var_dump($id);
			// die;
			$data['id']=$id;
			$data['kegiatan']=$kegiatan;
			$data_personal=$this->nilai_tendik_model->listAspek("kegiatan_tendik_personal");
			$data['variabel']=$this->config_model->editvariabel($kegiatan, $id);

			$data['unit'] = $this->tendik_model->listUnit();

			// print_r($data['variabel']);

			$this->load->view('templates/header',$data);
			$this->load->view('config/edit-variabel',$data);
			$this->load->view('templates/footer');

		}

		public function update_variabel($kegiatan, $id){

			$this->config_model->updatevariabel($kegiatan, $id);
			redirect('config/edit-nilai');
			// var_dump($kegiatan);
			// die;
		}	

		public function personalbaru($kegiatan){


			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['kegiatan']=$kegiatan;

			$this->form_validation->set_rules('variabel', 'Variabel', 'required');
			$this->form_validation->set_rules('bobot', 'Bobot', 'required');
			$this->form_validation->set_rules('nmvar', 'NMVAR', 'required');

			$data['title'] = 'EditPersonal';
			$data['unit'] = $this->tendik_model->listUnit();

			
			$this->load->view('templates/header',$data);
			$this->load->view('config/tambahvariabel',$data);
			$this->load->view('templates/footer');

		}	

		public function simpanvariabel($kegiatan){
			$this->config_model->create_variabel($kegiatan);
			redirect('config/edit-nilai');
		}

		public function akun(){
			$data['unit'] = $this->tendik_model->listUnit();

			$this->load->view('templates/header', $data);
			$this->load->view('config/roles',$data);
			$this->load->view('templates/footer');
		}	
	}	