<div class="col-lg">
	<div class="card">
		<div class="card-header">
			<i class="fa fa-users fa-lg mt-4"></i> Tenaga Kependidikan -> <?php echo $tendik['nm_tendik'] ?></div>
			<div class="card-body">
				<table class="table table-responsive-sm table-striped">
					<tr>
						<td class="text-left"><b>Nama Tenaga Kependidikan</b></td>
						<td class="text-left"><?php echo $tendik['nm_tendik']; ?></td>
					</tr>
					<tr>
						<td class="text-left"><b>Jabatan</b></td>
						<td class="text-left"><?php echo $tendik['nm_jabatan']; ?></td>
					</tr>
					<tr>
						<td class="text-left"><b>Unit</b></td>
						<td class="text-left"><?php echo $tendik['nm_unit']; ?></td>
					</tr>
				</table>
				<a class="btn btn-sm btn-info" href="<?php echo base_url();?>tendik/edit/<?php echo $alias ?>/<?php echo $tendik['id_tendik']; ?>">Edit</a>
				<br>
				<br>
				<!-- <label class="col-form-label"><b>SUDAH DI NILAI</b></label> -->
				<table class="table table-responsive-sm table-striped">
					<thead>
						<th>No</th>
						<th>Periode</th>
					</thead>
                    <tbody>
                    	<?php
                        $no=1;
                        $alpha = 97;
                        for ($i=0; $i < count($nilaitendik) ; $i++){
	
                        $periode = $nilaitendik[$i]['periode'];
                        // $link = strtolower(substr($periode,-6,-1));
                        $baseurl = base_url();	
                        
                        echo	
                          '<tr>
                            <td>'.$no.'</td>
                            <td>'.'<a href="'.$baseurl.'/nilai-tendik/'.$nilaitendik[$i]['link'].'/'.$alias.'/'.$nilaitendik[$i]['id_tendik'].'">'.$nilaitendik[$i]['periode'].'</a></td>
                          </tr>';
                        $no++;
                        $alpha++;
                        }
                        ?>
					</tbody>
				</table>	
            </div>
    </div>
</div>