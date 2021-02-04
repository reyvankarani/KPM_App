<?php
	class Tendik extends CI_Controller{
		public function index($alias = NULL){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$unit=$this->tendik_model->cekunit($alias);

			if($unit){
			$data['title'] = 'Daftar Tenaga Kependidikan';
			$data['link'] = $alias;
			$data['tendik'] = $this->tendik_model->get_tendik_by_unit($alias);
			$data1['unit'] = $this->tendik_model->listUnit();
			//$data['tendik2'] = $this->tendik_model->listTendik();
			
			// print_r($unit);
			$this->load->view('templates/header',$data1);
			$this->load->view('tendik/list-tendik',$data);
			$this->load->view('templates/footer');
			}else{
			$this->load->view('pages/404');		
			}
		}

		public function view($alias, $id_tendik = NULL){

			$unit=$this->tendik_model->cekunit($alias);
			
			if($unit){
			$data1['unit'] = $this->tendik_model->listUnit();
			$data['tendik'] = $this->tendik_model->getTendik($id_tendik); 
			$data['nilaitendik'] = $this->tendik_model->getDetDataAKPTendik($id_tendik);
			$data['alias'] = strtolower($alias);

			if(empty($data['tendik'])){
				redirect('pages/404');
			}
			
			// print_r($this->db->last_query()); 
			// print_r($this->db->last_query());

			// print_r($data['tendik']);
			$this->load->view('templates/header',$data1);
			$this->load->view('tendik/view-tendik',$data);
			$this->load->view('templates/footer');
			}else{
			$this->load->view('pages/404');		
			} 
		}


		public function baru($alias = NULL){
			$data['title'] = 'Buat Tenaga Kependidikan Baru';
			$data1['unit'] = $this->tendik_model->listUnit();
			$data1['jabatan'] = $this->jabatan_model->listJabatan();
			
			//$data2['jabatan2'] = $this->tendik_model->get_jabatan_id(3);

			$this->form_validation->set_rules('nama', 'Nama', 'required',array('required' => 'Anda belum memasukan nama'));
			$this->form_validation->set_rules('nik', 'Nik', 'required|callback_check_nik_exists|numeric',
				array(
					'required' => 'Anda belum memasukan nomor induk kepegawaian',
					'numeric' => 'nik harus berbentuk angka'));
			//$this->form_validation->set_rules('jabatan', 'Jabatan', 'required',array('required' => 'Anda belum memasukan jabatan'));
			$this->form_validation->set_rules('id_jabatan','Id_jabatan','required',array('required' => 'Anda belum memilih jabatan'));
			$this->form_validation->set_rules('id_unit','Id_unit','required',array('required' => 'Anda belum 
				memilih unit'));

			
			
			// $abc = $this->tendik_model->getjabatan2();
			
			// print_r($alias);
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header',$data1);
				$this->load->view('tendik/tendik-baru',$data);
				$this->load->view('templates/footer');
			} else {
				$id_unit = $this->input->post('id_unit');
				$selectedunit = $this->tendik_model->get_unit_by_id($id_unit);
				$namaunit = $selectedunit[0]->alias;
				$this->tendik_model->create_tendik();
				redirect('tendik/'.$namaunit); 
			}

		}

		public function fetch_jabatan(){
			$modul = $this->input->post('modul');
			$id_unit = $this->input->post('id');
			if($modul=="jabatan"){
			    $this->load->model('tendik_model');
				echo $this->tendik_model->jabatan($id_unit);
			}	
		}


		public function getjabatan() { 
			$idunit = $this->input->post('id');
			$data = $this->tendik_model->getDataJabatan($idunit);
			$this->output->set_content_type('application/json')->set_output(json_encode($output));
   		}
	

		public function edit($unit, $id_tendik){
			$unit=$this->tendik_model->cekunit($unit);

			if($unit){
			$data1['unit'] = $this->tendik_model->listUnit();
			$data['tendik'] = $this->tendik_model->getTendik($id_tendik);
			$data['jabatan'] = $this->jabatan_model->listJabatan();
			$data['selectedunit'] = $data['tendik']['id_unit'];
			$data['selectedunit2'] = $data['tendik']['id_jabatan'];
			if(empty($data['tendik'])){
				redirect('pages/404');
			}

			$query_unit = $this->db->get('unit'); 
			$query_jabatan = $this->db->get('jabatan'); 

			$unit2[null] = '--Pilih unit--';
			foreach($query_unit->result() as $unt) {
				$unit2[$unt->id_unit] = $unt->nm_unit;
			}

			$jabatan2[null] = '--Pilih jabatan--';
			foreach($query_jabatan->result() as $jbt) {
				$jabatan2[$jbt->id_jabatan] = $jbt->nm_jabatan;
			}
            
            $data['unit1'] = $unit2;
            $data['jabatan1'] = $jabatan2;                  

			
			
			// print_r($data['tendik']);
			//print_r($this->db->last_query());
			$this->load->view('templates/header',$data1);
			$this->load->view('tendik/edit-tendik',$data);
			$this->load->view('templates/footer');
			}else{
			$this->load->view('pages/404');		
			} 
		}
		
		public function update(){
			$this->tendik_model->update_post();
			$this->session->set_flashdata('hapus_success', 'Tenaga Kependidikan telah dihapus.');
			redirect('tendik/'.$this->input->post(alias), 'refresh');
		}

		public function hapus($unit, $id_tendik){
			//echo $id_unit;
			$this->tendik_model->delete_tendik($id_tendik);
			$this->session->set_flashdata('hapus_success', 'Tenaga Kependidikan telah dihapus.');
			redirect('tendik/'.$unit);
		}

		//Mengecek ketersediaan nik
		public function check_nik_exists($nik){
			
			$this->form_validation->set_message('check_nik_exists', 'NIK sudah terdaftar, mohon check data tendik.');
			if($this->tendik_model->check_nik_exists($nik)){
				return true;
			}else{
				return false;
			}
		}

	}