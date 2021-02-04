<!doctype html>
<style type="text/css">
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
	
tr.title td {
  border-right: 0px solid;
  border-left: 0px solid; 		
}
	
tr.noBorder td{
  border: 0;
}	
</style>	
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>Data Karyawan Hasil AKP Periode <?php echo $akp['angka'].' Tahun '.date('Y',strtotime($akp['periode_awal'])).'/'.date('Y',strtotime($akp['periode_akhir']))   ?></p>
<table width="825" border="1">
  <tbody>
    <tr class="title">
      <th width="42" scope="col">NO</th>
      <th width="220" scope="col">Nama</th>
      <th width="178" scope="col">Jabatan</th>
      <th width="147" scope="col">Unit</th>
      <th width="102" scope="col">Nilai</th>
      <th width="92" scope="col">Lebihan</th>
    </tr>
    <?php
        $no=1;
        $alpha = 97;
        for ($i=0; $i < count($tendik) ; $i++){
        echo
        '<tr class = "noBorder">
         <td width="42"><center>'.$no.'</center></td>
         <td width="220">'.$tendik[$i]['nm_tendik'].'</td>
         <td width="178">'.$tendik[$i]['unit'].'</td>
         <td width="147">'.$tendik[$i]['jabatan'].'</td>
         <td width="102">'.$tendik[$i]['total'].'</td>
         <td width="92">'.$tendik[$i]['kuranglebih'].'</td>
         </tr>';
         $no++;
         $alpha++;
        }
    ?>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/src/js/jquery.js"></script>

<script type="text/javascript">
  window.print();
</script>
