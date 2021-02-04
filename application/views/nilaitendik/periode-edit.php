<div class="container-fluid">
<div class="row">
  <div class="col-md col-md-offset">
    <div class="card">
      <div class="card-header">
        <i class="fa fa-plus"></i>Ubah Periode</div>
      <div class="card-body">
          <?php foreach ($periode as $data):?>
          <form class="form-horizontal" action="<?php echo base_url().'nilai-tendik/perbaharui'?>" method="post" accept-charset="utf-8">
            <input type=hidden name="link_hidden" value="<?php echo $data['link'];?>">
          <div class="form-group">
            <label class="col-form-label" for="prependedInput">Nama Periode</label>
              <div class="controls">
                <div class="input-prepend input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">AKP</span>
                  </div>
                  <input class="form-control col-2" id="prependedInput" size="16" type="text" name="nm_akp" value="<?php echo ltrim($data['nm_akp'], 'AKP ');?>">
                </div>
                <p class="help-block">Diisi dengan angka romawi</p>
              </div>
          </div>
          <div class="form-group">
            <label class="col-form-label">Periode</label>
            <div class="row">
              <?php $value1 =date('m',strtotime($data['periode_awal']));
                    $value2 =date('m',strtotime($data['periode_akhir']));
                    $value3 =date('m',strtotime($data['tgl_penilaian']));
                    $no=1;
                    $bulan = array(
                          '1' => 'Januari',
                          '2' => 'Februari',
                          '3' => 'Maret',
                          '4' => 'April',
                          '5' => 'Mei',
                          '6' => 'Juni',
                          '7' => 'Juli',
                          '8' => 'Agustus',
                          '9' => 'September',
                          '10' => 'Oktober',
                          '11' => 'November',
                          '12' => 'Desember');
              ?>
            <div class="col-3">
              <div class="input-prepend input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Awal</span>
                </div>
                <select class="form-control" name="bln-periode1">
                  <?php for ($i=1; $i <= count($bulan) ; $i++) { 
                    $selected = "";
                    if($value1 == '0'.$i){
                      $selected = "selected";}
                    echo '<option value='.$i.' '.$selected.'>'.$bulan[''.$i.''].'</option>';
                  }?>
                </select>
                <input class="form-control col-3" placeholder="Tahun" name="thn-periode1" value="<?php echo date('Y',strtotime($data['periode_awal']));?>">
              </div>
            </div>
            <div class="col-3">
              <div class="input-prepend input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Akhir</span>
                </div>
                <select class="form-control" name="bln-periode2">
                  <?php for ($i=1; $i <= count($bulan) ; $i++) { 
                    $selected = "";
                    if($value2 == '0'.$i){
                      $selected = "selected";}
                    echo '<option value='.$i.' '.$selected.'>'.$bulan[''.$i.''].'</option>';
                  }?>
                </select>
                <input class="form-control col-3" placeholder="Tahun" name="thn-periode2" value="<?php echo date('Y',strtotime($data['periode_akhir']));?>">
              </div>
            </div>
            </div>                
            </div>
            <div class="form-group">
            <label class="col-form-label" for="prependedInput">Kepala KPM</label>
              <div class="controls">
                <div class="input-prepend input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nama</span>
                  </div>
                  <input class="form-control col-4" id="prependedInput" size="16" type="text" name="kepala_kpm" value="<?php echo $data['kepala_kpm'];?>">
                </div>
                <p class="help-block">Yang mengesahkan</p>
              </div>
            </div>
            <div class="form-group">
            <label class="col-form-label">Periode</label>
            <div class="row">
            <div class="col-7">
              <div class="input-prepend input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
                <input align="right" class="form-control col-1" placeholder="Tanggal" name="tgl-penilaian" value ="<?php echo date('d',strtotime($data['tgl_penilaian']));?>">
                <select class="form-control col-2" name="bln-penilaian">
                  <?php for ($i=1; $i <= count($bulan) ; $i++) { 
                    $selected = "";
                    if($value3 == '0'.$i){
                      $selected = "selected";}
                    echo '<option value='.$i.' '.$selected.'>'.$bulan[''.$i.''].'</option>';
                  }?>
                </select>
                <input class="form-control col-2" placeholder="Tahun" name="thn-penilaian" value ="<?php echo date('Y',strtotime($data['tgl_penilaian']));?>">
              </div>
            </div>
            </div>                
            </div>
            <!-- <div class="form-group">
              <label class="col-form-label">Aspek Penilaian</label>
              <ul class="nav nav-tabs" role="tablist">
                   <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#dikjar" role="tab" aria-controls="dikjar">Nilai</a>
                  </li> 
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="dikjar" role="tabpanel">
                    <table class="table table-responsive-sm table-hover">
                      <thead>
                        <tr>
                          <th width="70"><center><input type="checkbox" id="ceksemuadikjar"> Cek</center></th>
                          <th width="60"><center>No.</center></th>
                          <th><center>Aspek Penilaian</center></th>
                        </tr>
                      </thead> -->
                      
                    </table>
                  </div>
                </div>
            </div>
            <?php echo validation_errors();?>
            <button class="btn btn-block btn-primary" type="submit">Ubah</button>
          </div>
        </div>
        <?php endforeach;?>
        </form>
      </div>
    </div>
  </div>
</div>
</div>