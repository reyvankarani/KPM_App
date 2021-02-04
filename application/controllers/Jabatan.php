<?php
	class Jabatan extends CI_Controller{
		public function index(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title'] = 'Daftar Jabatan';
			$data['jabatan'] = $this->jabatan_model->listJabatan();
			$data['unit'] = $this->tendik_model->listUnit();

			$this->load->view('templates/header',$data);
			$this->load->view('jabatan/list-jabatan',$data);
			$this->load->view('templates/footer');
		}
	

		public function baru($alias = NULL){
			$data['title'] = 'Buat Unit Baru';
			$data1['unit'] = $this->tendik_model->listUnit();

			$this->form_validation->set_rules('namajabatan', 'Namajabatan', 'required|callback_check_jabatan_exists');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header',$data1);
				$this->load->view('jabatan/jabatan-baru',$data);
				$this->load->view('templates/footer');
			} else {
				$this->jabatan_model->create_jabatan();
				redirect('jabatan');
				}	 
			}

		public function ubah($id_jabatan){
			$data1['unit'] = $this->tendik_model->listUnit();
			$data['getjabatan'] = $this->jabatan_model->getJabatan($id_jabatan);
			

			if(empty($data['getjabatan'])){
				redirect('pages/error');
			}
			
			print_r($data['getjabatan']);
			//print_r($this->db->last_query());
			$this->load->view('templates/header',$data1);
			$this->load->view('jabatan/edit-jabatan',$data);
			$this->load->view('templates/footer'); 
		}

		public function update(){
			$this->jabatan_model->update_jabatan();
			redirect('jabatan');
		}

		public function hapus($id_jabatan){
			//echo $id_unit;
			$this->jabatan_model->delete_jabatan($id_jabatan);
			redirect('jabatan');
		}

		//Mengecek ketersediaan nama jabatan
		public function check_jabatan_exists($namajabatan){
			$namajabatan1 = strtolower($namajabatan);
			$this->form_validation->set_message('check_jabatan_exists', 'Nama jabatan sudah ada, mohon ubah nama jabatan.');
			if($this->jabatan_model->check_jabatan_exists($namajabatan1)){
				return true;
			}else{
				return false;
			}
		}

	}