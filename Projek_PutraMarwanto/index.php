<?php 
@session_start();
require 'function.php';


?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="halaman_utama/css/bootstrap.min.css">
  <link rel="stylesheet" href="halaman_utama/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="tools_perbesar_gambar/source/jquery.fancybox.css?v=2.1.5" media="screen">
</head>
<body class="hold-transition layout-top-nav">
 <div class="header" >
  <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
    <div class="container">


      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px; height: 1400px;">
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>CRUD</b></h3>
              </div>
              <!-- general form elements -->
            <div class="card card-primary" style="width: 690px; margin-left: 310px;">
              <div class="card-header">
                <h3 class="card-title">Crud</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="tambah.php" enctype="multipart/form-data" onsubmit="return validasi_input(this)">
                <div class="card-body">
                  <div class="form-group" style="width: 300px;">
                    <label>Kode Dokter</label>
                    <input type="text" class="form-control" name="kode_dokter" value="DKR002" readonly>
                  </div>
                  <div class="form-group" style="width: 300px; margin-left: 350px; margin-top: -86px;">
                    <label>Nama Dokter</label>
                    <input type="text" class="form-control" name="nama_dokter" value="Putra Marwanto" readonly>
                  </div>
                  <div class="form-group" style="width: 300px;">
                    <label>Spesialis</label>
                    <input type="text" class="form-control" name="spesialis" value="Poli Umum" readonly>
                  </div>
                  <div class="form-group" style="width: 300px; margin-left: 350px; margin-top: -86px;">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="Handil Bakti" readonly>
                  </div>
                  <div class="form-group" style="width: 300px;">
                    <label>No.Telp</label>
                    <input type="text" class="form-control" name="no_telp" value="082256850449" readonly>
                  </div>
                  <div class="form-group" style="width: 300px; margin-left: 350px; margin-top: -86px;">
                    <label>Riwayat Catatan</label>
                    <input type="text" class="form-control" name="riwayat_catatan" placeholder="Catatan Pasien" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Pasien</label><br>
                    <select name="id_pasien" class="form-control selectpicker" data-live-search="true" required> 
                      <option disabled selected>-- Cari Data --</option>
                      <?php 
                          $ambildata = mysqli_query($conn,"select * from pasien");
                          while($fetcharray = mysqli_fetch_array($ambildata)){
                              $idpasien = $fetcharray['id_pasien'];
                              $nama_pasien = $fetcharray['nama_pasien'];
                              $riwayat_catatan = $fetcharray['riwayat_catatanPSN'];
                      ?>
                      <option value="<?=$idpasien;?>"><?=$nama_pasien;?> | ID : <?=$idpasien;?> | <?=$riwayat_catatan;?></option>
                      <?php
                          }
                      ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer" style="margin-left: 575px; background-color: white;">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div><br>

            <div class="card">
              <div class="card-body">
                <div class="box-header">
                  <button type="button" class="btn btn-success fa fa-file">
                     <a href="cetak.php" style="color: white;">Cetak</a>
                  </button>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="1%">No.</th>
                    <th  class="text-center">Kode Dokter</th>
                    <th  class="text-center">Nama Dokter</th>
                    <th  class="text-center">Spesialis</th>
                    <th  class="text-center">ID Pasien</th>
                    <th  class="text-center">Nama Pasien</th>
                    <th  class="text-center">Keluhan</th>
                    <th  class="text-center">Riwayat Catatan Dokter</th>
                    <th width="15%" class="text-center">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i =1;
                    $ambil = mysqli_query($conn,"SELECT * FROM dokter join pasien on dokter.id_pasien=pasien.id_pasien") or die(mysqli_error());
                    while($data=mysqli_fetch_array($ambil)){
                          $no = $data ['id_dokter'];
                          $kode_dokter = $data ['kode_dokter'];
                          $nama_dokter = $data['nama_dokter'];
                          $spesialis = $data['spesialis'];
                          $id_pasien = $data['id_pasien'];
                          $nama_pasien = $data['nama_pasien'];
                          $riwayat_catatanPSN = $data['riwayat_catatanPSN'];
                          $riwayat_catatan = $data['riwayat_catatan'];
                         
                    ?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td class="text-center"><?php echo $data['kode_dokter'];?></td>
                      <td class="text-center"><?php echo $data['nama_dokter'];?></td>
                      <td class="text-center"><?php echo $data['spesialis'];?></td>
                      <td class="text-center"><?php echo $data['id_pasien'];?></td>
                      <td class="text-center"><?php echo $data['nama_pasien'];?></td>
                      <td class="text-center"><?php echo $data['riwayat_catatanPSN'];?></td>
                      <td class="text-center"><?php echo $data['riwayat_catatan'];?></td>
                      <td class="text-center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update<?=$no;?>">Update</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$no;?>"><i class='fa fa-trash'></i></button>
                      </td>
                    </tr>
                    <!-- Edit Modal -->
                              <div class="modal fade" id="update<?=$no;?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title" style="text-align:center">Edit Data</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <form method="POST" action="edit.php" enctype="multipart/form-data">
                                    <div class="modal-body">
                                      <div class="form-group">
                                        <label>Kode Dokter</label>
                                        <input type="text" class="form-control" name="kode_dokter" value="<?=$kode_dokter;?>" readonly>
                                      </div>
                                      <div class="form-group">
                                        <label>Nama Dokter</label>
                                        <input type="text" class="form-control" name="nama_dokter" value="<?=$nama_dokter;?>" readonly>
                                      </div>
                                      <div class="form-group">
                                        <label>Nama Pasien</label>
                                        <input type="text" class="form-control" name="nama_pasien" value="<?=$nama_pasien;?>" readonly>
                                      </div>
                                      <div class="form-group">
                                        <label>Riwayat Catatan</label>
                                        <input type="text" class="form-control" name="riwayat_catatan" value="<?=$riwayat_catatan;?>" required>
                                      </div>
                                      <input type="hidden" class="form-control" name="id_dokter" value="<?=$no;?>">
                                      
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-default"> Edit </button>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                      </div>
                      <!-- Delete Modal -->
                              <div class="modal fade" id="delete<?=$no;?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title" style="text-align:center">Hapus Data</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <form method="post" action="hapus.php" enctype="multipart/form-data">
                                    <div class="modal-body">
                                    Apakah anda yakin ingin menghapus ?
                                    <input type="hidden" name="no" value="<?=$no;?>">
                                    <br>
                                    <br>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-default"> Delete </button>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                              </div>        
                    <?php
                    };
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": []
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>