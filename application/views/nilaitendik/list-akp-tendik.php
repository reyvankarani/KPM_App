<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-line-chart fa-lg"></i> Pilih Form Penilaian Kinerja 
                    <div class="card-header-actions"><small>
                        <a href="<?php echo base_url();?>nilai-tendik/baru/"><button class="btn btn-sm btn-primary">
                            <i class="fa fa-plus"></i> Buat Baru
                        </button></a>
                    </small></div>
                  </div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                    <thead>
                        <th>No.</th>
                        <th>Periode</th>
                        <th>BLN, THN</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                            $no=1;
                            $bulan = array(
                                '01' => 'Januari',
                                '02' => 'Februari',
                                '03' => 'Maret',
                                '04' => 'April',
                                '05' => 'Mei',
                                '06' => 'Juni',
                                '07' => 'Juli',
                                '08' => 'Agustus',
                                '09' => 'September',
                                '10' => 'Oktober',
                                '11' => 'November',
                                '12' => 'Desember');
                        ?>
                        <?php foreach ($akp_tendik as $row):?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><a href="<?php echo base_url().'nilai-tendik/'.($row['link']); ?>/"><?php echo $row['nm_akp']; ?>(<?php echo $row['angka']; ?>)</a></td>
                                <td><?php echo $bulan[date('m',strtotime($row['periode_awal']))].' '.date('Y',strtotime($row['periode_awal'])); ?> s.d. <?php echo $bulan[date('m',strtotime($row['periode_akhir']))].' '.date('Y',strtotime($row['periode_akhir'])); ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>nilai-tendik/ubah/<?php echo $row['link'];?>"><button class="btn btn-sm btn-primary">
                                        <i class="fa fa-pencil"></i> Ubah</button></a>
                                    <a href="<?php echo base_url(); ?>nilai-tendik/hapus/<?php echo $row['link'];?>"><button class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i> Hapus</button></a>
                                     <a href="<?php echo base_url(); ?>nilai-tendik/printlaporan/<?php echo $row['link'];?>"><button class="btn btn-sm btn-success">
                                        <i class="fa fa-print"></i> Print Laporan</button></a>   
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Prev</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
        </div>