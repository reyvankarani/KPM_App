
<?php echo validation_errors(); ?> 

<div class="container-fluid">
<div class="row">
<div class="col-md col-md-offset">
<div class="card">
                  <div class="card-header">
                    <i class="fa fa-plus"></i>Ubah Jabatan</div>
                  <div class="card-body">
                    <?php echo form_open('jabatan/update'); ?>
                    <input type="hidden" name="id_jabatan" value="<?php echo $getjabatan['id_jabatan']; ?>">
                    <input type="hidden" name="alias" value="<?php echo $getjabatan['aliasjabatan']; ?>">
                      <div class="form-group">
                        <label>Nama Unit</label>
                        <input class="form-control" type="text" name="namajabatan" placeholder="Masukan Nama Jabatan" value="<?php echo $getjabatan['nm_jabatan']; ?>">
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
                