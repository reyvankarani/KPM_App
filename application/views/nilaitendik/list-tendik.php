<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
        	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('hapus_success'); ?>"></div>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-users fa-lg"></i> Daftar Tenaga Kependidikan
                    <div class="card-header-actions"><small>
						<a href="tambah_data/"><button class="btn btn-sm btn-primary">
							<i class="fa fa-plus"></i> Tambah
						</button></a>
					</small></div>
                  </div>
                  <div class="card-body">
                  	<div class="form-horizontal">
	                  	<div class="form-group row">
	                  		<label class="col-1 col-form-label">Cari :</label>
		                	<div class="col-4">
		                    	<input class="form-control form-control-sm" id="field" onkeyup="TendikbyName()" type="text" name="input-small" placeholder="Masukkan nama tenaga kependidikan">
		                	</div>
	                	</div>
	                </div>
                    <table class="table table-responsive-sm table-hover" id="listTendik">
					<thead>
						<th>No.</th>
						<th>Nama Tenaga Kependidikan</th>
						<th>NIK</th>
						<th>Jabatan</th>
						<th>Unit</th>
						<th>Keterangan</th>
						<th>Aksi</th>
					</thead>
                    <tbody>
                    	<?php
                    	$no=1;		
                    	foreach ($tendik2 as $row):?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><a href="<?php echo $row['id_tendik'];?>"><?php echo $row['nm_tendik'];?></a></td>
								<td><?php echo $row['nik'];?></td>
								<td><?php echo $row['jabatan'];?></td>
								<td><?php echo $row['unit'];?></td>
								<td><?php if($row['is_done'] == 0){
									echo '<span style="color:#ba2701;text-align:center;">Belum dinilai'; 
									}else{
									echo '<span style="color:#45d03e;text-align:center;">Sudah dinilai';	
									} ?></td>
								<td><a href="<?php echo base_url().'nilai-tendik/'.$link.'/'.$alias.'/hapus/'?><?php echo $row['id_tendik']; ?>"><button class="btn btn-sm btn-danger tombol-hapus"></a><i class="fa fa-trash"></i>Remove</button></td>
							</tr>
						<?php $no++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#">Prev</a>
					</li>
					<li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
                  </div>
                </div>
              </div>
        </div>
        <!-- /.row-->
    </div>
</div>