<?php
	class Tendik_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function getTendik($id_tendik = FALSE){
			// if($id_tendik === FALSE){
			// 	$query = $this->db->get('tendik');
			// 	return $query->result_array();
			// }

			$this->db->join('unit', 'unit.id_unit = tendik.id_unit');
			$this->db->join('jabatan', 'jabatan.id_jabatan = tendik.id_jabatan');
			$query = $this->db->get_where('tendik', array('id_tendik' => $id_tendik));
				
			return $query->row_array();
		}

		public function listTendik(){
			$this->db->order_by('nm_tendik', 'ASC');
			$this->db->join('unit', 'unit.id_unit = tendik.id_unit');
			$query = $this->db->get('tendik');
			return $query->result_array();
		}

		public function listUnit($limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset); 
			}

			$this->db->order_by('nm_unit', 'ASC');
			$query = $this->db->get('unit');
			return $query->result_array();
		}

		public function get_tendik_by_unit($alias){
			$this->db->order_by('tendik.id_tendik', 'DESC');

			$this->db->join('unit', 'tendik.id_unit = unit.id_unit');
			$this->db->join('jabatan', 'tendik.id_jabatan = jabatan.id_jabatan');
				$query = $this->db->get_where('tendik', array('alias' => $alias));
				return $query->result_array();

		}

		public function create_tendik(){

			$data = array(
				'nik' => $this->input->post('nik'),
				'nm_tendik' => $this->input->post('nama'),
				'id_jabatan' => $this->input->post('id_jabatan'),
				'id_unit' => $this->input->post('id_unit')
			);
			
			return $this->db->insert('tendik', $data);
		}

		public function get_unit(){
			$this->db->order_by('nm_unit'); 
			$query = $this->db->get('unit');
			return $query->result_array();
		}

		public function get_unit_by_id($id_unit){
		   $query = $this->db->get_where('unit', array('id_unit'=>$id_unit))->result();
		   return $query;

		}

		// public function getDataJabatan($idunit){ 
 	// 	'id_unit'=>$idunit))->result();
		//    return $query;
  //  		}

   		public function getjabatan2() { 
			$idunit = '4';
			$data = $this->tendik_model->getDataJabatan($idunit);
			var_dump($data);
			die;
		}


		public function create_unit(){
			$slug = strtolower($this->input->post('nama'));

			$data = array(
				'nm_unit' => $this->input->post('nama'),
				'alias' => $slug
			);

			return $this->db->insert('unit', $data);
		}

		public function cekunit($alias){
			$query=$this->db->get_where('unit',  array('alias' => $alias));
			return $query->result_array();
		}

		public function update_post(){
			//$data = array(
				//'nm_tendik' => $this->input->post('nama'),
				//'jabatan' => $this->input->post('jabatan')
			//);

			//$this->db->where('id_tendik', $this->input->post(id_tendik));
			//return $this->db->update('tendik', $data);

			$id_tendik = $this->input->post('id_tendik');
			$nm_tendik = $this->input->post('nama');
			$nik = $this->input->post('nik');
			$id_jabatan = $this->input->post('jabatan');
			$id_unit = $this->input->post('unit');

			$this->db->set('id_unit', $id_unit);
			$this->db->set('nik', $nik);
			$this->db->set('nm_tendik', $nm_tendik);
			$this->db->set('id_jabatan', $id_jabatan);
			$this->db->where('id_tendik', $id_tendik);
			$this->db->update('tendik');

			redirect('tendik/'.$this->input->post(alias));
		}

		public function jabatan($id_unit)
		{
			$query = $this->db->get_where('jabatan', array('id_unit' => $id_unit));
			foreach ($query->result_array() as $row) {
				$tampilkan = "<option value='".$row['id_jabatan']."'>".$row['nm_jabatan']."</option>";
			}
			return $tampilkan;
			
		}

		public function delete_tendik($id_tendik){
			$this->db->where('id_tendik', $id_tendik);
			$this->db->delete('tendik'); 
			return true;
		}

		public function getDetDataAKPTendik($id_tendik){
			// $id_akp = $this->nilai_tendik_model->getIDAKP($link);

			// $query=$this->db->query("SELECT * FROM det_identitas_data_rekap_tendik WHERE id_akp = $id_akp AND is_done = 1");

			$user = $this->db->get_where('det_identitas_data_rekap_tendik', ['id_tendik' => $id_tendik, 'is_done' => 1])->result_array();
			if(empty($user)){
				return array();
			} else {
				

			for ($i=0; $i < count($user); $i++) {
				
				$data[$i] = array
					('id_tendik' 	=> $user[$i]['id_tendik'],
					 'periode' 		=> $user[$i]['periode'],
					 'link' 		=> $user[$i]['akp'] 
					);

			}
			
			return $data;

			}

		}

		public function check_nik_exists($nik){
			$query = $this->db->get_where('tendik', array('nik' => $nik));
			if(!($query->row_array())){
				return true;
			}else{
				return false;
			}
		}	

	}