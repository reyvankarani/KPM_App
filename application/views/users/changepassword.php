<div class="container-fluid">
<div class="row">
<div class="col-md col-md-offset">
<div class="card">
                  <div class="card-header">
                    <i class="fa fa-plus"></i><?php echo $title ?></div>
                  <div class="card-body">
                  	<?php echo $this->session->flashdata('message'); ?>
                    <?php echo form_open('users/profile/changepassword'); ?>
                      <div class="form-group">
                        <label>Password Lama</label>
                        <input class="form-control" type="password" name="current_password" id="current_password">
                        <?php echo form_error('current_password', '<small class="text-danger pl-3">', '</small>' ); ?>
                      </div>
                      <div class="form-group">  
                       <label>Password Baru</label>
                        <input class="form-control" type="password" name="new_password1" id="new_password1">
                        <?php echo form_error('new_password1', '<small class="text-danger pl-3">', '</small>' ); ?>
                      </div>
                      <div class="form-group">  
                       <label>Ulangi Password Baru</label>
                        <input class="form-control" type="password" name="new_password2" id="new_password2"> 
                        <?php echo form_error('new_password2', '<small class="text-danger pl-3">', '</small>' ); ?>
                      </div>
                      

                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class=""></i>Ubah Password</button>

                    <!-- <button class="btn btn-sm btn-danger" type="reset">
                      <i class="fa fa-ban"></i> Reset</button> -->
                  </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
                