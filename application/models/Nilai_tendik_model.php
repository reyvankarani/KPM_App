<?php
	class Nilai_tendik_model extends CI_Model{
		function __construct(){
			$this->load->database();
		}

		public function listakp(){
			$this->db->order_by('nm_akp', 'ASC');
			$query = $this->db->get('akp_tendik');
			return $query->result_array();
		}

		
		public function getAKP($link = FALSE){
			if($link === FALSE){
				$query = $this->db->get('akp_tendik');
				return $query->result_array();
			}
			//Query
			$query=$this->db->get_where('akp_tendik', array('link' => $link));
			return $query->row_array();
		}

		public function getPeriode($link = FALSE){
			if($link === FALSE){
				$query = $this->db->get('akp_tendik');
				return $query->result_array();
			}
			//Query
			$query=$this->db->get_where('akp_tendik', array('link' => $link));
			return $query->result_array();
		}

		public function getTendikRekap($link, $id){
			$id_tendik_rekap = $this->nilai_tendik_model->getIDRekap($link, $id);
			//Query
			$query=$this->db->get_where('data_tendik_rekap', array('id_tendik_rekap' => $id_tendik_rekap));
			return $query->result_array();
		}

		public function cekunit($alias){
			$query=$this->db->get_where('unit',  array('alias' => $alias));
			return $query->result_array();
		}

		public function cekakp($link){
			$query=$this->db->get_where('akp_tendik',  array('link' => $link));
			if($query){
			return $query->result_array();
			} else{
			return null;
			}

		}
		
		public function getTendik($alias = FALSE){
			$this->db->join('unit', 'tendik.id_unit = unit.id_unit');
			$this->db->join('jabatan', 'tendik.id_jabatan = jabatan.id_jabatan');
			$query=$this->db->get_where('tendik',  array('alias' => $alias));
			return $query->result_array();
		}

		public function getTendik2($link = FALSE, $id_tendik = FALSE){
			$id_akp = $this->nilai_tendik_model->getIDAKP($link);
			
			$query = $this->db->get_where('det_identitas_data_rekap_tendik', ['id_tendik' => $id_tendik, 'id_akp' => $id_akp]);
				
			return $query->row_array();
		}


		public function getTendikData($link = FALSE, $alias = FALSE){

			$id_akp = $this->nilai_tendik_model->getIDAKP($link);
			$query=$this->db->get_where('det_identitas_data_rekap_tendik', ['unit' => $alias, 'id_akp' => $id_akp]);
			return $query->result_array();
			

		}

		public function getDataTendikNot($link = FALSE, $alias = FALSE){
			$sql = "SELECT * FROM tendik JOIN unit ON tendik.id_unit = unit.id_unit
										JOIN jabatan ON tendik.id_jabatan = jabatan.id_jabatan
										WHERE alias = '$alias' AND NOT EXISTS
										(SELECT * FROM det_identitas_data_rekap_tendik
										JOIN akp_tendik ON det_identitas_data_rekap_tendik.id_akp = akp_tendik.id_akp
										WHERE link = '$link' AND tendik.id_tendik = det_identitas_data_rekap_tendik.id_tendik)";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function deleteTendikList($id){
			$this->db->where('id_tendik', $id);
			$this->db->delete('det_identitas_data_rekap_tendik');
			return true;
		}

		public function deleteAllTendikList($link){
			$id_akp = $this->nilai_tendik_model->getIDAKP($link);
			$this->db->where('id_akp', $id_akp);
			$this->db->delete('det_identitas_data_rekap_tendik');
			return true;
		}

		public function deleteAllAspekAKP($link, $aspek){
			$id_akp = $this->nilai_tendik_model->getIDAKP($link);
			$this->db->where('id_akp', $id_akp);
			$this->db->delete('aspek_akp_tendik_'.$aspek);
			return true;
		}

		public function getDetDataAllTendik($link){
			$id_akp = $this->nilai_tendik_model->getIDAKP($link);

			// $query=$this->db->query("SELECT * FROM det_identitas_data_rekap_tendik WHERE id_akp = $id_akp AND is_done = 1");

			$user = $this->db->get_where('det_identitas_data_rekap_tendik', ['id_akp' => $id_akp, 'is_done' => 1])->result_array();
			if(empty($user)){
				return array();
			} else {
				

			for ($i=0; $i < count($user); $i++) {
				$id_tendik = $user[$i]['id_tendik'];

				$id_rekap = $this->nilai_tendik_model->getIDRekap($link, $id_tendik);

				$query=$this->db->query("SELECT * FROM det_total_data_rekap WHERE id_rekap = $id_rekap");
				$total=$query->first_row()->{'total1plus2'};
				$kuranglebih=$query->first_row()->{'nilaikuranglebih'};
				
				$data[$i] = array
					('id_tendik' 	=> $id_tendik,
					 'nm_tendik' 	=> $user[$i]['nm_tendik'],
					 'unit' 	 	=> $user[$i]['unit'],
					 'jabatan' 	 	=> $user[$i]['jabatan'],
					 'total'	 	=> $total,
					 'kuranglebih'  => $kuranglebih
					);

			}
			
			return $data;

			}
		}


		public function listAspek($kegiatan){
			$query=$this->db->query("SELECT * FROM $kegiatan");
			if($query->num_rows()>0){
				return $query->result_array();
			}else{
				return array();
			}
		}

		public function createAKP($angka){
			//data array 
			$data = array(
				'nm_akp' => 'AKP '.strtoupper($this->input->post('nm_akp')),
				'urutan' => strtoupper($this->input->post('nm_akp')),
				'angka' => $angka,
				'periode_awal' => $this->input->post('thn-periode1').'-'.$this->input->post('bln-periode1').'-'.'01',
				'periode_akhir' => $this->input->post('thn-periode2').'-'.$this->input->post('bln-periode2').'-'.'01',
				'tgl_penilaian' => $this->input->post('thn-penilaian').'-'.$this->input->post('bln-penilaian').'-'.$this->input->post('tgl-penilaian'),
				'kepala_kpm' => $this->input->post('kepala_kpm'),
				'link' => strtolower($this->input->post('nm_akp'))
				);
			//Menambah data
			return $this->db->insert('akp_tendik', $data);
		}

		public function updatePeriode($angka){
			//data array 
			$data = array(
				'nm_akp' => 'AKP '.strtoupper($this->input->post('nm_akp')),
				'urutan' => strtoupper($this->input->post('nm_akp')),
				'angka' => $angka,
				'periode_awal' => $this->input->post('thn-periode1').'-'.$this->input->post('bln-periode1').'-'.'01',
				'periode_akhir' => $this->input->post('thn-periode2').'-'.$this->input->post('bln-periode2').'-'.'01',
				'tgl_penilaian' => $this->input->post('thn-penilaian').'-'.$this->input->post('bln-penilaian').'-'.$this->input->post('tgl-penilaian'),
				'kepala_kpm' => $this->input->post('kepala_kpm'),
				'link' => strtolower($this->input->post('nm_akp'))
				);
			//Menambah data
			$this->db->where('link', $this->input->post('link_hidden'));
			$update = $this->db->update('akp_tendik', $data);
			return $update;
		}

		public function updateAspekPeriode(){
			//data
			//data
			$id_akp = $this->nilai_tendik_model->getIDAKP($_POST["nm_akp"]);
			$personaltendik = implode(", ", $_POST["personaltendik"]);
			$administratiftendik = implode(", ", $_POST["administratiftendik"]);
			$strukturalmanajerialtendik = implode(", ", $_POST["strukturalmtendik"]);
			$penunjangtendik = implode(", ", $_POST["penunjangtendik"]);
			$pengabdiantendik = implode(", ", $_POST["pengabdiantendik"]);
			//array
			$data = array(
				'id_akp' => $id_akp,
				'id_personal_tendik' => $personaltendik,
				'id_administratif_tendik' => $administratiftendik,
				'id_strukturalmanajerial_tendik' => $strukturalmanajerialtendik,
				'id_penunjang_tendik' => $penunjangtendik,
				'id_pengabdian_tendik' => $pengabdiantendik,);
			//Menambah data
			$this->db->where('id_akp', $id_akp);
			return $this->db->update('aspek_akp_tendik', $data);
		}

		public function deleteAKP($link){
			$this->db->where('link', $link);
			$this->db->delete('akp_tendik');
			return true;
		}

		public function addDetailTendik($link, $alias, $id){
			//ID Rekap
			// $id_rekap = $this->nilai_tendik_model->getIDRekap($link, $id);
			$data_tendik = $this->tendik_model->getTendik($id);
			$data_akp = $this->nilai_tendik_model->getAKP($link);
			$data = array(
			'id_akp' => $data_akp['id_akp'],
			'id_tendik' => $data_tendik['id_tendik'],
			'nik' => $data_tendik['nik'],
			'nm_tendik' => $data_tendik['nm_tendik'],
			'unit' => $data_tendik['nm_unit'],
			'jabatan' => $data_tendik['nm_jabatan'],
			'akp' => $data_akp['link'],
			'periode' => $this->converter_model->bulanConverter($data_akp['periode_awal']).' - '.$this->converter_model->bulanConverter($data_akp['periode_akhir']).' ('.$data_akp['urutan'].')',
			'is_done' => 0
			);
			$insert = $this->db->insert('det_identitas_data_rekap_tendik', $data);
			return $insert;
		}

		public function getIDAKP($link = FALSE){
			$v1 = strtoupper($link);
			$v2 = $this->converter_model->romanToDecimal($v1);
			$this->db->select('id_akp');
		    $this->db->from('akp_tendik');
		    $this->db->where('angka', $v2);
			$query = $this->db->get();
			$id_akp = $query->first_row()->id_akp;
			return $id_akp;
		}

		public function insertAspekAKP2(){
			//data
			$id_akp = $this->nilai_tendik_model->getIDAKP($_POST["nm_akp"]);
			$personaltendik = implode(", ", $_POST["personaltendik"]);
			$administratiftendik = implode(", ", $_POST["administratiftendik"]);
			$strukturalmanajerialtendik = implode(", ", $_POST["strukturalmtendik"]);
			$penunjangtendik = implode(", ", $_POST["penunjang"]);
			$pengabdiantendik = implode(", ", $_POST["pengabdian"]);
			//array
			$data = array(
				'id_akp' => $id_akp,
				'id_personal_tendik' => $personaltendik,
				'id_administratif_tendik' => $administratiftendik,
				'id_strukturalmanajerial_tendik' => $strukturalmanajerialtendik,
				'id_penunjang_tendik' => $penunjangtendik,
				'id_pengabdian_tendik' => $pengabdiantendik,);
			//Menambah data
			return $this->db->insert('aspek_akp_tendik', $data);
		}

		public function insertAspekAKP($data_aspek, $aspek){
			//id akp
			$id_akp = $this->nilai_tendik_model->getIDAKP($_POST["nm_akp"]);
			//data
			if($aspek == 'penunjang' || $aspek == 'penunjang2' || $aspek == 'penunjang3' || $aspek == 'penunjang3' || $aspek == 'penunjang4' || $aspek == 'penunjang5' || $aspek == 'pengabdian' || $aspek == 'pengabdian2'){
				for ($i=0; $i < count($data_aspek); $i++) {
				$id_tendik[$i] = $data_aspek[$i]['id_tendik_'.$aspek];
				$nm_tendik[$i] = $data_aspek[$i]['nm_tendik_'.$aspek];
    			}
    			$id_aspek_tendik = implode(", ", $id_tendik);
				$nm_aspek_tendik = implode(", ", $nm_tendik);
			//array
			$data = array(
				'id_akp' => $id_akp,
				'id_'.$aspek.'_tendik' => $id_aspek_tendik,
				'nm_'.$aspek.'_tendik' => $nm_aspek_tendik
				);
			}else {
			for ($i=0; $i < count($data_aspek); $i++) {
				$id_tendik[$i] = $data_aspek[$i]['id_tendik_'.$aspek];
				$nm_tendik[$i] = $data_aspek[$i]['nm_tendik_'.$aspek];
				$bobot_tendik[$i] = $data_aspek[$i]['tendik_bobot_nilai'];
				$nm_var_tendik[$i] = $data_aspek[$i]['tendik_nm_var'];
    			}
			$id_aspek_tendik = implode(", ", $id_tendik);
			$nm_aspek_tendik = implode(", ", $nm_tendik);
			$bobot_aspek_tendik = implode(", ", $bobot_tendik);
			$nmvar_aspek_tendik = implode(", ", $nm_var_tendik);
			
			$data = array(
				'id_akp' => $id_akp,
				'id_'.$aspek.'_tendik' => $id_aspek_tendik,
				'nm_'.$aspek.'_tendik' => $nm_aspek_tendik,
				'bobot_'.$aspek.'_tendik' => $bobot_aspek_tendik,
				'nmvar_'.$aspek.'_tendik' => $nmvar_aspek_tendik,
				);
			}
			//Menambah data
			return $this->db->insert('aspek_akp_tendik_'.$aspek , $data);
		}

		public function getIDRekap($link, $id){
			$id_akp = $this->nilai_tendik_model->getIDAKP($link);
			$sql = "SELECT id_tendik_rekap FROM data_tendik_rekap WHERE id_akp = '$id_akp' AND id_tendik = '$id'";

			$query = $this->db->query($sql);
			return $query->first_row()->id_tendik_rekap;
		}

		public function getDataRekap($link, $alias, $id, $kegiatan){
			$id_rekap = $this->nilai_tendik_model->getIDRekap($link, $id);
			$tabel = 'det_'.$kegiatan.'_tendik_data_rekap';
			$sql = "SELECT * FROM data_tendik_rekap
					JOIN ".$tabel." ON data_tendik_rekap.id_tendik_rekap = ".$tabel.".id_tendik_rekap
					WHERE data_tendik_rekap.id_tendik_rekap = '$id_rekap'";
			$query = $this->db->query($sql);
			return $query->row_array();
		}

		public function deleteNilai($link, $id){
			$id = $this->nilai_tendik_model->getIDRekap($link, $id);
			$this->db->query("DELETE FROM data_tendik_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_personal_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_administratif_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_administratif2_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_administratif3_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_strukturalmanajerial_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_strukturalmanajerial2_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_strukturalmanajerial3_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_penunjang_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_penunjang2_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_penunjang3_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_penunjang4_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_penunjang5_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_pengabdian_tendik_data_rekap WHERE id_tendik_rekap = $id");
			$this->db->query("DELETE FROM det_pengabdian2_tendik_data_rekap WHERE id_tendik_rekap = $id");

			$this->db->query("DELETE FROM det_total_data_rekap WHERE id_rekap = $id");

			
			return true;
		}

		public function addDataRekap($link, $id){
			$id_tendik = $id;
			$id_akp = $this->nilai_tendik_model->getIDAKP($link);
			$penilai = $_POST['penilai'];
			$mengetahui = $_POST['mengetahui'];
			$tanggal = $this->nilai_tendik_model->getAKP($link);
			//data array 
			$data = array(
				'id_tendik' =>  $id_tendik,
				'id_akp' => $id_akp,
				'penilai' => $this->input->post('penilai'),
				'mengetahui' => $this->input->post('mengetahui'),
				'tgl_penilaian' => date('d',strtotime($tanggal['tgl_penilaian'])).' '.$this->converter_model->bulanConverter($tanggal['tgl_penilaian'])
				);
			//Menambah data
			$insert = $this->db->insert('data_tendik_rekap', $data);
			return $insert;
		}

		public function updateDataRekap($link, $id){
			$id_tendik_rekap = $this->nilai_tendik_model->getIDRekap($link, $id);
			$id = $id;
			$id_akp = $this->nilai_tendik_model->getIDAKP($link);
			$penilai = $_POST['penilai'];
			$tanggal = $this->nilai_tendik_model->getAKP($link);
			//data array 
			$data = array(
				'id_tendik' =>  $id,
				'id_akp' => $id_akp,
				'penilai' => $this->input->post('penilai'),
				'mengetahui' => $this->input->post('mengetahui'),
				'tgl_penilaian' => date('d',strtotime($tanggal['tgl_penilaian'])).' '.$this->converter_model->bulanConverter($tanggal['tgl_penilaian'])
				);
			//Menambah data
			$this->db->where('id_tendik_rekap', $id_tendik_rekap);
			$insert = $this->db->update('data_tendik_rekap', $data);
			return $insert;
		}

		public function getAspekAKP($link = FALSE, $id_kegiatan){
			//data
			$id_akp = $this->nilai_tendik_model->getIDAKP($link);
			
			//query
			$query=$this->db->query("SELECT * FROM aspek_akp_tendik WHERE id_akp = '$id_akp'");
			$resultquery=$query->first_row()->$id_kegiatan;
			//explode
			$data=explode(', ', $resultquery);
			//Menambah data
			return $data;
		}

		public function getAspekAKP2($link = FALSE, $kegiatan){
			//data

			$id_akp = $this->nilai_tendik_model->getIDAKP($link);
			// $personal = 'personal';

			//query
			$query=$this->db->query("SELECT * FROM aspek_akp_tendik_$kegiatan WHERE id_akp = $id_akp");

			if($kegiatan == 'penunjang' || $kegiatan == 'penunjang2' || $kegiatan == 'penunjang3' || $kegiatan == 'penunjang3' || $kegiatan == 'penunjang4' || $kegiatan == 'penunjang5' || $kegiatan == 'pengabdian' || $kegiatan == 'pengabdian2'){

				$id_aspek_tendik = 'id_'.$kegiatan.'_tendik';
				$resultquery=$query->first_row()->$id_aspek_tendik;


				$nm_aspek_tendik = 'nm_'.$kegiatan.'_tendik';
				$resultquery2=$query->first_row()->$nm_aspek_tendik;						

				//explode
				$data1=explode(', ', $resultquery);
				$data2=explode(', ', $resultquery2);


				for ($i=0; $i < count($data1) ; $i++) {
				$data[$i] = array
					('id_tendik_'.$kegiatan => $data1[$i],
					 'nm_tendik_'.$kegiatan => $data2[$i]
					);
				};	

			} else {

			$id_aspek_tendik = 'id_'.$kegiatan.'_tendik';
			$resultquery=$query->first_row()->$id_aspek_tendik;


			$nm_aspek_tendik = 'nm_'.$kegiatan.'_tendik';
			$resultquery2=$query->first_row()->$nm_aspek_tendik;

			$bobot_aspek_tendik = 'bobot_'.$kegiatan.'_tendik';
			$resultquery3=$query->first_row()->$bobot_aspek_tendik;

			$nmvar_aspek_tendik = 'nmvar_'.$kegiatan.'_tendik';
			$resultquery4=$query->first_row()->$nmvar_aspek_tendik;						

			//explode
			$data1=explode(', ', $resultquery);
			$data2=explode(', ', $resultquery2);
			$data3=explode(', ', $resultquery3);
			$data4=explode(', ', $resultquery4);


			for ($i=0; $i < count($data1) ; $i++) {
			$data[$i] = array
				('id_tendik_'.$kegiatan => $data1[$i],
				 'nm_tendik_'.$kegiatan => $data2[$i],
				 'bobot_tendik_'.$kegiatan => $data3[$i],
				 'nmvar_tendik_'.$kegiatan => $data4[$i]
				);
			};

			}	
			//Menambah data
			return $data;
		}

		public function getDetailAspek($kegiatan, $id){
			$id_kegiatan = explode(", ", $id);
			$sql = "SELECT * FROM kegiatan_tendik_$kegiatan WHERE id_tendik_$kegiatan IN ('" . implode("','", $id_kegiatan) . "')";
			$query = $this->db->query($sql);
			return $query->result_array();
		}



		public function getDetDataRekap($link, $alias, $id, $kegiatan){
			$datakegiatan = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, $kegiatan);

			$detailAspek=$this->nilai_tendik_model->getAspekAKP2($link, $kegiatan);
			
			// $detailAspek = $this->nilai_tendik_model->getDetailAspek($kegiatan, $datakegiatan['id_'.$kegiatan.'_tendik']);

			if ($kegiatan == 'penunjang' || $kegiatan == 'penunjang2' || $kegiatan == 'penunjang3' || $kegiatan == 'penunjang3' || $kegiatan == 'penunjang4' || $kegiatan == 'penunjang5' || $kegiatan == 'pengabdian' || $kegiatan == 'pengabdian2') {
				$dataarray = array(
					'kegiatan' => $detailAspek,
					'nilai' => explode(", ", $datakegiatan['nilai']));

			}else{	
			$dataarray = array(
					'kegiatan' => $detailAspek,
					'nilai' => explode(", ", $datakegiatan['nilai']),
					'nilaixbobot' => explode(", ", $datakegiatan['nilaixbobot']),
					'nilaixbobotxnmvar' => explode(", ", $datakegiatan['nilaixbobotxnmvar']),
					'total_nxb' => number_format(doubleval(array_sum(explode(', ', $datakegiatan['nilaixbobot']))), 2, '.', ','),
					'total_nxbxn' => number_format(doubleval(array_sum(explode(', ', $datakegiatan['nilaixbobotxnmvar']))), 2, '.', ','));
		}
			return $dataarray;
		}

		public function getDetAspekAKP($link, $Aspek){
			$data = $this->nilai_tendik_model->getAspekAKP2($link, 'id_'.$Aspek.'_tendik');
			var_dump($data);
			die;
			$sql = "SELECT * FROM kegiatan_tendik_$Aspek WHERE id_tendik_$Aspek IN ('" . implode("','", $data) . "')";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getDetAspekAKP2($link, $Aspek){
			$data = $this->nilai_tendik_model->getAspekAKP($link, 'id_'.$Aspek.'_tendik');
			$id_kegiatan = implode(", ", $this->nilai_tendik_model->getAspekAKP($link, 'id_'.$Aspek.'_tendik'));

			for ($i=0; $i < count($data) ; $i++) {
			$data[$i] = array
				('id_tendik_'.$Aspek => $data[$i]);

			};	
			return $data;
		}

		public function hitungNilai($link, $alias, $id, $kegiatan){
			//ID Rekap
			$id_rekap = $this->nilai_tendik_model->getIDRekap($link, $id);

			if ($kegiatan == 'penunjang' || $kegiatan == 'penunjang2' || $kegiatan == 'penunjang3' || $kegiatan == 'penunjang3' || $kegiatan == 'penunjang4' || $kegiatan == 'penunjang5' || $kegiatan == 'pengabdian' || $kegiatan == 'pengabdian2') {
			// $id_kegiatan = implode(", ", $this->nilai_tendik_model->getAspekAKP($link, 'id_'.$kegiatan.'_tendik'));
			$bobot_nilai = $this->nilai_tendik_model->getAspekAKP2($link, $kegiatan);

			$nilai_kegiatan = $_POST["nilai_$kegiatan"];
					for ($i=0; $i < count($nilai_kegiatan) ; $i++) {
					$id_kegiatan1[$i] = $bobot_nilai[$i]['id_tendik_'.$kegiatan]; 
						if(empty($nilai_kegiatan[$i])){
							$nilai_kegiatan[$i] = number_format(doubleval('0'), 2, '.', ',');
						}else{
							$nilai_kegiatan[$i] = number_format(doubleval($nilai_kegiatan[$i]), 2, '.', ',');
						}
					}
			$id_kegiatan = implode(", ", $id_kegiatan1);
					
			$satuan_kegiatan = implode(", ", $nilai_kegiatan);

			$totalnilai = array_sum(explode(", ", $satuan_kegiatan));

			//Data Array
				$data = array
				('id_'.$kegiatan.'_tendik' => $id_kegiatan,
				'id_tendik_rekap' => $id_rekap,	
				'nilai' => $satuan_kegiatan,
				'totalnilai' => $totalnilai);				
			}else{	
			//ID Aspek Penilaian Kegiatan
			// $id_kegiatan = implode(", ", $this->nilai_tendik_model->getAspekAKP($link, 'id_'.$kegiatan.'_tendik'));
			//Input
					$nilai_kegiatan = $_POST["nilai_$kegiatan"];
					for ($i=0; $i < count($nilai_kegiatan) ; $i++) { 
						if(empty($nilai_kegiatan[$i])){
							$nilai_kegiatan[$i] = number_format(doubleval('0'), 2, '.', ',');

						}else{
							$nilai_kegiatan[$i] = number_format(doubleval($nilai_kegiatan[$i]), 2, '.', ',');
						}
					}
			$satuan_kegiatan = implode(", ", $nilai_kegiatan);
			
			// $bobot_nilai = $this->nilai_tendik_model->getDetAspekAKP($link, $kegiatan);
 
			$bobot_nilai = $this->nilai_tendik_model->getAspekAKP2($link, $kegiatan);
			

			$nilai_kegiatan = $_POST["nilai_$kegiatan"];

			// for ($i=0; $i < count($nilai_kegiatan) ; $i++){
				// $id_kegiatan1[$i] = $bobot_nilai[$i]['id_tendik_'.$kegiatan];
			// }
			// die;

			

			for ($i=0; $i < count($nilai_kegiatan) ; $i++){
				$id_kegiatan1[$i] = $bobot_nilai[$i]['id_tendik_'.$kegiatan];
				if(empty($nilai_kegiatan[$i])){
					$bobot1[$i] = number_format(doubleval('0'), 2, '.', ',');
					$nmvar1[$i] = number_format(doubleval('0'), 2, '.', ',');
					$nilaibobot[$i] = number_format(doubleval('0'), 2, '.', ',');
					$nilaibobotxnmvar[$i] = number_format(doubleval('0'), 2, '.', ',');
				}
				else{	
				$bobot = $bobot_nilai[$i]['bobot_tendik_'.$kegiatan];
				$bobot1[$i] = $bobot_nilai[$i]['bobot_tendik_'.$kegiatan];
				$nmvar = $bobot_nilai[$i]['nmvar_tendik_'.$kegiatan];
				$nmvar1[$i] = $bobot_nilai[$i]['nmvar_tendik_'.$kegiatan];
				//$nmar = implode(", ", $nmvar);
				$nilaibobot[$i] = number_format(doubleval($nilai_kegiatan[$i] * doubleval($bobot)), 2, '.', ',');
				$nilaisp = number_format(doubleval($nilaibobot[$i] - doubleval($nmvar)), 2, '.', ',');
				$nilaip = abs($nilaisp);
				$nilaibobotxnmvar[$i] = $nilaip;
				}
			}
			//$bobots = $bobot_nilai['tendik_bobot_nilai'];
			$id_kegiatan = implode(", ", $id_kegiatan1);
			$bobotar = implode(", ", $bobot1);
			$nmvarar = implode(", ", $nmvar1);
			$nilaixbobot = implode(", ", $nilaibobot);
			$nilaixbobotxnmvar = implode(", ", $nilaibobotxnmvar);
			$totalbobot = array_sum(explode(", ", $bobotar));
			$totalnmvar = array_sum(explode(", ", $nmvarar));
			$total_nxb = array_sum(explode(", ", $nilaixbobot));
			$total_nxbxn = array_sum(explode(", ", $nilaixbobotxnmvar));
			//Data Array
				$data = array
				('id_'.$kegiatan.'_tendik' => $id_kegiatan,
				'nilai' => $satuan_kegiatan,
				'nilaixbobot' => $nilaixbobot,
				'nilaixbobotxnmvar' => $nilaixbobotxnmvar,
				'id_tendik_rekap' => $id_rekap,
				'totalbobot' => $totalbobot,
				'totalnmvar' => $totalnmvar,
				'total_nxb' => $total_nxb,
				'total_nxbxn' => $total_nxbxn);
		}
			
			return $data;		


		}

		public function insertNilai($link, $alias, $id, $kegiatan){
			$data = $this->nilai_tendik_model->hitungNilai($link, $alias, $id, $kegiatan);
			$tables = 'det_'.$kegiatan.'_tendik_data_rekap';
			$query = $this->db->insert($tables, $data);
			return $query;
		}

		public function changestatnilai($link, $id, $keterangan){
			$id_akp = $this->nilai_tendik_model->getIDAKP($link);

			if($keterangan == 'hapus'){
			$this->db->set('is_done', 0);
			$this->db->where('id_akp',$id_akp);
			$this->db->where('id_tendik', $id);
			$this->db->update('det_identitas_data_rekap_tendik');	
			}else{ 
			$this->db->set('is_done', 1);
			$this->db->where('id_akp',$id_akp);
			$this->db->where('id_tendik', $id);
			$this->db->update('det_identitas_data_rekap_tendik');
			}
		}	

		public function updateNilai($link, $alias, $id, $kegiatan){
			$data = $this->nilai_tendik_model->hitungNilai($link, $alias, $id, $kegiatan);

			$id_tendik_rekap = $this->nilai_tendik_model->getIDRekap($link, $id);

			$tables = 'det_'.$kegiatan.'_tendik_data_rekap';

			$this->db->where('id_tendik_rekap', $id_tendik_rekap);
			$query = $this->db->update($tables, $data);
			return $query;
		}


		public function insertNilaiTotal($link, $alias, $id){
			$id_rekap = $this->nilai_tendik_model->getIDRekap($link, $id);

			$personal = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'personal');
			$administratif = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'administratif');
			$administratif2 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'administratif2');
			$administratif3 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'administratif3');
			$strukturalmanajerial = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'strukturalmanajerial');
			$strukturalmanajerial2 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'strukturalmanajerial2');
			$strukturalmanajerial3 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'strukturalmanajerial3');
			$penunjang = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'penunjang');
			$penunjang2 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'penunjang2');
			$penunjang3 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'penunjang3');
			$penunjang4 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'penunjang4');
			$penunjang5 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'penunjang5');
			$pengabdian = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'pengabdian');
			$pengabdian2 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'pengabdian2');
			$totalbobot = $personal['totalbobot'] + $administratif['totalbobot'] + $administratif2['totalbobot'] + $administratif3['totalbobot'] + $strukturalmanajerial['totalbobot'] + $strukturalmanajerial2['totalbobot']+ $strukturalmanajerial3['totalbobot'];
			$totalnmvar1 = $personal['totalnmvar'] + $administratif['totalnmvar'] + $administratif2['totalnmvar'] + $administratif3['totalnmvar'] + $strukturalmanajerial['totalnmvar'] + $strukturalmanajerial2['totalnmvar'] + $strukturalmanajerial3['totalnmvar'];
			$totalnmvar = number_format(doubleval($totalnmvar1), 2, '.', ',');
			$totalnxb1 = $personal['total_nxb'] + $administratif['total_nxb'] + $administratif2['total_nxb'] + $administratif3['total_nxb'] + $strukturalmanajerial['total_nxb'] + $strukturalmanajerial2['total_nxb'] + $strukturalmanajerial3['total_nxb'];
			$totalnxb = number_format(doubleval($totalnxb1), 2, '.', ',');
			$totalnxbxn = $personal['total_nxbxn'] + $administratif['total_nxbxn'] + $administratif2['total_nxbxn'] + $administratif3['total_nxbxn'] + $strukturalmanajerial['total_nxbxn'] + $strukturalmanajerial2['total_nxbxn'] + $strukturalmanajerial3['total_nxbxn'];
			$total2 = $penunjang['totalnilai'] + $penunjang2['totalnilai'] + $penunjang3['totalnilai'] + $penunjang4['totalnilai'] + $penunjang5['totalnilai'] + $pengabdian['totalnilai'] + $pengabdian2['totalnilai'];
			$total2 = number_format(doubleval($total2), 2, '.', ',');
			$nilaikuranglebih1 = $totalnxb - $totalnmvar;
			$nilaikuranglebih = number_format(doubleval($nilaikuranglebih1), 2, '.', ',');
			$total1plus2 = $totalnxb + $total2;
			$total1plus2 = number_format(doubleval($total1plus2), 2, '.', ',');
			//Nilai AKD
			$data = array(
				'id_rekap' => $id_rekap,
				'totalbobot' => $totalbobot,
				'totalnmvar' => $totalnmvar,
				'totalnxb' => $totalnxb,
				'totalnxbxn' => $totalnxbxn,
				'nilaikuranglebih' => $nilaikuranglebih,
				'total2' => $total2,
				'total1plus2' => $total1plus2);
			$tables = 'det_total_data_rekap';
			$query = $this->db->insert($tables, $data);
			return $query;
		}

		public function updateNilaiTotal($link, $alias, $id){
			$id_rekap = $this->nilai_tendik_model->getIDRekap($link, $id);

			$personal = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'personal');
			$administratif = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'administratif');
			$administratif2 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'administratif2');
			$administratif3 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'administratif3');
			$strukturalmanajerial = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'strukturalmanajerial');
			$strukturalmanajerial2 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'strukturalmanajerial2');
			$strukturalmanajerial3 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'strukturalmanajerial3');
			$penunjang = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'penunjang');
			$penunjang2 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'penunjang2');
			$penunjang3 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'penunjang3');
			$penunjang4 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'penunjang4');
			$penunjang5 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'penunjang5');
			$pengabdian = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'pengabdian');
			$pengabdian2 = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'pengabdian2');
			$totalbobot = $personal['totalbobot'] + $administratif['totalbobot'] + $administratif2['totalbobot'] + $administratif3['totalbobot'] + $strukturalmanajerial['totalbobot'] + $strukturalmanajerial2['totalbobot']+ $strukturalmanajerial3['totalbobot'];
			$totalnmvar1 = $personal['totalnmvar'] + $administratif['totalnmvar'] + $administratif2['totalnmvar'] + $administratif3['totalnmvar'] + $strukturalmanajerial['totalnmvar'] + $strukturalmanajerial2['totalnmvar'] + $strukturalmanajerial3['totalnmvar'];
			$totalnmvar = number_format(doubleval($totalnmvar1), 2, '.', ',');
			$totalnxb1 = $personal['total_nxb'] + $administratif['total_nxb'] + $administratif2['total_nxb'] + $administratif3['total_nxb'] + $strukturalmanajerial['total_nxb'] + $strukturalmanajerial2['total_nxb'] + $strukturalmanajerial3['total_nxb'];
			$totalnxb = number_format(doubleval($totalnxb1), 2, '.', ',');
			$totalnxbxn = $personal['total_nxbxn'] + $administratif['total_nxbxn'] + $administratif2['total_nxbxn'] + $administratif3['total_nxbxn'] + $strukturalmanajerial['total_nxbxn'] + $strukturalmanajerial2['total_nxbxn'] + $strukturalmanajerial3['total_nxbxn'];
			$total2 = $penunjang['totalnilai'] + $penunjang2['totalnilai'] + $penunjang3['totalnilai'] + $penunjang4['totalnilai'] + $penunjang5['totalnilai'] + $pengabdian['totalnilai'] + $pengabdian2['totalnilai'];
			$total2 = number_format(doubleval($total2), 2, '.', ',');
			$nilaikuranglebih1 = $totalnxb - $totalnmvar;
			$nilaikuranglebih = number_format(doubleval($nilaikuranglebih1), 2, '.', ',');
			$total1plus2 = $totalnxb + $total2;
			$total1plus2 = number_format(doubleval($total1plus2), 2, '.', ',');
			//Nilai AKD
			$data = array(
				'id_rekap' => $id_rekap,
				'totalbobot' => $totalbobot,
				'totalnmvar' => $totalnmvar,
				'totalnxb' => $totalnxb,
				'totalnxbxn' => $totalnxbxn,
				'nilaikuranglebih' => $nilaikuranglebih,
				'total2' => $total2,
				'total1plus2' => $total1plus2);
			$tables = 'det_total_data_rekap';
			$this->db->where('id_rekap', $id_rekap);
			$query = $this->db->update($tables, $data);
			return $query;
		}

		public function getNilaiTotal($link, $alias, $id){
			$id_rekap = $this->nilai_tendik_model->getIDRekap($link, $id);
			$sql = "SELECT * FROM det_total_data_rekap WHERE id_rekap = $id_rekap";
			$query = $this->db->query($sql);
			return $query->row_array();
		}

		public function check_nik_exists($nm_akp){
			$query = $this->db->get_where('akp_tendik', array('urutan' => $nm_akp));
			if(!($query->row_array())){
				return true;
			}else{
				return false;
			}
		}
	}