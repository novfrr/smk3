<?php
include_once ("cek_login.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pendaftaran</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/all.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- navbar -->
  <?php include_once('navbar.php') ?>

  <!-- Sidebar -->
  <?php include_once('sidebar.php') ?>

 
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pendaftaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Pendaftaran</th>
                    <th>Nama</th>
                    <th>Jenis kelamin</th>
                    <th>Nisn</th>
                    <th>Detail</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <div class="container">
    <div class="row">
        <div class="col-md-12 m-auto mt-3">
          <a class="btn btn-outline-secondary mb-1" href ="tambahsiswa.php" ><i class="fa-solid fa-user-plus"></i> Tambah Data </a>
                  <tbody>
                  <?php
                    //1. membuat koneksi
                    include_once("koneksi.php");

                    //2. membuat query utk menampilkan seluruh data 
                    $qry = "SELECT * FROM pendaftaran";

                    //3. menjalankan query
                    $tampil = mysqli_query($con,$qry);
                    //4. perulangan menampilkan data menggunakan looping foreach
                    $nomor = 1;
                  foreach($tampil as $data){
                  ?>
                  <tr>
                    <td><?php echo $nomor++ ?></td>
                    <td><?php echo $data['kd_pendaftaran'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jk'] ?></td>
                    <td><?php echo $data['nisn'] ?></td>
                    <td><button type="button" class="btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['nomor'] ?>">Lihat</td>
      <!-- Modal -->
            <div class="modal fade modal-lg" id="exampleModal<?php echo $data['nomor'] ?>" tabindex="-1" aria-labelledby="#exampleModal" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data <?php echo $data['nama'] ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Kode Pendaftaran</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['kd_pendaftaran']?></span>
                    </div>
                  <hr>
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Nama</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['nama']?></span>
                    </div>
                    <hr>
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Jenis Kelamin</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['jk']?></span>
                    </div>
                    <hr>
                    <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>NIS</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['noinduksekolah']?></span>
                    </div>
                    <hr>
                    <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Nisn</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['nisn']?></span>
                    </div>
                    <hr>
                    <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>NIK</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['agama']?></span>
                    </div>
                    <hr>
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Tempat</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['tanggallahir']?></span>
                    </div>
                    <hr>
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label" ><b>Agama</b></label>
                    <br>
                    <span class="fs-3"><?php echo $data['agama']?></span>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
                    <td>
                      <a href="siswa_edit.php?nomor=<?php echo $data['nomor'] ?>" class="btn btn-outline-secondary"><i class="fa-solid fa-pencil"></i></a>
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['nomor'] ?>"><i class="fa fa-trash"></i></button>
                      <!-- Modal -->
                      <div class="modal fade" id="hapus<?php echo $data['nomor'] ?>" tabindex="-1" aria-labelledby="hapus<?php echo $data['nomor'] ?>" aria-hidden="true">
                      <div class="modal-dialog">
                      <div class="modal-content">
                      <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Warning</b><i class="fa-solid fa-circle-exclamation"></i></h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Apakah Kamu Yakin Ingin Menghapus Data Siswa Dengan Nama <b><?php echo $data['nama'] ?> </b>?
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                      <a href="proseshapus.php?nomor=<?php echo $data['nomor'] ?>" class="btn btn-primary">Ya</a>
                      </div>
                      </div>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <?php
                  }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Kode Pendaftaran</th>
                    <th>Nama</th>
                    <th>Jenis kelammin</th>
                    <th>Nisn</th>
                    <th> Detail</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- footer -->

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
<!-- bootsrap JS -->
<script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/all.js"></script>
</body>
</html>