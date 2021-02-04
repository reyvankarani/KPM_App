
<?php echo validation_errors(); ?> 

<div class="container-fluid">
<div class="row">
<div class="col-md col-md-offset">
<div class="card">
                  <div class="card-header">
                    <i class="fa fa-plus"></i>Edit Variabel <?php echo $kegiatan ?></div>
                  <div class="card-body">
                    <form class="form-horizontal" action="<?php echo base_url().'config/edit-nilai/'.$kegiatan.'/'.$id.'/update_variabel'?>" method="post" accept-charset="utf-8">
                      <div class="form-group">
                        <label>Nama Variabel</label>
                        <input class="form-control" type="text" name="variabel" placeholder="Masukan Nama Variabel" value="<?php echo $variabel['nm_tendik_'.$kegiatan]; ?>">
                      </div>
                      <div class="form-group">
                        <label>Bobot</label>
                        <input class="form-control" type="text" name="bobot" placeholder="Masukan Bobot" value="<?php echo $variabel['tendik_bobot_nilai']; ?>">
                      </div>
                      <div class="form-group">
                        <label>NMVAR</label>
                        <input class="form-control" type="text" name="nmvar" placeholder="Masukan NMVAR" value="<?php echo $variabel['tendik_nm_var']; ?>">
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