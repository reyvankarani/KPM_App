<div class="col-lg">
	<div class="card">
		<div class="card-header">
			<i class="fa fa-users fa-lg mt-4"></i> <?php echo  $title ?>
			<div class="card-header-actions">
				<small>
					<a href="<?php echo base_url();?>unit/baru/"><button class="btn btn-sm btn-primary">
						<i class="fa fa-plus"></i> Buat Unit Baru
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
						<?php foreach ($unit as $unit):?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><a><?php echo $unit['nm_unit']; ?></a></td>
							<?php $no++; ?>
						<td>
									<a href="<?php echo base_url(); ?>unit/ubah/<?php echo $unit['id_unit'];?>"><button class="btn btn-sm btn-primary">
										<i class="fa fa-pencil"></i> Ubah</button></a>
									<a href="<?php echo base_url(); ?>unit/hapus/<?php echo $unit['id_unit'];?>"><button class="btn btn-sm btn-danger">
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