<?php include 'app/post/post_data_kondisi_rumah.php'; ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="nav-icon fas fa-door-closed"></i> Data Kondisi Rumah</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Data Kondisi Rumah</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="input_data_kondisi" class="btn btn-primary">
                    <i class="fas fa-plus-square"></i> Data Kondisi Rumah
                </a>
                <a href="app/print/data_kondisi_rumah.php" target="_BLANK" class="btn btn-success">
                    <i class="fas fa-print"></i> Print
                </a>
                <a href="app/form_upload.php" target="_BLANK" class="btn btn-success">
                    <i class="fas fa-upload"></i> upload
                </a>
                
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Data Kondisi Rumah</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped" style="font-size: 14px;">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Pendidikan_Terakhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                        include "app/koneksi.php";
                                        $query=mysqli_query($mysqli,"SELECT * FROM tabel_pendidikan");
                                        $no=0;    
                                        //menampilkan data
                                        while($row=mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <td align="center"><?php echo $row['NIK'];?></td>
                                        <td align="center"><?php echo $row['NAMA']; ?></td>
                                        <td align="center"><?php echo $row['PENDIDIKAN_TERAKHIR'];?></td>
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