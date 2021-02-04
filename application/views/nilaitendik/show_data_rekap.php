<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('update_success'); ?>"></div>  
      <!--card-->
    <?php if($this->session->flashdata('update_success')): ?>  
    <!-- <div class="container">
            <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('update_success').'</div>'; ?>
          
     </div> -->
    <?php endif; ?>      
      <div class="col-sm-12 col-xl-6">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-users fa-lg"></i>Identitas
          </div>
          <div class="card-body">
            <div class="row">
              <!-- /.col-->
            </div>
            <br>
            <!-- /.row-->
            <div class="row">
              <table class="table table-responsive-sm table-striped">
                <tr>
                  <td class="text-left"><b>Nama Tendik</b></td>
                  <td class="text-left"><?php echo $tendik['nm_tendik']; ?></td>
                </tr>
                <tr>
                  <td class="text-left"><b>NIK</b></td>
                  <td class="text-left"><?php echo $tendik['nik']; ?></td>
                </tr>
                <tr>
                  <td class="text-left"><b>Unit</b></td>
                  <td class="text-left"><?php echo $tendik['unit']; ?></td>
                </tr>
                <tr>
                  <td class="text-left"><b>Jabatan</b></td>
                  <td class="text-left"><?php echo $tendik['jabatan']; ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- card -->
      <div class="col-sm-12 col-xl-6">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-bar-chart fa-lg"></i>Hasil Penilaian
          </div>
          <div class="card-body">
            <label>Nilai</label>
            <table class="table table-striped">
              <tr>
                <td>Total I</td>
                <td align="right"><strong><i><?php echo $total['totalnxb'];?></i></strong></td>
              </tr>
              <tr>
                <td>NM</td>
                <td align="right"><strong><i><?php echo $total['totalnmvar'];?></i></strong></td>
              </tr>
              <tr>
                <td>Nilai +/-</td>
                <td align="right"><strong><i><?php echo $total['nilaikuranglebih'];?></i></strong></td>
              </tr>
            </table>
            <table class="table table-striped">
              <tr>
                <td>Total II</td>
                <td align="right"><strong><i><?php echo $total['total2'];?></i></strong></td>
              </tr>
              <tr>
                <td>Total I + II</td>
                <td align="right"><strong><i><?php echo $total['total1plus2'];?></i></strong></td>
              </tr>
            </table>
            <br>
          </div>
        </div>
      </div>
    </div>
    <!-- card -->
    <div class="card">
      <div class="card-header" align="right">
        <a href="<?php echo base_url().'nilai-tendik/'.$link.'/'.$alias.'/'.$id.'/print';?>"><button class="btn btn-success"><i class="fa fa-print"></i> Cetak</button></a>
        <a href="<?php echo base_url().'nilai-tendik/'.$link.'/'.$alias.'/'.$id.'/ubah';?>"><button class="btn btn-primary"><i class="fa fa-pencil"></i> Ubah</button></a>
        <a href="<?php echo base_url().'nilai-tendik/'.$link.'/'.$alias.'/'.$id.'/hapus';?>"><button class="btn btn-danger tombol-hapus"></a><i class="fa fa-trash"></i> Hapus</button>
        <a href="<?php echo base_url().'nilai-tendik/'.$link.'/'.$alias.'/'.$id.'/saveaspdf';?>"><button class="btn btn-warning"><i class="fa fa-file"></i> Save As Pdf</button></a>
      </div>
    	<div class="card-body">
        <h4>Aspek Penilaian</h4>
    		<div class="form-group">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#nilai1" role="tab" aria-controls="dikjar">Nilai I</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#nilai2" role="tab" aria-controls="karya_ilmiah">Nilai II</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="nilai1" role="tabpanel">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <td>Total Bobot</td>
                    <td><center><strong><i><?php echo $total['totalbobot'];?></i></strong></center></td>
                    <td>Total NM VAR</td>
                    <td><center><strong><i><?php echo $total['totalnmvar'];?></i></strong></center></td>
                    <td>Total Nilai x Bobot</td>
                    <td><center><strong><i><?php echo $total['totalnxb'];?></i></strong></center></td>
                    <td>Total (Nilai x Bobot) x NM VAR</td>
                    <td><center><strong><i><?php echo $total['totalnxbxn'];?></i></strong></center></td>
                  </tr>
                </thead>
              </table>
              <label>Rincian Nilai</label>
              <table class="table table-responsive-sm table-hover">
                <thead>
                  <tr>
                    <th width="60"><center>No.</center></th>
                    <th><center>Variabel Penilaian</center></th>
                    <th><center>Bobot</center></th>
                    <th><center>NM VAR</center></th>
                    <th><center>Nilai</center></th>
                    <th><center>Nilai x Bobot</center></th>
                    <th><center>(Nilai x Bobot) NM VAR</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  echo 
                  '<td><center><b>'.'I'.'</b></center></td>
                   <td><b>'.'Personal'.'</b></td>'
                  ;
                  $no = 1;
                  //ascii for alphabet
                  $alpha = 97;
                  for ($i=0; $i < count($personal['kegiatan']) ; $i++){
                    if($personal['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$personal['kegiatan'][$i]['nm_tendik_personal'].'</td>
                      <td>'.'0.00'.'</td>
                      <td>'.'0.00'.'</td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$personal['kegiatan'][$i]['nm_tendik_personal'].'</td>
                      <td>'.$personal['kegiatan'][$i]['bobot_tendik_personal'].'</td>
                      <td>'.$personal['kegiatan'][$i]['nmvar_tendik_personal'].'</td>
                      <td><center>'.$personal['nilai'][$i].'</center></td>
                      <td><center>'.$personal['nilaixbobot'][$i].'</center></td>
                      <td><center>'.$personal['nilaixbobotxnmvar'][$i].'</center></td>
                    </tr>';}
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
                  echo 
                  '';
                  $no = 1;
                  //ascii for alphabet
                  $alpha = 97;
                  for ($i=0; $i < count($administratif['kegiatan']) ; $i++){
                    if($administratif['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$administratif['kegiatan'][$i]['nm_tendik_administratif'].'</td>
                      <td>'.'0.00'.'</td>
                      <td>'.'0.00'.'</td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$administratif['kegiatan'][$i]['nm_tendik_administratif'].'</td>
                      <td>'.$administratif['kegiatan'][$i]['bobot_tendik_administratif'].'</td>
                      <td>'.$administratif['kegiatan'][$i]['nmvar_tendik_administratif'].'</td>
                      <td><center>'.$administratif['nilai'][$i].'</center></td>
                      <td><center>'.$administratif['nilaixbobot'][$i].'</center></td>
                      <td><center>'.$administratif['nilaixbobotxnmvar'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                  <?php
                  echo 
                  '
                   <tr><td><center><b>'.'2.'.'</b></center></td>
                   <td><b>'.'Pelayanan.'.'</b></td></tr>
                  '
                  ;
                  echo 
                  '';
                  $no = 1;
                  //ascii for alphabet
                  $alpha = 97;
                  for ($i=0; $i < count($administratif2['kegiatan']) ; $i++){
                    if($administratif2['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$administratif2['kegiatan'][$i]['nm_tendik_administratif2'].'</td>
                      <td>'.'0.00'.'</td>
                      <td>'.'0.00'.'</td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$administratif2['kegiatan'][$i]['nm_tendik_administratif2'].'</td>
                      <td>'.$administratif2['kegiatan'][$i]['bobot_tendik_administratif2'].'</td>
                      <td>'.$administratif2['kegiatan'][$i]['nmvar_tendik_administratif2'].'</td>
                      <td><center>'.$administratif2['nilai'][$i].'</center></td>
                      <td><center>'.$administratif2['nilaixbobot'][$i].'</center></td>
                      <td><center>'.$administratif2['nilaixbobotxnmvar'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                  <?php
                  echo 
                  '';
                  $no = 3;
                  //ascii for alphabet
                  $alpha = 97;
                  for ($i=0; $i < count($administratif3['kegiatan']) ; $i++){
                    if($administratif2['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center><b>'.$no.'<b></center></td>
                      <td><b>'.$administratif3['kegiatan'][$i]['nm_tendik_administratif3'].'<b></td>
                      <td>'.'0.00'.'</td>
                      <td>'.'0.00'.'</td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center><b>'.$no.'<b></center></td>
                      <td><b>'.$administratif3['kegiatan'][$i]['nm_tendik_administratif3'].'<b></td>
                      <td>'.$administratif3['kegiatan'][$i]['bobot_tendik_administratif3'].'</td>
                      <td>'.$administratif3['kegiatan'][$i]['nmvar_tendik_administratif3'].'</td>
                      <td><center>'.$administratif3['nilai'][$i].'</center></td>
                      <td><center>'.$administratif3['nilaixbobot'][$i].'</center></td>
                      <td><center>'.$administratif3['nilaixbobotxnmvar'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                </tbody>
                <tbody>
                  <?php
                  echo 
                  '<tr><td><center><b>'.'III'.'</b></center></td>
                   <td><b>'.'Struktural Manajerial'.'</b></td></tr>
                   <tr><td><center><b>'.'1.'.'</b></center></td>
                   <td><b>'.'Penyelesaian Tugas Rutin.'.'</b></td></tr>'
                  ;
                  echo 
                  '';
                  $no = 1;
                  //ascii for alphabet
                  $alpha = 97;
                  for ($i=0; $i < count($strukturalmanajerial['kegiatan']) ; $i++){
                    if($strukturalmanajerial['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$strukturalmanajerial['kegiatan'][$i]['nm_tendik_strukturalmanajerial'].'</td>
                      <td>'.'0.00'.'</td>
                      <td>'.'0.00'.'</td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$strukturalmanajerial['kegiatan'][$i]['nm_tendik_strukturalmanajerial'].'</td>
                      <td>'.$strukturalmanajerial['kegiatan'][$i]['bobot_tendik_strukturalmanajerial'].'</td>
                      <td>'.$strukturalmanajerial['kegiatan'][$i]['nmvar_tendik_strukturalmanajerial'].'</td>
                      <td><center>'.$strukturalmanajerial['nilai'][$i].'</center></td>
                      <td><center>'.$strukturalmanajerial['nilaixbobot'][$i].'</center></td>
                      <td><center>'.$strukturalmanajerial['nilaixbobotxnmvar'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                  <?php
                  echo 
                  '
                   <tr><td><center><b>'.'2.'.'</b></center></td>
                   <td><b>'.'DELEGASI DAN MONITORING.'.'</b></td></tr>'
                  ;
                  echo 
                  '';
                  $no = 1;
                  //ascii for alphabet
                  $alpha = 97;
                  for ($i=0; $i < count($strukturalmanajerial2['kegiatan']) ; $i++){
                    if($strukturalmanajerial2['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$strukturalmanajerial2['kegiatan'][$i]['nm_tendik_strukturalmanajerial2'].'</td>
                      <td>'.'0.00'.'</td>
                      <td>'.'0.00'.'</td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$strukturalmanajerial2['kegiatan'][$i]['nm_tendik_strukturalmanajerial2'].'</td>
                      <td>'.$strukturalmanajerial2['kegiatan'][$i]['bobot_tendik_strukturalmanajerial2'].'</td>
                      <td>'.$strukturalmanajerial2['kegiatan'][$i]['nmvar_tendik_strukturalmanajerial2'].'</td>
                      <td><center>'.$strukturalmanajerial2['nilai'][$i].'</center></td>
                      <td><center>'.$strukturalmanajerial2['nilaixbobot'][$i].'</center></td>
                      <td><center>'.$strukturalmanajerial2['nilaixbobotxnmvar'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                  <?php
                  echo 
                  '';
                  $no = 3;
                  //ascii for alphabet
                  $alpha = 97;
                  for ($i=0; $i < count($strukturalmanajerial3['kegiatan']) ; $i++){
                    if($strukturalmanajerial3['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.$no.'</center></td>
                      <td><b>'.$strukturalmanajerial3['kegiatan'][$i]['nm_tendik_strukturalmanajerial3'].'<b></td>
                      <td>'.'0.00'.'</td>
                      <td>'.'0.00'.'</td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.$no.'</center></td>
                      <td><b>'.$strukturalmanajerial3['kegiatan'][$i]['nm_tendik_strukturalmanajerial3'].'<b></td>
                      <td>'.$strukturalmanajerial3['kegiatan'][$i]['bobot_tendik_strukturalmanajerial3'].'</td>
                      <td>'.$strukturalmanajerial3['kegiatan'][$i]['nmvar_tendik_strukturalmanajerial3'].'</td>
                      <td><center>'.$strukturalmanajerial3['nilai'][$i].'</center></td>
                      <td><center>'.$strukturalmanajerial3['nilaixbobot'][$i].'</center></td>
                      <td><center>'.$strukturalmanajerial3['nilaixbobotxnmvar'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="nilai2" role="tabpanel">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <td>Total Nilai II</td>
                    <td><center><strong><i><?php echo $total['total2'];?></i></strong></center></td>
                    <td></td>
                    <td><center><strong><i></i></strong></center></td>
                    <td></td>
                    <td><center><strong><i></i></strong></center></td>
                    <td></td>
                    <td><center><strong><i></i></strong></center></td>
                  </tr>
                </thead>
              </table>
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
                    '<tr><td><center><b>'.'IV'.'</b></center></td>
                    <td><b>'.'Penunjang'.'</b></td></tr>'
                  ;
                  $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($penunjang['kegiatan']) ; $i++){
                    if($penunjang['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$penunjang['kegiatan'][$i]['nm_tendik_penunjang'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.$no.'</center></td>
                      <td>'.$penunjang['kegiatan'][$i]['nm_tendik_penunjang'].'</td>
                      <td><center>'.$penunjang['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                  <?php
                  echo 
                    '<tr><td><center><b>'.'2'.'</b></center></td>
                    <td><b>'.'Kegiatan Ilmiah'.'</b></td></tr>'
                  ;
                  $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($penunjang2['kegiatan']) ; $i++){
                    if($penunjang2['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$penunjang2['kegiatan'][$i]['nm_tendik_penunjang2'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$penunjang2['kegiatan'][$i]['nm_tendik_penunjang2'].'</td>
                      <td><center>'.$penunjang2['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                  <?php
                  echo 
                    '<tr><td><center><b>'.'3'.'</b></center></td>
                    <td><b>'.'Keterampilan/Keahlian'.'</b></td></tr>'
                  ;
                  $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($penunjang3['kegiatan']) ; $i++){
                    if($penunjang3['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$penunjang3['kegiatan'][$i]['nm_tendik_penunjang3'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$penunjang3['kegiatan'][$i]['nm_tendik_penunjang3'].'</td>
                      <td><center>'.$penunjang3['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                  <?php
                  echo 
                    '<tr><td><center><b>'.'4'.'</b></center></td>
                    <td><b>'.'Pelatihan Keahlian'.'</b></td></tr>'
                  ;
                  $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($penunjang4['kegiatan']) ; $i++){
                    if($penunjang4['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$penunjang4['kegiatan'][$i]['nm_tendik_penunjang4'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$penunjang4['kegiatan'][$i]['nm_tendik_penunjang4'].'</td>
                      <td><center>'.$penunjang4['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                  <?php
                  $alpha = 97;
                  $no = 5;
                  for ($i=0; $i < count($penunjang5['kegiatan']) ; $i++){
                    if($penunjang5['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center><b>'.$no.'<b></center></td>
                      <td><b>'.$penunjang5['kegiatan'][$i]['nm_tendik_penunjang5'].'<b></td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center><b>'.$no.'<b></center></td>
                      <td><b>'.$penunjang5['kegiatan'][$i]['nm_tendik_penunjang5'].'<b></td>
                      <td><center>'.$penunjang5['nilai'][$i].'</center></td>
                    </tr>';}
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
                  $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($pengabdian['kegiatan']) ; $i++){
                    if($pengabdian['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$pengabdian['kegiatan'][$i]['nm_tendik_pengabdian'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$pengabdian['kegiatan'][$i]['nm_tendik_pengabdian'].'</td>
                      <td><center>'.$pengabdian['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                  <?php
                   echo 
                      '
                      <tr><td><center><b>'.'2.'.'</b></center></td>
                      <td><b>'.'Karya tulis PPM dan Penulisan artikel di media massa.'.'</b></td>
                      <td></td></tr>'
                        ;
                  $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($pengabdian2['kegiatan']) ; $i++){
                    if($pengabdian2['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$pengabdian2['kegiatan'][$i]['nm_tendik_pengabdian2'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.chr($alpha).'</center></td>
                      <td>'.$pengabdian2['kegiatan'][$i]['nm_tendik_pengabdian2'].'</td>
                      <td><center>'.$pengabdian2['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="pkm" role="tabpanel">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <td>Jumlah Nilai Angka Kinerja</td>
                    <td><center><strong><i><?php echo $pkm['total_ak'];?></i></strong></center></td>
                    <td>Nilai Minimal</td>
                    <td><center><strong><i><?php echo $pkm['nilai_minimal'];?></i></strong></center></td>
                    <td>+/-</td>
                    <td><center><strong><i><?php echo $pkm['kuranglebih'];?></i></strong></center></td>
                    <td>Lebihan</td>
                    <td><center><strong><i><?php echo $pkm['lebihan'];?></i></strong></center></td>
                  </tr>
                </thead>
              </table>
              <table class="table table-responsive-sm table-hover">
                <thead>
                  <tr>
                    <th width="60"><center>No.</center></th>
                    <th><center>Aspek Penilaian</center></th>
                    <th><center>Satuan/Kegiatan</center></th>
                    <th><center>Angka Kinerja</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  for ($i=0; $i < count($pkm['kegiatan']) ; $i++){
                    echo
                    '<tr>
                    <td><center>'.$no.'</center></td>
                    <td>'.$pkm['kegiatan'][$i]['nm_pkm'].'</td>
                    <td><center>'.$pkm['satuan_kegiatan'][$i].'</center></td>
                    <td><center>'.$pkm['angka_kinerja'][$i].'</center></td>
                    </tr>';
                    $no++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="penunjang" role="tabpanel">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <td>Jumlah Nilai Angka Kinerja</td>
                    <td><center><strong><i><?php echo $penunjang['total_ak'];?></i></strong></center></td>
                    <td>Nilai Minimal</td>
                    <td><center><strong><i><?php echo $penunjang['nilai_minimal'];?></i></strong></center></td>
                    <td>+/-</td>
                    <td><center><strong><i><?php echo $penunjang['kuranglebih'];?></i></strong></center></td>
                    <td>Lebihan</td>
                    <td><center><strong><i><?php echo $penunjang['lebihan'];?></i></strong></center></td>
                  </tr>
                </thead>
              </table>
              <table class="table table-responsive-sm table-hover">
                <thead>
                  <tr>
                    <th width="60"><center>No.</center></th>
                    <th><center>Aspek Penilaian</center></th>
                    <th><center>Satuan/Kegiatan</center></th>
                    <th><center>Angka Kinerja</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  for ($i=0; $i < count($penunjang['kegiatan']) ; $i++){
                    echo
                    '<tr>
                    <td><center>'.$no.'</center></td>
                    <td>'.$penunjang['kegiatan'][$i]['nm_penunjang'].'</td>
                    <td><center>'.$penunjang['satuan_kegiatan'][$i].'</center></td>
                    <td><center>'.$penunjang['angka_kinerja'][$i].'</center></td>
                    </tr>';
                    $no++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="struktural" role="tabpanel">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <td>Jumlah Nilai Angka Kinerja</td>
                    <td><center><strong><i><?php echo $struktural['total_ak'];?></i></strong></center></td>
                    <td>Nilai Minimal</td>
                    <td><center><strong><i><?php echo $struktural['nilai_minimal'];?></i></strong></center></td>
                    <td>+/-</td>
                    <td><center><strong><i><?php echo $struktural['kuranglebih'];?></i></strong></center></td>
                  </tr>
                </thead>
              </table>
            
            </div>
            <div class="tab-pane fade" id="personal" role="tabpanel">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <td>Jumlah Nilai Angka Kinerja</td>
                    <td><center><strong><i><?php echo $personal['total_ak'];?></i></strong></center></td>
                    <td>Nilai Minimal</td>
                    <td><center><strong><i><?php echo $personal['nilai_minimal'];?></i></strong></center></td>
                    <td>+/-</td>
                    <td><center><strong><i><?php echo $personal['kuranglebih'];?></i></strong></center></td>
                    <td>Lebihan</td>
                    <td><center><strong><i><?php echo array_sum(explode(", ", $personal['lebihan']));?></i></strong></center></td>
                  </tr>
                </thead>
              </table>
              <table class="table table-responsive-sm table-hover">
                <thead>
                  <tr>
                    <th width="60"><center>No.</center></th>
                    <th><center>Aspek Penilaian</center></th>
                    <th><center>Satuan/Kegiatan</center></th>
                    <th><center>Angka Kinerja</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  for ($i=0; $i < count($personal['kegiatan']) ; $i++){
                    echo
                    '<tr>
                    <td><center>'.$no.'</center></td>
                    <td>'.$personal['kegiatan'][$i]['nm_personal'].'</td>
                    <td><center>'.$personal['satuan_kegiatan'][$i].'</center></td>
                    <td><center>'.$personal['angka_kinerja'][$i].'</center></td>
                    </tr>';
                    $no++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
        </div>
    	</div>
    </div>
  </div>
</div>