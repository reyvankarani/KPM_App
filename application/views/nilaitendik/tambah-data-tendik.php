<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-users fa-lg"></i> Tambah Data
                  </div>
                  <div class="card-body">
                  	<div class="form-horizontal">
	                  	<div class="form-group row">
	                  		<label class="col-1 col-form-label">Cari :</label>
	                  		<!-- <div class="col-3">
			                  	<select class="form-control form-control-sm" id="select3" name="select3">
			                            <option value="0">--Program Studi--</option>
			                            <?php foreach ($prodi as $option):?>
			                            <option value="<?php echo $option['id_prodi'];?>"><?php echo $option['nm_prodi'];?></option>
			                        	<?php endforeach;?>
			                    </select>
		                	</div> -->
		                	<div class="col-4">	                    			                    	
		                		<input class="form-control form-control-sm" id="field" onkeyup="TendikbyName()" type="text" name="input-small" placeholder="Masukkan nama tenaga kependidikan">
		                	</div>
	                	</div>
	                </div>
	                <form class="form-horizontal" action="<?php echo base_url();?>nilai-tendik/<?php echo $link.'/'.$alias?>/tambah_data/" method="post" accept-charset="utf-8">
                    <table class="table table-responsive-sm table-striped" id="listTendik">
					<thead>
						<th width="70"><center><input type="checkbox" id="ceksemuatendik"> Cek</center></th>
						<th>Nama Dosen</th>
						<th>NIK</th>
						<th>Unit</th>
						<th>Jabatan</th>
					</thead>
                    <tbody>
                    	<?php foreach ($tendik as $row):?>
							<tr>
								<td><center><input class="id_tendik" name="id_tendik[]" type="checkbox" value="<?php echo $row['id_tendik']?>" ></center></td>
								<td><?php echo $row['nm_tendik'];?></td>
								<td><?php echo $row['nik'];?></td>
								<td><?php echo $row['nm_unit'];?></td>
								<td><?php echo $row['nm_jabatan'];?></td>
								<!--<input type="hidden" name="kaprodi" value="<?php echo $row['kaprodi'];?>"> -->
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
				<!-- <div class="form-horizontal">
					<div class="form-group row">
						<label class="col-1 col-form-label">Penilai :</label>
						<div class="col-3">
							<input class="form-control form-control-sm" type="text" name="penilai" required>
						</div>
					</div>
				</div> -->
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
                <button class="btn-primary" type="submit">Tambah</button>
            	</form>
                  </div>
                </div>
              </div>
        </div>
        <!-- /.row-->
        <script src="<?php echo base_url(); ?>assets/src/js/features.js"></script>
    </div>
</div>