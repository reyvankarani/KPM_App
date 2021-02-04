<div class="col-lg">
	<div class="card">
		<div class="card-header">
			<i class="fa fa-users fa-lg"></i> Edit Penilaian Kinerja Tenaga Kependidikan -> <?php echo $tendik['nm_tendik'] ?></div>
		<div class="card-body">
			<form class="form-horizontal" action="<?php echo base_url().'nilai-tendik/'.$link.'/'.$alias.'/'.$id.'/perbaharui_nilai'?>" method="post" accept-charset="utf-8">
			<table class="table table-responsive-sm table-striped">
				<tr>
					<td class="text-left"><b>Nama Tenaga Kependidikan</b></td>
					<td class="text-left"><?php echo $tendik['nm_tendik']; ?></td>
				</tr>
        <tr>
          <td class="text-left"><b>NIK</b></td>
          <td class="text-left"><?php echo $tendik['nik']; ?></td>
        </tr>
				<tr>
					<td class="text-left"><b>Unit</b></td>
					<td class="text-left"><?php echo $tendik['nm_unit']; ?></td>
				</tr>
				<tr>
					<td class="text-left"><b>Jabatan</b></td>
					<td class="text-left"><?php echo $tendik['nm_jabatan']; ?></td>
				</tr>
				
			</table>
			<div class="form-group">
              <label class="col-form-label">Variable</label>
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#nilai1" role="tab" aria-controls="nilai1">Nilai I</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nilai2" role="tab" aria-controls="nilai2">Nilai II</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="nilai1" role="tabpanel">
                    <table class="table table-responsive-sm table-hover">
                      <thead>
                        <tr>
                          <th width="60"><center>No.</center></th>
                          <th><center>Aspek Penilaian</center></th>
                          <th><center>Nilai</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        echo 
                        '<td><center><b>'.'I'.'</b></center></td>
                         <td><b>'.'Personal'.'</b></td>'
                        ;
                        $no=1;
                        $alpha = 97;
                        for ($i=0; $i < count($personal['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.chr($alpha).'</center></td>
                            <td>'.$personal['kegiatan'][$i]['nm_tendik_personal'].'</td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_personal[]" value="'.$personal['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        } 
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
                        $alpha = 97;
                        for ($i=0; $i < count($administratif['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.chr($alpha).'</center></td>
                            <td>'.$administratif['kegiatan'][$i]['nm_tendik_administratif'].'</td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_administratif[]" value="'.$administratif['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        } 
                        ?>
                        <?php
                        echo 
                        '
                         <tr><td><center><b>'.'2.'.'</b></center></td>
                         <td><b>'.'Pelayanan.'.'</b></td></tr>'
                        ;
                        $no=1;
                        $alpha = 97;
                        for ($i=0; $i < count($administratif2['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.chr($alpha).'</center></td>
                            <td>'.$administratif2['kegiatan'][$i]['nm_tendik_administratif2'].'</td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_administratif2[]" value="'.$administratif2['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        } 
                        ?>
                        <?php
                        $no=3;
                        $alpha = 97;
                        for ($i=0; $i < count($administratif3['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center><b>'.$no.'<b></center></td>
                            <td><b>'.$administratif3['kegiatan'][$i]['nm_tendik_administratif3'].'<b></td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_administratif3[]" value="'.$administratif3['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
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
                        $alpha = 97;
                        for ($i=0; $i < count($strukturalmanajerial['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.chr($alpha).'</center></td>
                            <td>'.$strukturalmanajerial['kegiatan'][$i]['nm_tendik_strukturalmanajerial'].'</td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_strukturalmanajerial[]" value="'.$strukturalmanajerial['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        } 
                        ?>
                        <?php
                        echo 
                        '
                         <tr><td><center><b>'.'2.'.'</b></center></td>
                         <td><b>'.'Pelayanan.'.'</b></td></tr>'
                        ;
                        $no=1;
                        $alpha = 97;
                        for ($i=0; $i < count($strukturalmanajerial2['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.chr($alpha).'</center></td>
                            <td>'.$strukturalmanajerial2['kegiatan'][$i]['nm_tendik_strukturalmanajerial2'].'</td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_strukturalmanajerial2[]" value="'.$strukturalmanajerial2['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        } 
                        ?>
                        <?php
                        ;
                        $no=3;
                        $alpha = 97;
                        for ($i=0; $i < count($strukturalmanajerial3['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center><b>'.$no.'<b></center></td>
                            <td><b>'.$strukturalmanajerial3['kegiatan'][$i]['nm_tendik_strukturalmanajerial3'].'<b></td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_strukturalmanajerial3[]" value="'.$strukturalmanajerial3['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        } 
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="nilai2" role="tabpanel">
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
                        $alpha = 97;
                        for ($i=0; $i < count($penunjang['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.chr($alpha).'</center></td>
                            <td>'.$penunjang['kegiatan'][$i]['nm_tendik_penunjang'].'</td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_penunjang[]" value="'.$penunjang['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        }
                        ?>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'2'.'</b></center></td>
                         <td><b>'.'Kegiatan Ilmiah'.'</b></td></tr>'
                        ;
                        $no=1;
                        $alpha = 97;
                        for ($i=0; $i < count($penunjang2['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.chr($alpha).'</center></td>
                            <td>'.$penunjang2['kegiatan'][$i]['nm_tendik_penunjang2'].'</td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_penunjang2[]" value="'.$penunjang2['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        }
                        ?>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'3'.'</b></center></td>
                         <td><b>'.'Keterampilan/Keahlian'.'</b></td></tr>'
                        ;
                        $no=1;
                        $alpha = 97;
                        for ($i=0; $i < count($penunjang3['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.chr($alpha).'</center></td>
                            <td>'.$penunjang3['kegiatan'][$i]['nm_tendik_penunjang3'].'</td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_penunjang3[]" value="'.$penunjang3['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        }
                        ?>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'4'.'</b></center></td>
                         <td><b>'.'Pelatihan Keahlian'.'</b></td></tr>'
                        ;
                        $no=1;
                        $alpha = 97;
                        for ($i=0; $i < count($penunjang4['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.chr($alpha).'</center></td>
                            <td>'.$penunjang4['kegiatan'][$i]['nm_tendik_penunjang4'].'</td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_penunjang4[]" value="'.$penunjang4['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        }
                        ?>
                        <?php
                        $no=5;
                        $alpha = 97;
                        for ($i=0; $i < count($penunjang5['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center><b>'.$no.'<b></center></td>
                            <td><b>'.$penunjang5['kegiatan'][$i]['nm_tendik_penunjang5'].'<b></td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_penunjang5[]" value="'.$penunjang5['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        }
                        ?>
                      </tbody>
                      <tbody>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'V'.'</b></center></td>
                        <td><b>'.'Pengabdian Kepada Masyarakat'.'</b></td>
                        <td></td></tr>
                        <tr><td><center><b>'.'1.'.'</b></center></td>
                        <td><b>'.'Pelayanan Masyarakat.'.'</b></td>
                        <td></td></tr>'
                        ;
                        $no=1;
                        $alpha = 97;
                        for ($i=0; $i < count($pengabdian['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.chr($alpha).'</center></td>
                            <td>'.$pengabdian['kegiatan'][$i]['nm_tendik_pengabdian'].'</td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_pengabdian[]" value="'.$pengabdian['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        } 
                        ?>
                        <?php
                        echo 
                        '
                        <tr><td><center><b>'.'2.'.'</b></center></td>
                        <td><b>'.'Karya Tulis PPM dan Penulisan artikel di media massa.'.'</b></td>
                        <td></td></tr>'
                        ;
                        $no=1;
                        $alpha = 97;
                        for ($i=0; $i < count($pengabdian2['kegiatan']) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.chr($alpha).'</center></td>
                            <td>'.$pengabdian2['kegiatan'][$i]['nm_tendik_pengabdian2'].'</td>
                            <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_pengabdian2[]" value="'.$pengabdian2['nilai'][$i].'"></center></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        } 
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="penunjangs" role="tabpanel">
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
                        $no=1;
                        foreach ($getpenunjang as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_penunjang'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_penunjang[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;?>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="personal" role="tabpanel">
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
                        $no=1;
                        foreach ($getpersonal as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_personal'];?></td>
                          <td><center><input class="form-control form-control-sm col-4" style="text-align: center;" type="text" name="nilai_personal_x[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          <div class="form-horizontal">
          <div class="form-group row">
            <?php foreach ($tendikrekap as $data):?>
            <label class="col-1 col-form-label">Penilai:</label>
            <div class="col-5">
              <input class="form-control form-control-sm" value="<?php echo $data['penilai'];?>" type="text" name="penilai" required>
            </div>
           </div>
          </div>
          <div class="form-horizontal">
          <div class="form-group row">
            <label class="col-1 col-form-label">Mengetahui:</label>
            <div class="col-5">
              <input class="form-control form-control-sm" value="<?php echo $data['mengetahui'];?>" type="text" name="mengetahui" required>
            </div>
            <?php endforeach;?>
           </div>
          </div>
		</div>
		<div class="card-footer">
			<button class="btn btn-sm btn-success" type="submit">
				<i class="fa fa-dot-circle-o"></i> Submit
			</button>
			<button class="btn btn-sm btn-danger" type="reset">
				<i class="fa fa-ban"></i> Reset
			</button>
		</div>
	</form>
    </div>
</div>