<?php
	class Jabatan_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function listJabatan(){
			$this->db->order_by('nm_jabatan', 'ASC');
			$query = $this->db->get('jabatan');
			return $query->result_array();
		}
	

		public function create_jabatan(){
				$slug = ($this->input->post('namajabatan'));

				$data = array(
					'nm_jabatan' => $this->input->post('namajabatan'),
					'aliasjabatan' => $slug
				);

				return $this->db->insert('jabatan', $data);
		}

		public function update_jabatan(){
			$data = array(
				'nm_jabatan' => $this->input->post('namajabatan'),
			);

			$this->db->where('id_jabatan', $this->input->post(id_jabatan));
			return $this->db->update('jabatan', $data);
		}

		public function getJabatan($id_jabatan = FALSE){
			if($id_jabatan === FALSE){
				$query = $this->db->get('jabatan');
				return $query->result_array();
			}

			$query = $this->db->get_where('jabatan', array('id_jabatan' => $id_jabatan));
				
				return $query->row_array();
		}

		public function delete_jabatan($id_jabatan){
			$this->db->where('id_jabatan', $id_jabatan);
			$this->db->delete('jabatan'); 
			return true;
		} 

		public function check_jabatan_exists($namajabatan){
			$query = $this->db->get_where('jabatan', array('aliasjabatan' => $namajabatan));
			if(!($query->row_array())){
				return true;
			}else{
				return false;
			}
		}

	}