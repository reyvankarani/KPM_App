<div class="container-fluid">
<div class="row">
  <div class="col-md col-md-offset">
    <div class="card">
      <div class="card-header">
        <i class="fa fa-plus"></i>Buat AKP Baru</div>
      <div class="card-body">
        <form class="form-horizontal" action="http://localhost/KPM_App/nilai-tendik/baru" method="post" accept-charset="utf-8">
          <div class="form-group">
            <label class="col-form-label" for="prependedInput">Nama AKP</label>
              <div class="controls">
                <div class="input-prepend input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">AKP</span>
                  </div>
                  <input class="form-control col-1" id="prependedInput" size="16" type="text" name="nm_akp">
                </div>
                <p class="help-block">Diisi dengan angka romawi</p>
              </div>
          </div>
          <div class="form-group">
            <label class="col-form-label">Periode</label>
            <div class="row">
              <?php $no=1;
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
                  <option>--Bulan--</option>
                  <?php for ($i=1; $i <= count($bulan) ; $i++) { 
                    echo '<option value='.$i.'>'.$bulan[''.$i.''].'</option>';
                  }?>
                </select>
                <input class="form-control col-3" placeholder="Tahun" name="thn-periode1">
              </div>
            </div>
            <div class="col-3">
              <div class="input-prepend input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Akhir</span>
                </div>
                <select class="form-control" name="bln-periode2">
                  <option>--Bulan--</option>
                  <?php for ($i=1; $i <= count($bulan) ; $i++) { 
                    echo '<option value='.$i.'>'.$bulan[''.$i.''].'</option>';
                  }?>
                </select>
                <input class="form-control col-3" placeholder="Tahun" name="thn-periode2">
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
                  <input class="form-control col-4" id="prependedInput" size="16" type="text" name="kepala_kpm">
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
                <input align="right" class="form-control col-1" placeholder="Tanggal" name="tgl-penilaian">
                <select class="form-control col-2" name="bln-penilaian">
                  <option>--Bulan--</option>
                  <?php for ($i=1; $i <= count($bulan) ; $i++) { 
                    echo '<option value='.$i.'>'.$bulan[''.$i.''].'</option>';
                  }?>
                </select>
                <input class="form-control col-2" placeholder="Tahun" name="thn-penilaian">
              </div>
            </div>
            </div>                
            </div>
            <!-- <div class="form-group">
              <label class="col-form-label">Variabel</label>
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#personaltendik" role="tab" aria-controls="personaltendik">Personal</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="personaltendik" role="tabpanel">
                    <table class="table table-responsive-sm table-hover">
                      <thead>
                        <tr>
                          <th width="70"><center><input type="checkbox" id="ceksemuapersonaltendik" checked> Cek</center></th>
                          <th width="60"><center>No.</center></th>
                          <th><center>Aspek Penilaian</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no=1;
                        foreach ($personal as $row):?>
                        <tr>
                          <td><center><input type="hidden" class="id_personal_tendik" name="id_personal_tendik[]" value="<?php echo $row['id_tendik_personal']; ?>" checked></center></td>
                          <td>&emsp;&emsp;&emsp;<input type="hidden" class="nm_personal_tendik" name="nm_personal_tendik[]" value="<?php echo $row['nm_tendik_personal'];?>"></td>
                          <td><input type="hidden" class="bobot_personal_tendik" name="bobot_personal_tendik[]" value="<?php echo $row['tendik_bobot_nilai'];?>"></td>
                           <td><input type="hidden" class="nmvar_personal_tendik" name="nmvar_personal_tendik[]" value="<?php echo $row['tendik_nm_var'];?>"></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;?>
                        <?php
                        $no=1;
                        foreach ($administratif as $row):?>
                        <tr>
                          <td><center><input type="hidden" class="id_administratif_tendik" name="id_administratif_tendik[]" value="<?php echo $row['id_tendik_administratif']; ?>" checked></center></td>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<input type="hidden" class="nm_administratif_tendik" name="nm_administratif_tendik[]" value="<?php echo $row['nm_tendik_administratif'];?>"></td>
                          <td><input type="hidden" class="bobot_administratif_tendik" name="bobot_administratif_tendik[]" value="<?php echo $row['tendik_bobot_nilai'];?>"></td>
                           <td><input type="hidden" class="nmvar_administratif_tendik" name="nmvar_administratif_tendik[]" value="<?php echo $row['tendik_nm_var'];?>"></td>
                        </tr>
                        <?php
                        endforeach;?> 
                        $no++;
                        <?php
                        $no=1;
                        foreach ($strukturalmanajerial as $row):?>
                        <tr>
                          <td><center><input type="hidden" class="id_strukturalmanajerial_tendik" name="id_strukturalmanajerial_tendik[]" value="<?php echo $row['id_tendik_strukturalmanajerial']; ?>" checked></center></td>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<input type="hidden" class="nm_strukturalmanajerial_tendik" name="nm_strukturalmanajerial_tendik[]" value="<?php echo $row['nm_tendik_strukturalmanajerial'];?>"></td>
                          <td><input type="hidden" class="bobot_strukturalmanajerial_tendik" name="bobot_strukturalmanajerial_tendik[]" value="<?php echo $row['tendik_bobot_nilai'];?>"></td>
                           <td><input type="hidden" class="nmvar_strukturalmanajerial_tendik" name="nmvar_strukturalmanajerial_tendik[]" value="<?php echo $row['tendik_nm_var'];?>"></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;?>
                        <?php
                        $no=1;
                        foreach ($penunjang as $row):?>
                        <tr>
                          <td><center><input type="hidden" class="id_penunjang_tendik" name="id_penunjang_tendik[]" value="<?php echo $row['id_tendik_penunjang']; ?>" checked></center></td>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<input type="hidden" class="nm_penunjang_tendik" name="nm_penunjang_tendik[]" value="<?php echo $row['nm_tendik_penunjang'];?>"></td>
                          <td><input type="hidden" class="bobot_penunjang_tendik" name="bobot_penunjang_tendik[]" value="<?php echo $row['tendik_bobot_nilai'];?>"></td>
                           <td><input type="hidden" class="nmvar_penunjang_tendik" name="nmvar_penunjang_tendik[]" value="<?php echo $row['tendik_nm_var'];?>"></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;?>
                         <?php
                        $no=1;
                        foreach ($pengabdian as $row):?>
                        <tr>
                          <td><center><input type="hidden" class="id_pengabdian_tendik" name="id_pengabdian_tendik[]" value="<?php echo $row['id_tendik_pengabdian']; ?>" checked></center></td>
                          <td><center><?php echo $no; ?></center></td>
                          <td>&emsp;&emsp;&emsp;<input type="hidden" class="nm_pengabdian_tendik" name="nm_pengabdian_tendik[]" value="<?php echo $row['nm_tendik_pengabdian'];?>"></td>
                          <td><input type="hidden" class="bobot_pengabdian_tendik" name="bobot_pengabdian_tendik[]" value="<?php echo $row['tendik_bobot_nilai'];?>"></td>
                           <td><input type="hidden" class="nmvar_pengabdian_tendik" name="nmvar_pengabdian_tendik[]" value="<?php echo $row['tendik_nm_var'];?>"></td>
                        </tr>
                        <?php 
                        $no++;
                        endforeach;?>
                        
                    </table>
                  </div>
                </div>
            </div> -->
            <?php echo validation_errors();?>
            <button class="btn btn-block btn-primary" type="submit">Buat</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>