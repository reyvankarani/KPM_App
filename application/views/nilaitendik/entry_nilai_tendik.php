<div class="col-lg">
	<div class="card">
		<div class="card-header">
			<i class="fa fa-users fa-lg"></i>Entry Penilaian Kinerja Tenaga Kependidikan -> <?php echo $tendik['nm_tendik'] ?></div>
		<div class="card-body">
			<form class="form-horizontal" action="<?php echo base_url().'nilai-tendik/'.$link.'/'.$alias.'/'.$id_tendik.'/simpan'?>" method="post" accept-charset="utf-8">
			<table class="table table-responsive-sm table-striped">
				<tr>
					<td class="text-left"><b>Nama Tenaga Kependidikan</b></td>
					<td class="text-left"><?php echo $tendik2['nm_tendik']; ?></td>
				</tr>
        <tr>
          <td class="text-left"><b>NIK</b></td>
          <td class="text-left"><?php echo $tendik2['nik']; ?></td>
        </tr>
				<tr>
					<td class="text-left"><b>Unit</b></td>
					<td class="text-left"><?php echo $tendik2['unit']; ?></td>
				</tr>
				<tr>
					<td class="text-left"><b>Jabatan</b></td>
					<td class="text-left"><?php echo $tendik2['jabatan']; ?></td>
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
                        foreach ($getaspekpersonal as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_personal'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_personal[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;?>
                      </tbody>
                      <tbody>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'II'.'</b></center></td>
                         <td><b>'.'Administratif'.'</b></td>
                         <td></td></tr>
                         <tr><td><center><b>'.'1.'.'</b></center></td>
                         <td><b>'.'Penyelesaian Tugas Rutin.'.'</b></td>
                         <td></td></tr>'
                        ;
                        $no=1;
                        foreach ($getaspekadministratif as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_administratif'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_administratif[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;?>
                        <?php
                        echo
                         '<tr><td><center><b>'.'2.'.'</b></center></td>
                         <td><b>'.'Pelayanan.'.'</b></td>
                         <td></td></tr>'
                        ;
                        $no=1;
                        foreach ($getaspekadministratif2 as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_administratif2'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_administratif2[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;?>
                        <?php
                        $no=3;
                        foreach ($getaspekadministratif3 as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td><b>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_administratif3'];?></b></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_administratif3[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;?>

                      </tbody>
                      <tbody>
                        <?php
                        echo 
                        '<tr><td><center><b>'.'III'.'</b></center></td>
                         <td><b>'.'Struktural/Manajerial'.'</b></td>
                         <td></td></tr>
                         <tr><td><center><b>'.'1.'.'</b></center></td>
                         <td><b>'.'Program Pengembangan.'.'</b></td>
                         <td></td></tr>'
                        ;
                        $no=1;
                        foreach ($getaspekstrukturalmanajerial as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_strukturalmanajerial'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_strukturalmanajerial[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;
                        echo 
                        '
                         <tr><td><center><b>'.'2'.'</b></center></td>
                         <td><b>'.'DELEGASI DAN MONITORING.'.'</b></td>
                         <td></td></tr>'
                        ;
                        $no=1;
                        foreach ($getaspekstrukturalmanajerial2 as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_strukturalmanajerial2'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_strukturalmanajerial2[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;
                        $no=3;
                        foreach ($getaspekstrukturalmanajerial3 as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<b><?php echo $row['nm_tendik_strukturalmanajerial3'];?></b></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_strukturalmanajerial3[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;
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
                        foreach ($getaspekpenunjang as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_penunjang'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_penunjang[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;
                        echo 
                        '<tr><td><center>'.'2.'.'</center></td>
                         <td>&emsp;&emsp;&emsp;'.'Kegiatan Ilmiah.'.'</td>
                         <td></td></tr>';
                        $no=1;
                        foreach ($getaspekpenunjang2 as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_penunjang2'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_penunjang2[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;
                        echo 
                        '<tr><td><center>'.'3.'.'</center></td>
                         <td>&emsp;&emsp;&emsp;'.'Keterampilan/Keahlian.'.'</td>
                         <td></td></tr>';
                        $no=1;
                        foreach ($getaspekpenunjang3 as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_penunjang3'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_penunjang3[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;
                        echo 
                        '<tr><td><center>'.'4.'.'</center></td>
                         <td>&emsp;&emsp;&emsp;'.'Pelatihan Keahlian.'.'</td>
                         <td></td></tr>';
                        $no=1;
                        foreach ($getaspekpenunjang4 as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_penunjang4'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_penunjang4[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;
                        $no=5;
                        foreach ($getaspekpenunjang5 as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_penunjang5'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_penunjang5[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;  
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
                        foreach ($getaspekpengabdian as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_pengabdian'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_pengabdian[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;
                         echo 
                        '
                         <tr><td><center><b>'.'2.'.'</b></center></td>
                         <td><b>'.'Karya Tulis PPM dan Penulisan artikel di media massa.'.'</b></td>
                         <td></td></tr>'
                        ;
                        $no=1;
                        foreach ($getaspekpengabdian2 as $row):?>
                        <tr>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<?php echo $row['nm_tendik_pengabdian2'];?></td>
                          <td><center><input class="form-control form-control-sm col-3" style="text-align: center;" type="text" name="nilai_pengabdian2[]" placeholder="00.00"></center></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;?>
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          <div class="form-horizontal">
          <div class="form-group row">
            <label class="col-1 col-form-label">Penilai:</label>
            <div class="col-5">
              <input class="form-control form-control-sm" type="text" name="penilai" required>
            </div>
          </div>
          </div>
          <div class="form-horizontal">
          <div class="form-group row">
            <label class="col-1 col-form-label">Mengetahui:</label>
            <div class="col-5">
              <input class="form-control form-control-sm" type="text" name="mengetahui" required>
            </div>
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