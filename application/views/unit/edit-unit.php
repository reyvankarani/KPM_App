
<?php echo validation_errors(); ?> 

<div class="container-fluid">
<div class="row">
<div class="col-md col-md-offset">
<div class="card">
                  <div class="card-header">
                    <i class="fa fa-plus"></i>Ubah Unit</div>
                  <div class="card-body">
                    <?php echo form_open('unit/update'); ?>
                    <input type="hidden" name="id_unit" value="<?php echo $getunit['id_unit']; ?>">
                    <input type="hidden" name="alias" value="<?php echo $getunit['alias']; ?>">
                      <div class="form-group">
                        <label>Nama Unit</label>
                        <input class="form-control" type="text" name="namaunit" placeholder="Masukan Nama Unit" value="<?php echo $getunit['nm_unit']; ?>">
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
                