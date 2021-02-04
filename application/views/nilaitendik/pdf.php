<!-- <style type="text/css">
body,td,th {
	font-size: 12px;
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
</style> -->
<div style="text-align: center">FORM PENILAIAN KINERJA TENAGA ADMINISTRASI<br>PERIODE <?php echo $tendik2['periode'];?>
</div>
<div>Nama&nbsp;: <?php echo $tendik2['nm_tendik'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan : <?php echo $tendik2['jabatan'];?><br>
Unit&nbsp;: <?php echo $tendik2['unit'];?></div>

<p>&nbsp;</p>
<table class="fixed" width="90%" border="1">
  <tbody>
    <tr>
      <th width="43" align="center"><strong>NO</strong></th>
      <th width="100" align="center"><strong>VARIABEL</strong></th>
      <th width="50" align="center"><strong>Bobot ( %)</strong></th>
      <th width="50" align="center"><strong>NM VAR</strong></th>
      <th width="50" align="center"><strong>Nilai</strong></th>
      <th width="80" align="center"><strong>Nilai x Bobot</strong></th>
      <th width="50" align="center" style="text-align: center"><strong>(Nilai X Bobot) - NM VAR</strong></th>
      <th width="80" align="center"><strong>PENILAI</strong></th>
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
  </tbody>
 </table> 