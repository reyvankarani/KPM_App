
<?php echo validation_errors(); ?> 


<div class="container-fluid">
<div class="row">
<div class="col-md col-md-offset">
<div class="card">
                  <div class="card-header">
                    <i class="fa fa-plus"></i>Buat Tenaga Kependidikan Baru</div>
                  <div class="card-body">
                    <?php echo form_open('tendik/baru'); ?>
                      <div class="form-group">
                        <label for="nik">NIK</label>
                        <input class="form-control" type="text" name="nik" placeholder="Masukan Nomor Induk Kepegawaian">
                      </div>
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" type="text" name="nama" placeholder="Masukan Nama">
                      </div>
                      <div class="form-group">
                        <label for="unit">Unit</label>
                        <select name="id_unit" id="id_unit" class="form-control">
                              <option value="">--Pilih Unit--</option>
                            <?php foreach($unit as $unit): ?>
                              <option value="<?php echo $unit['id_unit']; ?>"><?php echo $unit['nm_unit']; ?></option>
                            <?php endforeach; ?>  
                        </select> 
                      </div>
                      <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select name="id_jabatan" id="id_jabatan" class="form-control">
                              <option value="">--Pilih Jabatan--</option>
                            <?php foreach($jabatan as $jabatan): ?>
                              <option value="<?php echo $jabatan['id_jabatan']; ?>"><?php echo $jabatan['nm_jabatan']; ?></option>
                            <?php endforeach; ?>
                        </select> 
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
<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/src/js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url() ?>assets/src/js/bootstrap.min.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
          $('#id_unit').change(function(){
              var id = $(this).val();
              // console.log(id);
              $.ajax({
                  method: "POST",
                  url: "<?= base_url( )?>/tendik/getjabatan",
                  data: {
                    id: id
                  },
                  dataType: "JSON",
                  success: function(response) {
                      console.log(response);
                  }

              });
          });
      });        
</script>