
<?php echo validation_errors(); ?> 

<div class="container-fluid">
<div class="row">
<div class="col-md col-md-offset">
<div class="card">
                  <div class="card-header">
                    <i class="fa fa-plus"></i>Buat Unit Baru</div>
                  <div class="card-body">
                    <?php echo form_open('jabatan/baru'); ?>
                      <div class="form-group">
                        <label>Nama Jabatan</label>
                        <input class="form-control" type="text" name="namajabatan" placeholder="Masukan Nama Jabatan">
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
                