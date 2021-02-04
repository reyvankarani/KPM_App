
<div class="col-lg">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('hapus_success'); ?>"></div>
	<!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('ubah_success'); ?>"></div> -->
	<div class="card">
		<div class="card-header">
			<i class="fa fa-users fa-lg mt-4"></i> <?php echo $title ?>
			<div class="card-header-actions">
				<small>
					<a href="<?php echo base_url();?>tendik/baru/"><button class="btn btn-sm btn-primary">
						<i class="fa fa-plus"></i> Buat Tenaga Kependidikan Baru
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
				<table class="table table-responsive-sm table-striped" id="listTendik">
					<thead>
						<th>No.</th>
						<th>Nama Tendik</th>
						<th>NIK</th>
						<th>Jabatan</th>
						<th>Unit</th>
						<th>Aksi</th>
					</thead>
                    <tbody>
                    	<?php $no=1; ?>
						<?php foreach ($tendik as $tendik):?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><a href="<?php echo strtolower($tendik['nm_unit']);?>/<?php echo ($tendik['id_tendik']); ?>"><?php echo $tendik['nm_tendik']; ?></a></td>
								<td><?php echo $tendik['nik']; ?></td>
								<td><?php echo $tendik['nm_jabatan']; ?></td>
								<td><?php echo $tendik['nm_unit']; ?></td>
								<td>
									<a href="<?php echo base_url(); ?>tendik/edit/<?php echo strtolower($tendik['nm_unit']);?>/<?php echo $tendik['id_tendik'];?>"><button class="btn btn-sm btn-primary">
										<i class="fa fa-pencil"></i> Ubah</button></a>
									<a href="<?php echo base_url(); ?>tendik/hapus/<?php echo strtolower($tendik['nm_unit']);?>/<?php echo $tendik['id_tendik'];?>"><button class="btn btn-sm btn-danger tombol-hapus-tendik"></a>
										<i class="fa fa-trash"></i> Hapus</button>
								</td>
							</tr>
							<?php $no++; ?>
							
						<?php endforeach;?>
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