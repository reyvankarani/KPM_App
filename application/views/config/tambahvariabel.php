
<?php echo validation_errors(); ?> 

<div class="container-fluid">
<div class="row">
<div class="col-md col-md-offset">
<div class="card">
                  <div class="card-header">
                    <i class="fa fa-plus"></i>Buat Variabel Baru</div>
                  <div class="card-body">
                    <form class="form-horizontal" action="<?php echo base_url().'config/edit-nilai/tambah/'.$kegiatan.'/simpanvariabel'?>" method="post" accept-charset="utf-8">
                      <div class="form-group">
                        <label>Nama Variabel</label>
                        <input class="form-control" type="text" name="variabel" placeholder="Masukan Nama Variabel">
                      </div>
                      <div class="form-group">
                        <label>Bobot</label>
                        <input class="form-control" type="text" name="bobot" placeholder="Masukan Bobot">
                      </div>
                      <div class="form-group">
                        <label>NMVAR</label>
                        <input class="form-control" type="text" name="nmvar" placeholder="Masukan NMVAR">
                      </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button class="btn btn-sm btn-danger" type="reset">
                      <i class="fa fa-ban"></i> Reset</button>
                  </form>
                  </div>
                </div>
            </div>
        </div>
    </div>