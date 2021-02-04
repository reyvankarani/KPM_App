<div class="col-lg">
	<div class="card">
		<div class="card-header">
			<i class="fa fa-users fa-lg mt-4"></i>Laporan AKP <?php echo $akp['urutan']; ?>
			<div class="card-header-actions">
				<small>
				</small></div>
		</div>
			<div class="card-body">
				<a href="<?php echo base_url(); ?>nilai-tendik/printlaporan/<?php echo $link ?>/print_page"><button class="btn btn-sm btn-success btn-sm">
            	<i class="fa fa-print"></i> Print Laporan</button></a><br>
				<label class="col-form-label">Preview</label>
				<table class="table table-responsive-sm table-striped">
					<thead>
						<th>No.</th>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Unit</th>
						<th>Nilai</th>
						<th>Lebihan</th>
					</thead>
                    <tbody>
                    	<?php
                        $no=1;
                        $alpha = 97;
                        for ($i=0; $i < count($tendik) ; $i++){
                        echo
                          '<tr>
                            <td><center>'.$no.'</center></td>
                            <td>'.$tendik[$i]['nm_tendik'].'</td>
                            <td>'.$tendik[$i]['unit'].'</td>
                            <td>'.$tendik[$i]['jabatan'].'</td>
                            <td>'.$tendik[$i]['total'].'</td>
                            <td>'.$tendik[$i]['kuranglebih'].'</td>
                          </tr>';
                        $no++;
                        $alpha++;
                        }
                        ?>
					</tbody>
				</table>
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#">Prev</a>
					</li>
					<li class="page-item active">
                        <a class="page-link" href="">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                    <?php echo $this->pagination->create_links(); ?>
                </ul>
            </div>
    </div>
</div>