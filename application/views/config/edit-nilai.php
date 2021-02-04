<div class="col-lg">
	<div class="card">
		<div class="card-header">
			<i class="fa fa-users fa-lg"></i> Edit Nilai </div>
		<div class="card-body">
						<div class="form-group">
              <label class="col-form-label">Variable</label>
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#personal" role="tab" aria-controls="personal">Nilai I</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#penunjang" role="tab" aria-controls="penunjang">Nilai II</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="personal" role="tabpanel">
                    <table class="table table-responsive-sm table-hover">
                      <thead>
                        <tr>
                          <th width="60"><center>No.</center></th>
                          <th><center>Variabel</center></th>
                          <th><center>Bobot</center></th>
                          <th><center>NMVAR</center></th>
                          <th><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        echo 
                        '<td><center><b>'.'I'.'</b></center></td>
                         <td><b>'.'Personal'.'</b></td>'
                        ;
                        $no=1;
                        for ($i=0; $i < count($personal) ; $i++){
                        echo
                        '<tr>
                          <td><center>'.$no.'</center></td>
                          <td>'.$personal[$i]['nm_tendik_personal'].'</td>
                          <td><center>'.$personal[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$personal[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/personal/'.$personal[$i]['id_tendik_personal'].'/"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        } 
                         // echo  
                        // '<tr><td colspan="5"><center><b>'.'<a href="edit-nilai/tambah/personal"><button class="btn btn-sm btn-warning">
                            // <i class="fa fa-plus"></i> Buat Personal Baru'.'</b></center></td></tr>';
                        ?>
                      </tbody>
                      <tbody>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'II'.'</b></center></td>
                         <td><b>'.'Administratif'.'</b></td></tr>
                         <tr><td><center><b>'.'1.'.'</b></center></td>
                         <td><b>'.'Penyelesaian Tugas Rutin.'.'</b></td></tr>'
                        ;
                        $no=1;
                        for ($i=0; $i < count($administratif) ; $i++){
                        echo
                        '<tr>
                          <td><center>'.$no.'</center></td>
                          <td>'.$administratif[$i]['nm_tendik_administratif'].'</td>
                          <td><center>'.$administratif[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$administratif[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/administratif/'.$administratif[$i]['id_tendik_administratif'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }
                        // echo  
                        // '<tr><td colspan="5"><center><b>'.'<a href="edit-nilai/tambah/administratif"><button class="btn btn-sm btn-warning">
                            // <i class="fa fa-plus"></i> Buat Administratif Baru'.'</b></center></td></tr>';
                        ?>
                        <?php
                        echo 
                        '
                         <tr><td><center><b>'.'2.'.'</b></center></td>
                         <td><b>'.'Pelayanan.'.'</b></td></tr>'
                        ;
                        $no=1;
                        for ($i=0; $i < count($administratif2) ; $i++){
                        echo
                        '<tr>
                          <td><center>'.$no.'</center></td>
                          <td>'.$administratif2[$i]['nm_tendik_administratif2'].'</td>
                          <td><center>'.$administratif2[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$administratif2[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/administratif2/'.$administratif2[$i]['id_tendik_administratif2'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }
                        ?>
                        <?php
                        $no=3;
                        for ($i=0; $i < count($administratif3) ; $i++){
                        echo
                        '<tr>
                          <td><b><center>'.$no.'</center></b></td>
                          <td><b>'.$administratif3[$i]['nm_tendik_administratif3'].'<b></td>
                          <td><center>'.$administratif3[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$administratif3[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/administratif3/'.$administratif3[$i]['id_tendik_administratif3'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }
                        ?>
                      </tbody>
                      <tbody>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'III'.'</b></center></td>
                         <td><b>'.'Struktural/Manajerial'.'</b></td></tr>
                         <tr><td><center><b>'.'1.'.'</b></center></td>
                         <td><b>'.'Program Pengembangan.'.'</b></td></tr>'
                        ;
                        $no=1;
                        $no=1;
                        for ($i=0; $i < count($strukturalmanajerial) ; $i++){
                        echo
                        '<tr>
                          <td><center>'.$no.'</center></td>
                          <td>'.$strukturalmanajerial[$i]['nm_tendik_strukturalmanajerial'].'</td>
                          <td><center>'.$strukturalmanajerial[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$strukturalmanajerial[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/strukturalmanajerial/'.$strukturalmanajerial[$i]['id_tendik_strukturalmanajerial'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }
                        ?>
                        <?php
                        echo 
                        '
                         <tr><td><center><b>'.'2.'.'</b></center></td>
                         <td><b>'.'Delegasi / Monitoring.'.'</b></td></tr>'
                        ;
                        $no=1;
                        $no=1;
                        for ($i=0; $i < count($strukturalmanajerial2) ; $i++){
                        echo
                        '<tr>
                          <td><center>'.$no.'</center></td>
                          <td>'.$strukturalmanajerial2[$i]['nm_tendik_strukturalmanajerial2'].'</td>
                          <td><center>'.$strukturalmanajerial2[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$strukturalmanajerial2[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/strukturalmanajerial2/'.$strukturalmanajerial2[$i]['id_tendik_strukturalmanajerial2'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }
                        ?>
                        <?php
                        $no=3;
                        for ($i=0; $i < count($strukturalmanajerial3) ; $i++){
                        echo
                        '<tr>
                          <td><center><b>'.$no.'</b></center></td>
                          <td><b>'.$strukturalmanajerial3[$i]['nm_tendik_strukturalmanajerial3'].'</b></td>
                          <td><center>'.$strukturalmanajerial3[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$strukturalmanajerial3[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/strukturalmanajerial3/'.$strukturalmanajerial3[$i]['id_tendik_strukturalmanajerial3'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="penunjang" role="tabpanel">
                    <table class="table table-responsive-sm table-hover">
                      <thead>
                        <tr>
                          <th width="60"><center>No.</center></th>
                          <th><center>Aspek Penilaian</center></th>
                          <th><center>Nilai (Satuan/Kegiatan)</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'IV'.'</b></center></td>
                         <td><b>'.'Penunjang'.'</b></td></tr>'
                        ;
                        $no=1;
                        for ($i=0; $i < count($penunjang) ; $i++){
                        echo
                        '<tr>
                          <td><center>'.$no.'</center></td>
                          <td>'.$penunjang[$i]['nm_tendik_penunjang'].'</td>
                          <td><center>'.$penunjang[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$penunjang[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/penunjang/'.$penunjang[$i]['id_tendik_penunjang'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }?>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'2'.'</b></center></td>
                         <td><b>'.'Kegiatan Ilmiah'.'</b></td></tr>'
                        ;
                        $no=1;
                        for ($i=0; $i < count($penunjang2) ; $i++){
                        echo
                        '<tr>
                          <td><center>'.$no.'</center></td>
                          <td>'.$penunjang2[$i]['nm_tendik_penunjang2'].'</td>
                          <td><center>'.$penunjang2[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$penunjang2[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/penunjang2/'.$penunjang2[$i]['id_tendik_penunjang2'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }?>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'3'.'</b></center></td>
                         <td><b>'.'Keterampilan / Keahlian'.'</b></td></tr>'
                        ;
                        $no=1;
                        for ($i=0; $i < count($penunjang3) ; $i++){
                        echo
                        '<tr>
                          <td><center>'.$no.'</center></td>
                          <td>'.$penunjang3[$i]['nm_tendik_penunjang3'].'</td>
                          <td><center>'.$penunjang3[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$penunjang3[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/penunjang3/'.$penunjang3[$i]['id_tendik_penunjang3'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }?>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'4'.'</b></center></td>
                         <td><b>'.'Pelatihan/Keahlian'.'</b></td></tr>'
                        ;
                        $no=1;
                        for ($i=0; $i < count($penunjang3) ; $i++){
                        echo
                        '<tr>
                          <td><center>'.$no.'</center></td>
                          <td>'.$penunjang4[$i]['nm_tendik_penunjang4'].'</td>
                          <td><center>'.$penunjang4[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$penunjang4[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/penunjang4/'.$penunjang4[$i]['id_tendik_penunjang4'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }?>
                        <?php
                        $no=5;
                        for ($i=0; $i < count($penunjang5) ; $i++){
                        echo
                        '<tr>
                          <td><center><b>'.$no.'<b></center></td>
                          <td><b>'.$penunjang5[$i]['nm_tendik_penunjang5'].'<b></td>
                          <td><center>'.$penunjang5[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$penunjang5[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/penunjang5/'.$penunjang5[$i]['id_tendik_penunjang5'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }?>
                      </tbody>
                      <tbody>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'V'.'</b></center></td>
                         <td><b>'.'Pengabdian Kepada Masyarakat'.'</b></td></tr>
                         <tr><td><center><b>'.'1.'.'</b></center></td>
                         <td><b>'.'Pelayanan Masyarakat.'.'</b></td></tr>';
                        $no=1;
                        for ($i=0; $i < count($pengabdian) ; $i++){
                        echo
                        '<tr>
                          <td><center>'.$no.'</center></td>
                          <td>'.$pengabdian[$i]['nm_tendik_pengabdian'].'</td>
                          <td><center>'.$pengabdian[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$pengabdian[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/pengabdian/'.$pengabdian[$i]['id_tendik_pengabdian'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }?>
                        <?php
                        echo 
                        '
                         <tr><td><center><b>'.'2.'.'</b></center></td>
                         <td><b>'.'Karya tulis PPM dan Penulisan artikel di media massa.'.'</b></td></tr>';
                        $no=1;
                        for ($i=0; $i < count($pengabdian2) ; $i++){
                        echo
                        '<tr>
                          <td><center>'.$no.'</center></td>
                          <td>'.$pengabdian2[$i]['nm_tendik_pengabdian2'].'</td>
                          <td><center>'.$pengabdian2[$i]['tendik_bobot_nilai'].'</center></td>
                          <td><center>'.$pengabdian2[$i]['tendik_nm_var'].'</center></td>
                          <td><center>'.'<a href="edit-nilai/pengabdian2/'.$pengabdian2[$i]['id_tendik_pengabdian2'].'"><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ubah</button></a>'.'</center></td>
                        </tr>';
                        $no++;
                        }?>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
            </div>
		</div>
		
    </div>
</div>