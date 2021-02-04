<?php
	class Unit_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		
		public function getUnit($id_unit = FALSE){
			if($id_unit === FALSE){
				$query = $this->db->get('unit');
				return $query->result_array();
			}

			$query = $this->db->get_where('unit', array('id_unit' => $id_unit));
				
				return $query->row_array();
		}

		public function update_unit(){
			$data = array(
				'nm_unit' => $this->input->post('namaunit'),
			);

			$this->db->where('id_unit', $this->input->post(id_unit));
			return $this->db->update('unit', $data);
		}

		public function delete_unit($id_unit){
			$this->db->where('id_unit', $id_unit);
			$this->db->delete('unit'); 
			return true;
		}

		public function check_nama_exists($nama){
			$query = $this->db->get_where('unit', array('alias' => $nama));
			if(!($query->row_array())){
				return true;
			}else{
				return false;
			}
		}
	}