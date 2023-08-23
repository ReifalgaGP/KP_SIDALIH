<?php error_reporting(0); include 'app/post/post_data_kependudukan.php';  ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3><i class="nav-icon fas fa-users"></i> Data Kependudukan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Data Kependudukan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="input_data_kependudukan" class="btn btn-primary">
                    <i class="fas fa-plus-square"></i> Data Kependudukan
                </a>
                <a href="app/print/data_kependudukan.php" target="_BLANK" class="btn btn-success">
                    <i class="fas fa-print"></i> Print
                </a>
                
                    <form method="post" enctype="multipart/form-data" action="app/proses.php">
                        <div class="form-group">
                            <label for="exampleInputFile">File Upload</label>
                            <input type="file" name="berkas_excel" class="form-control" id="exampleInputFile">
                        </div>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </form>
              
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Data Kependudukan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped example3" style="font-size: 14px;">
                                <thead>
                                    <tr>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>TTL</th>
                                        <th>Status Kawin</th>
                                        <th>Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Rt/Rw</th>
                                        <th>Disabilitas</th>
                                        <th>EKTP</th>
                                        <th>Keterangan</th>
                                        <th>Sumber</th>
                                        <th>TPS</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                        include "app/koneksi.php";
                                        $query=mysqli_query($mysqli,"SELECT * FROM data_kecamatan_bayongbong");
                                        $no=0;    
                                        //menampilkan data
                                        while($row=mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <td align="center"><?php echo $row['kecamatan'];?></td>
                                        <td align="center"><?php echo $row['kelurahan']; ?></td>
                                        <td align="center"><?php echo $row['nik'];?></td>
                                        <td align="center"><?php echo $row['nama'];?></td>
                                        <td align="center"><?php echo $row['ttl'];?></td>
                                        <td align="center"><?php echo $row['status_kawin'];?></td>
                                        <td align="center"><?php echo $row['kelamin'];?></td>
                                        <td align="center"><?php echo $row['alamat'];?></td>
                                        <td align="center"><?php echo $row['rt_rw'];?></td>
                                        <td align="center"><?php echo $row['disabilitas'];?></td>
                                        <td align="center"><?php echo $row['ektp'];?></td>
                                        <td align="center"><?php echo $row['keterangan'];?></td>
                                        <td align="center"><?php echo $row['sumber'];?></td>
                                        <td align="center"><?php echo $row['tps'];?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?> 
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>