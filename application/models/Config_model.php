<?php
	class Config_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

	public function create_variabel($kegiatan){

			$data = array(
				'nm_tendik_'.$kegiatan => $this->input->post('variabel'),
				'tendik_bobot_nilai' => $this->input->post('bobot'),
				'tendik_nm_var' => $this->input->post('nmvar')
			);
			
			return $this->db->insert('kegiatan_tendik_'.$kegiatan, $data);
	}

	public function editvariabel($kegiatan, $id){

			
			$query = $this->db->get_where('kegiatan_tendik_'.$kegiatan, array('id_tendik_'.$kegiatan => $id));
				
				return $query->row_array();

	}

	public function updatevariabel($kegiatan, $id){
			
			$variabel = $this->input->post('variabel');
			$bobot = $this->input->post('bobot');
			$nm_var = $this->input->post('nmvar');

			$this->db->set('nm_tendik_'.$kegiatan, $variabel);
			$this->db->set('tendik_bobot_nilai', $bobot);
			$this->db->set('tendik_nm_var', $nm_var);
			$this->db->where('id_tendik_'.$kegiatan, $id);
			$this->db->update('kegiatan_tendik_'.$kegiatan);
	}
}