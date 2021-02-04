
<?php echo validation_errors(); ?> 

<div class="container-fluid">
<div class="row">
<div class="col-md col-md-offset">
<div class="card">
                  <div class="card-header">
                    <i class="fa fa-plus"></i><?php echo $title ?></div>
                  <div class="card-body">
                    <?php echo form_open_multipart('users/profile'); ?>
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $user['name'] ?>">
                        <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>' ); ?>
                       <label>Email</label>
                        <input class="form-control" type="text" name="email" id="email" value="<?php echo $user['email'] ?>" readonly>
                      </div>
                      <div class="form-group">
                        <div class="col-sm2">Picture</div>
                        <div class="col-sm10">
                            <div class="row">
                              <div class="col-sm-3">
                                <img src="<?php echo base_url('assets/src/img/avatars/').$user['image'] ?>" class="img-thumbnail">
                              </div>
                              <div class="col-sm-9">
                                <div class="costum-file">
                                  <input type="file" class="costume-file-input"
                                  id="image" name="image">
                                  <label class="costum-file-label"
                                  for="image"></label>
                             </div>
                         </div>

                  </div>
                </div>
              </div>
              <div class="form-group">
                        <div class="col-sm2"> 
                         <a href="<?php echo base_url(); ?>/users/profile/changepassword"><button type="button" class="btn btn-secondary"> <i class="fa fa-key"></i> Ubah Password</button>      
                        </div>
                        </div>

                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class=""></i>Edit</button>

                    <!-- <button class="btn btn-sm btn-danger" type="reset">
                      <i class="fa fa-ban"></i> Reset</button> -->
                  </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
                