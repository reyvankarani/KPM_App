<div class="col-lg">
	<div class="card">
		<div class="card-header">
			<i class="fa fa-users fa-lg mt-4"></i> <?php echo $title ?>
			<div class="card-header-actions">
				<small>
					<a href="<?php echo base_url();?>jabatan/baru/"><button class="btn btn-sm btn-primary">
						<i class="fa fa-plus"></i> Buat Jabatan Baru
					</button></a>
				</small></div>
		</div>
			<div class="card-body">
				<table class="table table-responsive-sm table-striped">
					<thead>
						<th>No.</th>
						<th>Nama Unit</th>
						<th>Aksi</th>
					</thead>
                    <tbody>
                    	<?php $no=1; ?>
						<?php foreach ($jabatan as $jabatan):?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><a href="<?php echo ($jabatan['aliasjabatan']); ?>"><?php echo $jabatan['nm_jabatan']; ?></a></td>
							<?php $no++; ?>
							<td>
									<a href="<?php echo base_url(); ?>jabatan/ubah/<?php echo $jabatan['id_jabatan'];?>"><button class="btn btn-sm btn-primary">
										<i class="fa fa-pencil"></i> Ubah</button></a>
									<a href="<?php echo base_url(); ?>jabatan/hapus/<?php echo $jabatan['id_jabatan'];?>"><button class="btn btn-sm btn-danger">
										<i class="fa fa-trash"></i> Hapus</button></a>

							</td>
						<?php endforeach;?>
						</tr>
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