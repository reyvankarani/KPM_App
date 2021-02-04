<style type="text/css">
body,td,th {
	font-size: 10px;
}
table {
  border-collapse: collapse;
}
td {
  min-width: 30px;
  max-width: 30px;
  overflow: hidden;
}
th.noBorder{
  border: 0;
}	
	
table td.border-less {
    border-top: 0px solid #FFFFFF;
    border-left: 0px solid #FFFFFF;
    border-right: 0px solid #FFFFFF;
}

@media print {
    #hid { display: table-row; }
}
	
</style>
<div style="text-align: center">FORM PENILAIAN KINERJA TENAGA ADMINISTRASI<br>PERIODE <?php echo $tendik2['periode'];?>
</div>
<div>Nama&nbsp; : <?php echo $tendik2['nm_tendik'];?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Jabatan : <?php echo $tendik2['jabatan'];?><br>
Unit&emsp;: <?php echo $tendik2['unit'];?></div>
<table class="fixed" width="868" border="1">
  <tbody>
    <tr>
      <th width="43" align="center"><strong>NO</strong></th>
      <th width="222" align="center"><strong>VARIABEL</strong></th>
      <th width="77" align="center"><strong>Bobot ( %)</strong></th>
      <th width="66" align="center"><strong>NM VAR</strong></th>
      <th width="79" align="center"><strong>Nilai</strong></th>
      <th width="104" align="center"><strong>Nilai x Bobot</strong></th>
      <th width="71" align="center" style="text-align: center"><strong>(Nilai X Bobot) - NM VAR</strong></th>
      <th width="154" align="center"><strong>PENILAI</strong></th>
    </tr>
    <tr>
      <td align="center"><strong>I </strong></td>
      <td><strong>PERSONAL</strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td rowspan="5" align="center">&nbsp;</td>
    </tr>
    <tr>
      <!-- <td align="center">&nbsp;</td> -->
      <?php
      $no=1;
      $alpha=97;
       for ($i=0; $i < count($personal['kegiatan']) ; $i++){
                    if($personal['nilai'][$i] == 0.00){
                    echo
                     '<tr>
                      <td></td>
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
                      <td></td>
                      <td>'.chr($alpha).'.'.$personal['kegiatan'][$i]['nm_tendik_personal'].'</td>
                      <td align="center">'.$personal['kegiatan'][$i]['bobot_tendik_personal'].'</td>
                      <td align="center">'.$personal['kegiatan'][$i]['nmvar_tendik_personal'].'</td>
                      <td align="center"><center>'.$personal['nilai'][$i].'</center></td>
                      <td align="center"><center>'.$personal['nilaixbobot'][$i].'</center></td>
                      <td align="center"><center>'.$personal['nilaixbobotxnmvar'][$i].'</center></td>
                      <tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
    </tr>
    <tr>
      <?php
      echo '
            <tr>
      <td align="center"><strong>II</strong></td>
      <td><strong>ADMINISTRATIF</strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td>1. Penyelesaian Tugas Rutin</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
            ';
      $no=1;
      $alpha=97;
       for ($i=0; $i < count($administratif['kegiatan']) ; $i++){
                    if($administratif['nilai'][$i] == 0.00){
                    echo
                     '<tr>
                      <td></td>
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
                      <td></td>
                      <td>'.chr($alpha).'.'.$administratif['kegiatan'][$i]['nm_tendik_administratif'].'</td>
                      <td align="center">'.$administratif['kegiatan'][$i]['bobot_tendik_administratif'].'</td>
                      <td align="center">'.$administratif['kegiatan'][$i]['nmvar_tendik_administratif'].'</td>
                      <td align="center"><center>'.$administratif['nilai'][$i].'</center></td>
                      <td align="center"><center>'.$administratif['nilaixbobot'][$i].'</center></td>
                      <td align="center"><center>'.$administratif['nilaixbobotxnmvar'][$i].'</center></td>
                      <tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
    <?php
      echo '<tr>
      <td align="center">&nbsp;</td>
      <td>2. Pelayanan</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
          </tr>

            ';
      $no=1;
      $alpha=97;
      $jumlahrows=count($administratif2['kegiatan']);
       for ($i=0; $i < count($administratif2['kegiatan']) ; $i++){
                    if($administratif2['nilai'][$i] == 0.00){
                      if($i === 0){
                    echo
                     '<tr>
                      <td></td>
                      <td>'.$administratif2['kegiatan'][$i]['nm_tendik_administratif2'].'</td>
                      <td>'.'0.00'.'</td>
                      <td>'.'0.00'.'</td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td rowspan='.$jumlahrows.' align="center">&nbsp;</td>
                     </tr>';}
                     else{
                    echo
                     '<tr>
                      <td></td>
                      <td>'.$administratif2['kegiatan'][$i]['nm_tendik_administratif2'].'</td>
                      <td>'.'0.00'.'</td>
                      <td>'.'0.00'.'</td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                     </tr>';  
                     }
                    }else{
                      if($i === 0){
                    echo
                      '<tr>
                      <td align="center">&nbsp;</td>
                      <td>'.chr($alpha).'.'.$administratif2['kegiatan'][$i]['nm_tendik_administratif2'].'</td>
                      <td align="center">'.$administratif2['kegiatan'][$i]['bobot_tendik_administratif2'].'</td>
                      <td align="center">'.$administratif2['kegiatan'][$i]['nmvar_tendik_administratif2'].'</td>
                      <td align="center"><center>'.$administratif2['nilai'][$i].'</center></td>
                      <td align="center"><center>'.$administratif2['nilaixbobot'][$i].'</center></td>
                      <td align="center"><center>'.$administratif2['nilaixbobotxnmvar'][$i].'</center></td>
                      <td rowspan='.$jumlahrows.' align="center">&nbsp;</td>
                      </tr>';}
                      else{
                    echo    
                      '<tr>
                      <td align="center">&nbsp;</td>
                      <td>'.chr($alpha).'.'.$administratif2['kegiatan'][$i]['nm_tendik_administratif2'].'</td>
                      <td align="center">'.$administratif2['kegiatan'][$i]['bobot_tendik_administratif2'].'</td>
                      <td align="center">'.$administratif2['kegiatan'][$i]['nmvar_tendik_administratif2'].'</td>
                      <td align="center"><center>'.$administratif2['nilai'][$i].'</center></td>
                      <td align="center"><center>'.$administratif2['nilaixbobot'][$i].'</center></td>
                      <td align="center"><center>'.$administratif2['nilaixbobotxnmvar'][$i].'</center></td>
                      </tr>';  
                      }
                    }
                  $no++;
                  $alpha++;
                  } 
                  ?>
                  <?php
      $no=3;
      $alpha=97;
       for ($i=0; $i < count($administratif3['kegiatan']) ; $i++){
                    if($administratif3['nilai'][$i] == 0.00){
                    echo
                     '<tr>
                      <td></td>
                      <td><b>'.$no.'.'.$administratif3['kegiatan'][$i]['nm_tendik_administratif3'].'<b></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td><center>'.'0.00'.'</center></td>
                      <td>&nbsp;</td>
                     </tr>';
                    }else{
                    echo
                      '</tr>
                      <td></td>
                      <td><b>'.$no.'.'.$administratif3['kegiatan'][$i]['nm_tendik_administratif3'].'<b></td>
                      <td align="center">'.$administratif3['kegiatan'][$i]['bobot_tendik_administratif3'].'</td>
                      <td align="center">'.$administratif3['kegiatan'][$i]['nmvar_tendik_administratif3'].'</td>
                      <td align="center"><center>'.$administratif3['nilai'][$i].'</center></td>
                      <td align="center"><center>'.$administratif3['nilaixbobot'][$i].'</center></td>
                      <td align="center"><center>'.$administratif3['nilaixbobotxnmvar'][$i].'</center></td>
                      <td>&nbsp;</td>
                      <tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
    </tr>
    <tr>
      <?php
      echo '
            <tr>
            <td align="center"><strong>III</strong></td>
            <td><strong>STRUKTURAL/MANAJERIAL</strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td align="center">&nbsp;</td>
            <td>1. Program Pengembangan</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>';
      $no=1;
      $alpha=97;
       for ($i=0; $i < count($strukturalmanajerial['kegiatan']) ; $i++){
                    if($strukturalmanajerial['nilai'][$i] == 0.00){
                    echo
                     '<tr>
                      <td></td>
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
                      <td></td>
                      <td>'.chr($alpha).'.'.$strukturalmanajerial['kegiatan'][$i]['nm_tendik_strukturalmanajerial'].'</td>
                      <td align="center">'.$strukturalmanajerial['kegiatan'][$i]['bobot_tendik_strukturalmanajerial'].'</td>
                      <td align="center">'.$strukturalmanajerial['kegiatan'][$i]['nmvar_tendik_strukturalmanajerial'].'</td>
                      <td align="center"><center>'.$strukturalmanajerial['nilai'][$i].'</center></td>
                      <td align="center"><center>'.$strukturalmanajerial['nilaixbobot'][$i].'</center></td>
                      <td align="center"><center>'.$strukturalmanajerial['nilaixbobotxnmvar'][$i].'</center></td>
                      <tr>';}
                  $no++;
                  $alpha++;
                  } 
    ?>
    <?php
      echo '
            <tr>
            <td align="center"><strong>&nbsp;</strong></td>
            <td><strong>2. Delegasi dan Monitoring</strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>';
      $no=1;
      $alpha=97;
       for ($i=0; $i < count($strukturalmanajerial2['kegiatan']) ; $i++){
                    if($strukturalmanajerial2['nilai'][$i] == 0.00){
                    echo
                     '<tr>
                      <td></td>
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
                      <td></td>
                      <td>'.chr($alpha).'.'.$strukturalmanajerial2['kegiatan'][$i]['nm_tendik_strukturalmanajerial2'].'</td>
                      <td align="center">'.$strukturalmanajerial2['kegiatan'][$i]['bobot_tendik_strukturalmanajerial2'].'</td>
                      <td align="center">'.$strukturalmanajerial2['kegiatan'][$i]['nmvar_tendik_strukturalmanajerial2'].'</td>
                      <td align="center"><center>'.$strukturalmanajerial2['nilai'][$i].'</center></td>
                      <td align="center"><center>'.$strukturalmanajerial2['nilaixbobot'][$i].'</center></td>
                      <td align="center"><center>'.$strukturalmanajerial2['nilaixbobotxnmvar'][$i].'</center></td>
                      <tr>';}
                  $no++;
                  $alpha++;
                  } 
    ?>
    <?php     
      $no=3;
      $alpha=97;
       for ($i=0; $i < count($strukturalmanajerial3['kegiatan']) ; $i++){
                    if($strukturalmanajerial3['nilai'][$i] == 0.00){
                    echo
                     '<tr>
                      <td></td>
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
                      <td></td>
                      <td><b>'.$no.'.'.$strukturalmanajerial3['kegiatan'][$i]['nm_tendik_strukturalmanajerial3'].'<b></td>
                      <td align="center">'.$strukturalmanajerial3['kegiatan'][$i]['bobot_tendik_strukturalmanajerial3'].'</td>
                      <td align="center">'.$strukturalmanajerial3['kegiatan'][$i]['nmvar_tendik_strukturalmanajerial3'].'</td>
                      <td align="center"><center>'.$strukturalmanajerial3['nilai'][$i].'</center></td>
                      <td align="center"><center>'.$strukturalmanajerial3['nilaixbobot'][$i].'</center></td>
                      <td align="center"><center>'.$strukturalmanajerial3['nilaixbobotxnmvar'][$i].'</center></td>
                      <tr>';}
                  $no++;
                  $alpha++;
                  } 
    ?>    
    </tr>
    
    
    <tr>
      <td align="center">&nbsp;</td>
      <td><strong>Total I</strong></td>
      <td align="center"><strong><?php echo $total['totalbobot'];?></strong></td>
      <td align="center"><strong><?php echo $total['totalnmvar'];?></strong></td>
      <td></td>
      <td align="center"><strong><?php echo $total['totalnxb'];?></strong></td>
      <td align="center"><strong><?php echo $total['totalnxbxn'];?></strong></td>
      <td align="center">&nbsp;</td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table align="left" width="364" border="1">
  <tbody>
    <tr>
      <?php
      echo '
            <th width="43"  align="center"><strong> IV</strong></th>
            <th width="222"><strong>Penunjang</strong></th>
            <th width="77">Nilai</th>
           ';		
      $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($penunjang['kegiatan']) ; $i++){
                    if($penunjang['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.$no.'</center></td>
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
    </tr>              
      <?php
      echo '
          <tr>
          <td align="center">2</td>
          <td>Kegiatan Ilmiah</td>
          <td>&nbsp;</td>
          </tr>';   
      $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($penunjang2['kegiatan']) ; $i++){
                    if($penunjang2['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center></center></td>
                      <td>'.$penunjang2['kegiatan'][$i]['nm_tendik_penunjang2'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center></center></td>
                      <td>'.$penunjang2['kegiatan'][$i]['nm_tendik_penunjang2'].'</td>
                      <td><center>'.$penunjang2['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>              
      <?php
      echo '
          <tr>
          <td align="center">3</td>
          <td>Keterampilan/Keahlian</td>
          <td>&nbsp;</td>
          </tr>';    
      $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($penunjang3['kegiatan']) ; $i++){
                    if($penunjang3['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center></center></td>
                      <td>'.$penunjang3['kegiatan'][$i]['nm_tendik_penunjang3'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center></center></td>
                      <td>'.$penunjang3['kegiatan'][$i]['nm_tendik_penunjang3'].'</td>
                      <td><center>'.$penunjang3['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
      <?php
      echo '
          <tr>
          <td align="center">4</td>
          <td>pelatihan Keahlian</td>
          <td>&nbsp;</td>
          </tr>';    
      $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($penunjang4['kegiatan']) ; $i++){
                    if($penunjang4['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center></center></td>
                      <td>'.$penunjang4['kegiatan'][$i]['nm_tendik_penunjang4'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center></center></td>
                      <td>'.$penunjang4['kegiatan'][$i]['nm_tendik_penunjang4'].'</td>
                      <td><center>'.$penunjang4['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
       <?php    
       $alpha = 97;
                  $no = 4;
                  for ($i=0; $i < count($penunjang5['kegiatan']) ; $i++){
                    if($penunjang5['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center>'.$no.'</center></td>
                      <td>'.$penunjang5['kegiatan'][$i]['nm_tendik_penunjang5'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center>'.$no.'</center></td>
                      <td>'.$penunjang5['kegiatan'][$i]['nm_tendik_penunjang5'].'</td>
                      <td><center>'.$penunjang5['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>                       
      <td align="center"><strong>V</strong></td>
      <td><strong>Pengabdian Kepada Masyarakat</strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">1.</td>
      <td>Pelayanan Masyarakat</td>
      <td>&nbsp;</td>
    </tr>
    <?php
    $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($pengabdian['kegiatan']) ; $i++){
                    if($pengabdian['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center></center></td>
                      <td>'.chr($alpha).$pengabdian['kegiatan'][$i]['nm_tendik_pengabdian'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center></center></td>
                      <td>'.chr($alpha).$pengabdian['kegiatan'][$i]['nm_tendik_pengabdian'].'</td>
                      <td><center>'.$pengabdian['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>
    <?php
    echo '
          <td align="center">2</td>
          <td>Karya Tulis PPM dan Penulisan artikel dimedia massa</td>
          <td>&nbsp;</td>';
    $alpha = 97;
                  $no = 1;
                  for ($i=0; $i < count($pengabdian2['kegiatan']) ; $i++){
                    if($pengabdian2['nilai'][$i] == 0.00){
                    echo
                    '<tr>
                      <td><center></center></td>
                      <td>'.chr($alpha).$pengabdian2['kegiatan'][$i]['nm_tendik_pengabdian2'].'</td>
                      <td>'.'0.00'.'</td>
                    </tr>';
                    }else{
                    echo
                    '<tr>
                      <td><center></center></td>
                      <td>'.chr($alpha).$pengabdian2['kegiatan'][$i]['nm_tendik_pengabdian2'].'</td>
                      <td><center>'.$pengabdian2['nilai'][$i].'</center></td>
                    </tr>';}
                  $no++;
                  $alpha++;
                  } 
                  ?>              
      <td colspan="2"><strong>Total II</strong></td>
      <td><strong><center><?php echo $total['total2'];?></center></strong></td>
    </tr>
  </tbody>
</table>
<table width="503" border="0">
  <tbody>
    <tr>
      <th width="79" scope="col">&nbsp;</th>
      <th width="134" scope="col">&nbsp;</th>
      <th width="84" scope="col">&nbsp;</th>
      <th width="140" scope="col">&nbsp;</th>
      <th width="44" scope="col">&nbsp;</th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Yang dinialai,</td>
      <td>&nbsp;</td>
      <td>Bekasi,</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Kepala KPM </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong><?php echo $tendik2['nm_tendik'];?><strong></td>
      <td>&nbsp;</td>
      <td><strong><?php echo $akp['kepala_kpm'];?><strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Penilai,</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong><?php echo $rekap[0]['penilai'];?></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Mengetahui</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong><?php echo $rekap[0]['mengetahui'];?></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>Total I = </strong></td>
      <td align="right"><?php echo $total['totalnxb'];?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>NM = </td>
      <td class=border-less align="right"><strong><?php echo $total['totalnmvar'];?><strong><hr></td>
      <td>_</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nilai +/- =</td>
      <td align="right"><?php echo $total['nilaikuranglebih'];?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>NR = </td>
      <td align="right">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>Total II =</strong></td>
      <td align="right"><?php echo $total['total2'];?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>Total I+II =</strong></td>
      <td align="right"><?php echo $total['total1plus2'];?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table> 
<p>&nbsp;</p>
<p>&nbsp;</p>



<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/src/js/jquery.js"></script>

<script type="text/javascript">
  window.print();
</script>
