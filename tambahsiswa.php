<?php
include_once ("cek_login.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
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

 
  <div class="container">
    <div class="row">
        <div class="col-md-6 m-auto mt-3">
        <div class="card">
  <div class="card-header">
    form pendaftaran
  </div>
  <div class="card-body">
        <form action="proses_form.php" method="POST" >
        
       
        <div class="mb-3">
            <label for="kd_pendaftaran" class="form-label">Kode Pendaftaran</label>       
            <input type="kd_pendaftaran" name="kd_pendaftaran" class="form-control" id="kd_pendaftaran" aria-describedby="kd_pendaftaran">
            <div id="kd_pendaftaran" class="form-text"></div>
        </div>
       

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama">
            <div id="nama" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <input type="jk" name="jk" class="form-control" id="jk" aria-describedby="jk">
            <div id="jk" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="noinduksekolah" class="form-label">Nomor Induk Sekolah</label>       
            <input type="noinduksekolah" name="noinduksekolah" class="form-control" id="noinduksekolah" aria-describedby="noinduksekolah">
            <div id="noinduksekolah" class="form-text"></div>
        </div>
       
        <div class="mb-3">
            <label for="nisn" class="form-label">Nisn</label>
            <input type="nisn" name="nisn" class="form-control" id="nisn" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="noindukkependudukan" class="form-label">Nomor Induk Kependudukan</label>
            <input type="noindukkependudukan" name="noindukkependudukan" class="form-control" id="noindukkependudukan" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="tempatlahir" class="form-label">Tempat Lahir</label>
            <input type="tempatlahir" name="tempatlahir" class="form-control" id="tempatlahir" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal lahir</label>
            <input type="date" name="tanggal" class="form-control" id="Tanggal" aria-describedby="tanggalHelp">
            <div id="tanggalHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="agama" name="agama" class="form-control" id="agama" aria-describedby="emailHelp">
        </div>


        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href = "index.php"> Batal </a>
        </form>
        </div>
</div>
    </div>
</div>

<?php include_once('footer.php')?>

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
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>