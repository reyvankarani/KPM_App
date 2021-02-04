<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-building fa-lg"></i> Pilih Unit
                    <div class="card-header-actions"><small>
						<a href="<?php echo base_url();?>nilai/baru/"><button class="btn btn-sm btn-primary">
							<i class="fa fa-plus"></i> Buat Baru
						</button></a>
					</small></div>
                  </div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-hover">
					<thead class="thead-light">
						<th><i class="icon-layers"></i>Unit</th>
					</thead>
                    <tbody>
						<?php
                        foreach ($unit as $row):?>
                          
							<tr>         
                                <td><a href="<?php echo $row['alias']; ?>/"><?php echo $row['nm_unit']; ?></a></td>
                            </tr>
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
            </div>
            <!-- /.row-->
          </div>
        </div>