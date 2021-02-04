
<?php echo validation_errors(); ?> 

<div class="container-fluid">
<div class="row">
<div class="col-md col-md-offset">
<div class="card">
                  <div class="card-header">
                    <i class="fa fa-plus"></i>Ubah Tenaga Kependidikan</div>
                  <div class="card-body">
                    <?php echo form_open('tendik/update'); ?>
                    <input type="hidden" name="id_tendik" value="<?php echo $tendik['id_tendik']; ?>">
                    <input type="hidden" name="alias" value="<?php echo $tendik['alias']; ?>">
                      <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" type="text" name="nama" placeholder="Masukan Nama" value="<?php echo $tendik['nm_tendik']; ?>">
                      </div>
                     <!--  <div class="form-group">
                        <label>Unit</label>
                        <select name="id_jabatan" class="form-control">
                              <option value="">Pilih Jabatan..</option>
                            <?php foreach($jabatan as $jabatan): ?>
                              <option value="<?php echo $jabatan['id_jabatan']; ?>"><?php echo $jabatan['nm_jabatan']; ?></option>  
                            <?php endforeach; ?>  
                        </select> 
                      </div>
                      <div class="form-group">
                        <label>Unit</label>
                        <select name="id_unit" class="form-control">
                              <option value="">Pilih Unit..</option>
                            <?php foreach($unit as $unit): ?>
                              <option value="<?php echo $unit['id_unit']; ?>"><?php echo $unit['nm_unit']; ?></option>  
                            <?php endforeach; ?>  
                        </select> 
                      </div> -->
                      <div class="form-group">
                        <label>NIK</label>
                        <input class="form-control" type="text" name="nik" placeholder="Masukan NIK" value="<?php echo $tendik['nik']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Unit</label>
                        <?php echo form_dropdown('unit', $unit1, $selectedunit, ['class' => 'form-control', 'required' => 'required']) ?>
                      </div>

                      <div class="form-group">
                        <label>Jabatan</label>
                        <?php echo form_dropdown('jabatan', $jabatan1, $selectedunit2, ['class' => 'form-control', 'required' => 'required']) ?>
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
                