<?php
	class Nilai_tendik extends CI_Controller{
		public function view(){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$data1['unit']=$this->tendik_model->listUnit();

			$data['akp_tendik']=$this->nilai_tendik_model->listakp();

			// print_r($data['akp_tendik']);

			$this->load->view('templates/header',$data1);
			$this->load->view('nilaitendik/list-akp-tendik',$data);
			$this->load->view('templates/footer');
		}

		public function viewunit($link = NULL){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data1['unit']=$this->tendik_model->listUnit();
			//$data['akp']=$this->nilai_tendik_model->getAKP($link);
			$akp=$this->nilai_tendik_model->getAKP($link);
			
			if($akp){
			$this->load->view('templates/header',$data1);
			$this->load->view('nilaitendik/list-unit',$data1);
			$this->load->view('templates/footer');
			}else{
			$this->load->view('pages/404');
			}
		}

		public function viewtendik($link, $alias){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['link']=$link;
			$data['alias']=$alias;

			$unit=$this->nilai_tendik_model->cekunit($alias);
			// $akp=$this->nilai_tendik_model->cekakp($link);
			$akp=$this->nilai_tendik_model->getAKP($link);

			if($unit && $akp){
			$data1['unit']=$this->tendik_model->listUnit();
			$data['tendik']=$this->nilai_tendik_model->getTendik($alias);

			$data['tendik2'] =$this->nilai_tendik_model->getTendikData($link, $alias);
			
			// var_dump($datar);
			// die;

			// print_r($data['tendik2']);
			
			$this->load->view('templates/header',$data1);
			$this->load->view('nilaitendik/list-tendik',$data);
			$this->load->view('templates/footer');
			}else{
			$this->load->view('pages/404');	
			}
		}

		public function hapus($link){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->nilai_tendik_model->deleteAllAspekAKP($link, 'administratif');
			$this->nilai_tendik_model->deleteAllAspekAKP($link, 'administratif2');
			$this->nilai_tendik_model->deleteAllAspekAKP($link, 'personal');
			$this->nilai_tendik_model->deleteAllAspekAKP($link, 'strukturalmanajerial');
			$this->nilai_tendik_model->deleteAllAspekAKP($link, 'penunjang');
			$this->nilai_tendik_model->deleteAllAspekAKP($link, 'pengabdian');
			$this->nilai_tendik_model->deleteAllTendikList($link);
			$this->nilai_tendik_model->deleteAKP($link);
			redirect('nilai-tendik');
		}

		public function printlaporan($link){

			$data['tendik'] = $this->nilai_tendik_model->getDetDataAllTendik($link);
			$data['link'] = $link;

			// var_dump($data['tendik']);
			// die;

			$data1['unit']=$this->tendik_model->listUnit();
			$data['akp']=$this->nilai_tendik_model->getAKP($link);

			// print_r($data['akp']);
			$this->load->view('templates/header',$data1);
			$this->load->view('nilaitendik/printlaporan',$data);
			$this->load->view('templates/footer');

		}

		public function entry($link, $alias, $id_tendik){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$unit=$this->nilai_tendik_model->cekunit($alias);
			$akp=$this->nilai_tendik_model->cekakp($link);

			if($unit && $akp){
				
			
			$tendik=$this->nilai_tendik_model->getTendik2($link, $id_tendik);	

			if($tendik){

			$id_akp = $this->nilai_tendik_model->getIDAKP($link);

			$data = $this->db->get_where('det_identitas_data_rekap_tendik', ['id_tendik' => $id_tendik, 'id_akp' => $id_akp])->row_array();
	
				
			if($data['is_done'] == 1){
					redirect('nilai-tendik/'.$link.'/'.$alias.'/'.$id);}
			
			$data['id_tendik']=$id_tendik;
			$data['link']=$link;
			$data['alias']=$alias;

			$data1['unit']=$this->tendik_model->listUnit();
			$data['tendik']=$this->tendik_model->getTendik($id_tendik);

			$data['tendik2']=$this->nilai_tendik_model->getTendik2($link, $id_tendik);
			

			$data['getaspekpersonal']=$this->nilai_tendik_model->getAspekAKP2($link, 'personal');
			$data['getaspekadministratif']=$this->nilai_tendik_model->getAspekAKP2($link, 'administratif');
			$data['getaspekadministratif2']=$this->nilai_tendik_model->getAspekAKP2($link, 'administratif2');
			$data['getaspekadministratif3']=$this->nilai_tendik_model->getAspekAKP2($link, 'administratif3');
			$data['getaspekstrukturalmanajerial']=$this->nilai_tendik_model->getAspekAKP2($link, 'strukturalmanajerial');
			$data['getaspekstrukturalmanajerial2']=$this->nilai_tendik_model->getAspekAKP2($link, 'strukturalmanajerial2');
			$data['getaspekstrukturalmanajerial3']=$this->nilai_tendik_model->getAspekAKP2($link, 'strukturalmanajerial3');
			$data['getaspekpenunjang']=$this->nilai_tendik_model->getAspekAKP2($link, 'penunjang');
			$data['getaspekpenunjang2']=$this->nilai_tendik_model->getAspekAKP2($link, 'penunjang2');
			$data['getaspekpenunjang3']=$this->nilai_tendik_model->getAspekAKP2($link, 'penunjang3');
			$data['getaspekpenunjang4']=$this->nilai_tendik_model->getAspekAKP2($link, 'penunjang4');
			$data['getaspekpenunjang5']=$this->nilai_tendik_model->getAspekAKP2($link, 'penunjang5');
			$data['getaspekpengabdian']=$this->nilai_tendik_model->getAspekAKP2($link, 'pengabdian');
			$data['getaspekpengabdian2']=$this->nilai_tendik_model->getAspekAKP2($link, 'pengabdian2');


			#Data Aspek Peniaian
			// $data['getpersonal']=$this->nilai_tendik_model->getDetAspekAKP($link, "personal");

			// $data['getadministratif']=$this->nilai_tendik_model->getDetAspekAKP($link, "administratif");
			// $data['getstrukturalmanajerial']=$this->nilai_tendik_model->getDetAspekAKP($link, "strukturalmanajerial");
			// $data['getpenunjang']=$this->nilai_tendik_model->getDetAspekAKP($link, "penunjang");
			// $data['getpengabdian']=$this->nilai_tendik_model->getDetAspekAKP($link, "pengabdian");


			// $data2['getpersonal2']=$this->nilai_tendik_model->getDetAspekAKP2($link, "personal");
			// print_r($data['getaspekpenunjang2']);
			//print_r($data['getpersonal']);


			$this->load->view('templates/header',$data1);
			$this->load->view('nilaitendik/entry_nilai_tendik',$data);
			$this->load->view('templates/footer');
			}else{
				$this->load->view('pages/404');}
			}else{
			  $this->load->view('pages/404');			
			}
		}

		public function baru2(){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data1['unit']=$this->tendik_model->listUnit();


			$data['personal']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_personal");
			$data['administratif']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_administratif");
			$data['strukturalmanajerial']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_strukturalmanajerial");
			$data['penunjang']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang");
			$data['pengabdian']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_pengabdian");

			$this->form_validation->set_rules('nm_akp','Nama AKP','required');
			$this->form_validation->set_rules('bln-periode1','Bulan Periode 1','required');
			$this->form_validation->set_rules('thn-periode1','Tahun Periode 1','required');
			$this->form_validation->set_rules('bln-periode2','Bulan Periode 2','required');
			$this->form_validation->set_rules('thn-periode2','Tahun Periode 2','required');
			$this->form_validation->set_rules('kepala_kpm','Kepala KPM','required');
			$this->form_validation->set_rules('tgl-penilaian','Tanggal Penilaian','required');
			$this->form_validation->set_rules('bln-penilaian','Bulan Penilaian','required');
			$this->form_validation->set_rules('thn-penilaian','Tahun Penilaian','required');



			if($this->form_validation->run() === FALSE){
				// print_r($data['personal']);
				// print_r($data['administratif']);
				$this->load->view('templates/header',$data1);
				$this->load->view('nilaitendik/periode-baru',$data);
				$this->load->view('templates/footer');
			}else{
				$str = $_POST['nm_akp'];
				$angka = $this->converter_model->romanToDecimal($str);
				$this->nilai_tendik_model->createAKP($angka);
				$this->nilai_tendik_model->insertAspekAKP();
				redirect('nilai-tendik');
			}
		}

		public function baru(){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data1['unit']=$this->tendik_model->listUnit();


			$data_personal=$this->nilai_tendik_model->listAspek("kegiatan_tendik_personal");
			$data_administratif=$this->nilai_tendik_model->listAspek("kegiatan_tendik_administratif");
			$data_administratif2=$this->nilai_tendik_model->listAspek("kegiatan_tendik_administratif2");
			$data_administratif3=$this->nilai_tendik_model->listAspek("kegiatan_tendik_administratif3");
			$data_strukturalmanajerial=$this->nilai_tendik_model->listAspek("kegiatan_tendik_strukturalmanajerial");
			$data_strukturalmanajerial2=$this->nilai_tendik_model->listAspek("kegiatan_tendik_strukturalmanajerial2");
			$data_strukturalmanajerial3=$this->nilai_tendik_model->listAspek("kegiatan_tendik_strukturalmanajerial3");
			$data_penunjang=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang");
			$data_penunjang2=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang2");
			$data_penunjang3=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang3");
			$data_penunjang4=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang4");
			$data_penunjang5=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang5");
			$data_pengabdian=$this->nilai_tendik_model->listAspek("kegiatan_tendik_pengabdian");
			$data_pengabdian2=$this->nilai_tendik_model->listAspek("kegiatan_tendik_pengabdian2");

			$data['personal']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_personal");
			$data['administratif']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_administratif");
			$data['strukturalmanajerial']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_strukturalmanajerial");
			$data['penunjang']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_penunjang");
			$data['pengabdian']=$this->nilai_tendik_model->listAspek("kegiatan_tendik_pengabdian");

			// print_r($data_penunjang5);

			$this->form_validation->set_rules('nm_akp','Nama AKP','required|callback_check_nik_exists');
			$this->form_validation->set_rules('bln-periode1','Bulan Periode 1','required');
			$this->form_validation->set_rules('thn-periode1','Tahun Periode 1','required');
			$this->form_validation->set_rules('bln-periode2','Bulan Periode 2','required');
			$this->form_validation->set_rules('thn-periode2','Tahun Periode 2','required');
			$this->form_validation->set_rules('kepala_kpm','Kepala KPM','required');
			$this->form_validation->set_rules('tgl-penilaian','Tanggal Penilaian','required');
			$this->form_validation->set_rules('bln-penilaian','Bulan Penilaian','required');
			$this->form_validation->set_rules('thn-penilaian','Tahun Penilaian','required');



			if($this->form_validation->run() === FALSE){
				// print_r($data['strukturalmanajerial']);
				// print_r($data['administratif']);
				$this->load->view('templates/header',$data1);
				$this->load->view('nilaitendik/periode-baru',$data);
				$this->load->view('templates/footer');
			}else{
				$str = $_POST['nm_akp'];
				$angka = $this->converter_model->romanToDecimal($str);
				$this->nilai_tendik_model->createAKP($angka);
				$this->nilai_tendik_model->insertAspekAKP($data_personal, 'personal');
				$this->nilai_tendik_model->insertAspekAKP($data_administratif, 'administratif');
				$this->nilai_tendik_model->insertAspekAKP($data_administratif2, 'administratif2');
				$this->nilai_tendik_model->insertAspekAKP($data_administratif3, 'administratif3');
				$this->nilai_tendik_model->insertAspekAKP($data_strukturalmanajerial, 'strukturalmanajerial');
				$this->nilai_tendik_model->insertAspekAKP($data_strukturalmanajerial2, 'strukturalmanajerial2');
				$this->nilai_tendik_model->insertAspekAKP($data_strukturalmanajerial3, 'strukturalmanajerial3');
				$this->nilai_tendik_model->insertAspekAKP($data_penunjang, 'penunjang');
				$this->nilai_tendik_model->insertAspekAKP($data_penunjang2, 'penunjang2');
				$this->nilai_tendik_model->insertAspekAKP($data_penunjang3, 'penunjang3');
				$this->nilai_tendik_model->insertAspekAKP($data_penunjang4, 'penunjang4');
				$this->nilai_tendik_model->insertAspekAKP($data_penunjang5, 'penunjang5');
				$this->nilai_tendik_model->insertAspekAKP($data_pengabdian, 'pengabdian');
				$this->nilai_tendik_model->insertAspekAKP($data_pengabdian2, 'pengabdian2');

				redirect('nilai-tendik');
			}
		}


		public function ubah($link = NULL){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data1['unit']=$this->tendik_model->listUnit();

			
			$data['getpersonal']=$this->nilai_tendik_model->getAspekAKP2($link, "personal");
			$data['getadministratif']=$this->nilai_tendik_model->getAspekAKP2($link, "administratif");
			$data['getstrukturalmanajerial']=$this->nilai_tendik_model->getAspekAKP2($link, "strukturalmanajerial");
			$data['getpenunjang']=$this->nilai_tendik_model->getAspekAKP2($link, "penunjang");
			$data['getpengabdian']=$this->nilai_tendik_model->getAspekAKP2($link, "pengabdian");


			$data['periode']=$this->nilai_tendik_model->getPeriode($link);


			// print_r($data['getpersonal']);
			if(empty($data['periode'])){
				show_404();
			}

			$this->load->view('templates/header',$data1);
			$this->load->view('nilaitendik/periode-edit',$data);
			$this->load->view('templates/footer');
		}

		public function perbaharui(){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->form_validation->set_rules('link_hidden','Link Hidden','required');

			$this->form_validation->set_rules('nm_akp','Nama AKP','required');
			$this->form_validation->set_rules('bln-periode1','Bulan Periode 1','required');
			$this->form_validation->set_rules('thn-periode1','Tahun Periode 1','required');
			$this->form_validation->set_rules('bln-periode2','Bulan Periode 2','required');
			$this->form_validation->set_rules('thn-periode2','Tahun Periode 2','required');
			$this->form_validation->set_rules('kepala_kpm','Kepala KPM','required');
			$this->form_validation->set_rules('tgl-penilaian','Tanggal Penilaian','required');
			$this->form_validation->set_rules('bln-penilaian','Bulan Penilaian','required');
			$this->form_validation->set_rules('thn-penilaian','Tahun Penilaian','required');

			$str = $this->input->post('nm_akp');
			$angka = $this->converter_model->romanToDecimal($str);
			
			$this->nilai_tendik_model->updatePeriode($angka);
			// $this->nilai_tendik_model->updateAspekPeriode();
			redirect('nilai-tendik');
		}

		//Data Rekap
		public function show($link, $alias, $id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$unit=$this->nilai_tendik_model->cekunit($alias);
			$akp=$this->nilai_tendik_model->getAKP($link);
			$tendik=$this->nilai_tendik_model->getTendik2($link, $id);

			if($akp && $unit && $tendik){

			$id_akp = $this->nilai_tendik_model->getIDAKP($link);
			// $dumpz = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'personal');
			$data = $this->db->get_where('det_identitas_data_rekap_tendik', ['id_tendik' => $id, 'id_akp' => $id_akp])->row_array();
			
				if($data['is_done'] == 0){
					redirect('nilai-tendik/'.$link.'/'.$alias.'/'.$id.'/entry/');
					}else{			
				

			//Cek ketersediaan data
			// if(!($this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'personal'))){
							// }else{
			// $data2['personal2'] = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'personal');	
			$datakegiatan = $this->nilai_tendik_model->getDataRekap($link, $alias, $id, 'personal');

			$detailaspek = $this->nilai_tendik_model->getDetailAspek('personal', $datakegiatan['id_personal_tendik']);

			//Modul
			$data1['unit']=$this->tendik_model->listUnit();
			$data['id']=$id;
			$data['link']=$link;
			$data['alias']=$alias;
			//Data Tendik
			$data['tendik2']=$this->tendik_model->getTendik($id);
			$data['tendik']=$this->nilai_tendik_model->getTendik2($link, $id);
			

			
			$data['personal'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'personal');
			$data['administratif'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'administratif');
			$data['administratif2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'administratif2');
			$data['administratif3'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'administratif3');
			$data['strukturalmanajerial'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'strukturalmanajerial');
			$data['strukturalmanajerial2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'strukturalmanajerial2');
			$data['strukturalmanajerial3'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'strukturalmanajerial3');
			$data['penunjang'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang');
			$data['penunjang2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang2');
			$data['penunjang3'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang3');
			$data['penunjang4'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang4');
			$data['penunjang5'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang5');
			$data['pengabdian'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'pengabdian');
			$data['pengabdian2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'pengabdian2');
			$data['total'] = $this->nilai_tendik_model->getNilaiTotal($link, $alias, $id);

			
			// //print_r($data2['personal2']);
			//print_r($detail['detail']);
			//print_r($data['tendik']);
			print_r($data['tendik']);


			$this->load->view('templates/header',$data1);
			$this->load->view('nilaitendik/show_data_rekap',$data);
			$this->load->view('templates/footer');
			}
		}else{
			$this->load->view('pages/404');
		}
		}

		public function tambah_data($link, $alias){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['link']=$link;
			$data['alias']=$alias;
			$data1['unit']=$this->tendik_model->listUnit();
			//data
			$data['akp']=$this->nilai_tendik_model->getAKP($link);
			//$data['tendik']=$this->nilai_tendik_model->getTendik($alias);
			$data['tendik']=$this->nilai_tendik_model->getDataTendikNot($link, $alias);

			//print_r($data['tendik']);

			$this->form_validation->set_rules('id_tendik[]','Id_tendik[]','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header',$data1);
				$this->load->view('nilaitendik/tambah-data-tendik',$data);
				$this->load->view('templates/footer');
			}else{
				for ($i=0; $i < count($_POST['id_tendik']) ; $i++){
				$this->nilai_tendik_model->addDetailTendik($link, $alias, $_POST['id_tendik'][$i]);
				}
				redirect('nilai-tendik/'.$link.'/'.$alias.'/');
			}
		}

		public function hapusdarilist($link, $alias, $id){
			$this->nilai_tendik_model->deleteTendikList($id);
			$this->session->set_flashdata('hapus_success', 'Tenaga Kependidikan telah dihapus.');
			redirect('nilai-tendik/'.$link.'/'.$alias.'/');
		}

		public function edit_nilai($link, $alias, $id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$unit=$this->nilai_tendik_model->cekunit($alias);
			$akp=$this->nilai_tendik_model->getAKP($link);
			$tendik=$this->nilai_tendik_model->getTendik2($link, $id);

			if($unit && $akp && $tendik){
				$id_akp = $this->nilai_tendik_model->getIDAKP($link);
				$data = $this->db->get_where('det_identitas_data_rekap_tendik', ['id_tendik' => $id, 'id_akp' => $id_akp])->row_array();
				if($tendik['is_done'] == 0){
					redirect('nilai-tendik/'.$link.'/'.$alias.'/'.$id.'/entry/');
					}

			$data['link']=$link;
			$data['alias']=$alias;
			$data['id']=$id;

			$data1['unit']=$this->tendik_model->listUnit();
			$data['tendik']=$this->tendik_model->getTendik($id);

			$data['personal'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'personal');
			$data['administratif'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'administratif');
			$data['administratif2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'administratif2');
			$data['administratif3'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'administratif3');
			$data['strukturalmanajerial'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'strukturalmanajerial');
			$data['strukturalmanajerial2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'strukturalmanajerial2');
			$data['strukturalmanajerial3'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'strukturalmanajerial3');
			$data['penunjang'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang');
			$data['penunjang2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang2');
			$data['penunjang3'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang3');
			$data['penunjang4'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang4');
			$data['penunjang5'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang5');
			$data['pengabdian'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'pengabdian');
			$data['pengabdian2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'pengabdian2');

			$data['tendikrekap'] = $this->nilai_tendik_model->getTendikRekap($link, $id);

			// print_r($data['personal']);
			// print_r($data['administratif2']);
			$this->load->view('templates/header',$data1);
			$this->load->view('nilaitendik/nilai-edit',$data);
			$this->load->view('templates/footer');
			}else{
				$this->load->view('pages/404');	}
		}

		public function hapus_nilai($link, $alias, $id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$unit=$this->nilai_tendik_model->cekunit($alias);
			$akp=$this->nilai_tendik_model->getAKP($link);
			$tendik=$this->nilai_tendik_model->getTendik2($link, $id);
			
			if($unit && $akp && $tendik){
				$id_akp = $this->nilai_tendik_model->getIDAKP($link);
				$data = $this->db->get_where('det_identitas_data_rekap_tendik', ['id_tendik' => $id, 'id_akp' => $id_akp])->row_array();
				if($tendik['is_done'] == 0){
					redirect('nilai-tendik/'.$link.'/'.$alias.'/'.$id.'/entry/');
					}

			$this->nilai_tendik_model->deleteNilai($link, $id);
			$this->nilai_tendik_model->changestatnilai($link, $id, 'hapus');
			$this->session->set_flashdata('hapus_success', 'Nilai telah dihapus.');
			redirect('nilai-tendik/'.$link.'/'.$alias.'/');
			}else{
				$this->load->view('pages/404');
			}
		}

		
		public function simpan_nilai($link, $alias, $id){
			$this->nilai_tendik_model->addDataRekap($link, $id);

			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'personal');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'administratif');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'administratif2');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'administratif3');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'strukturalmanajerial');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'strukturalmanajerial2');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'strukturalmanajerial3');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'penunjang');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'penunjang2');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'penunjang3');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'penunjang4');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'penunjang5');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'pengabdian');
			$this->nilai_tendik_model->insertnilai($link, $alias, $id, 'pengabdian2');

			$this->nilai_tendik_model->insertNilaiTotal($link, $alias, $id);

			$this->nilai_tendik_model->changestatnilai($link, $id, 'tambah');
			// redirect('nilai-tendik/');

			redirect('nilai-tendik/'.$link.'/'.$alias.'/');
		}

		public function perbaharui_nilai($link, $alias, $id){
			$this->nilai_tendik_model->updateDataRekap($link, $id);
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'personal');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'administratif');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'administratif2');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'administratif3');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'strukturalmanajerial');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'strukturalmanajerial2');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'strukturalmanajerial3');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'penunjang');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'penunjang2');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'penunjang3');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'penunjang4');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'penunjang5');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'pengabdian');
			$this->nilai_tendik_model->updateNilai($link, $alias, $id, 'pengabdian2');

			$this->nilai_tendik_model->updateNilaiTotal($link, $alias, $id);

			$this->session->set_flashdata('update_success', 'Data anda telah diubah.');
			redirect('nilai-tendik/'.$link.'/'.$alias.'/'.$id.'/');
		}

		public function print_page($link){
			$data['tendik'] = $this->nilai_tendik_model->getDetDataAllTendik($link);
			$data['link'] = $link;

			// var_dump($data['tendik']);
			// die;
			$data['akp']=$this->nilai_tendik_model->getAKP($link);


			$this->load->view('nilaitendik/print_page',$data);

		}

		public function print($link, $alias, $id){
			$unit=$this->nilai_tendik_model->cekunit($alias);
			$akp=$this->nilai_tendik_model->getAKP($link);
			$tendik=$this->nilai_tendik_model->getTendik2($link, $id);	

			if($unit && $akp && $tendik){
				$id_akp = $this->nilai_tendik_model->getIDAKP($link);
				$data = $this->db->get_where('det_identitas_data_rekap_tendik', ['id_tendik' => $id, 'id_akp' => $id_akp])->row_array();
				if($tendik['is_done'] == 0){
					redirect('nilai-tendik/'.$link.'/'.$alias.'/'.$id.'/entry/');
					}

			$data['tendik']=$this->tendik_model->getTendik($id);
			$data['akp']=$this->nilai_tendik_model->getAKP($link);

			$data['tendik2']=$this->nilai_tendik_model->getTendik2($link, $id);
			
			$data['personal'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'personal');
			$data['administratif'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'administratif');
			$data['administratif2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'administratif2');
			$data['administratif3'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'administratif3');
			$data['strukturalmanajerial'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'strukturalmanajerial');
			$data['strukturalmanajerial2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'strukturalmanajerial2');
			$data['strukturalmanajerial3'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'strukturalmanajerial3');
			$data['penunjang'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang');
			$data['penunjang2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang2');
			$data['penunjang3'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang3');
			$data['penunjang4'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang4');
			$data['penunjang5'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang5');
			$data['pengabdian'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'pengabdian');
			$data['pengabdian2'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'pengabdian2');
			$data['total'] = $this->nilai_tendik_model->getNilaiTotal($link, $alias, $id);


			$data['rekap']=$this->nilai_tendik_model->getTendikRekap($link, $id);

			// print_r($data['strukturalmanajerial2']);
			$this->load->view('nilaitendik/print',$data);
			}else{
				$this->load->view('pages/404');
			}

		}

		public function pdf($link, $alias, $id){
			$unit=$this->nilai_tendik_model->cekunit($alias);
			$akp=$this->nilai_tendik_model->getAKP($link);
			$tendik=$this->nilai_tendik_model->getTendik2($link, $id);
			
			if($unit && $akp && $tendik){
				$id_akp = $this->nilai_tendik_model->getIDAKP($link);
				$data = $this->db->get_where('det_identitas_data_rekap_tendik', ['id_tendik' => $id, 'id_akp' => $id_akp])->row_array();
				if($tendik['is_done'] == 0){
					redirect('nilai-tendik/'.$link.'/'.$alias.'/'.$id.'/entry/');
					}
			$this->load->library('pdf');
			
			
			$data['tendik']=$this->tendik_model->getTendik($id);
			$data['akp']=$this->nilai_tendik_model->getAKP($link);

			$data['tendik2']=$this->nilai_tendik_model->getTendik2($link, $id);
			$data['personal'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'personal');
			$data['administratif'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'administratif');
			$data['strukturalmanajerial'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'strukturalmanajerial');
			$data['penunjang'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'penunjang');
			$data['pengabdian'] = $this->nilai_tendik_model->getDetDataRekap($link, $alias, $id, 'pengabdian');
			$data['total'] = $this->nilai_tendik_model->getNilaiTotal($link, $alias, $id);

			$data['rekap']=$this->nilai_tendik_model->getTendikRekap($link, $id);

			$this->load->view('nilaitendik/pdf',$data);

			$html = $this->output->get_output();
			$this->dompdf->loadHtml($html);
			$this->dompdf->setPaper('A4', 'portrait');
			$this->dompdf->render();
			$this->dompdf->stream("download.pdf", array("Attachment"=>0));
			}else{
				$this->load->view('pages/404');
			}

		}

		public function check_nik_exists($nm_akp){
			$this->form_validation->set_message('check_nik_exists', 'Nama AKP sudah ada, mohon ubah nama AKP.');
			if($this->nilai_tendik_model->check_nik_exists($nm_akp)){
				return true;
			}else{
				return false;
			}
		}	
}