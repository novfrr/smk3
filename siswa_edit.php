<?php
include_once("koneksi.php");
$nomor = $_GET['nomor'];
$qry = "SELECT * FROM pendaftaran WHERE nomor='$nomor'";
$data = mysqli_query($con,$qry);

$ssw = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDIT SISWA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once('navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT SISWA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">SMKN3 BANDA ACEH</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        Biodata siswa
                    </div>
                    <div class="card-body">
                        <form action="proses_edit.php" method="POST">
                            <div class="mb-3">
                                <label for="nomor" class="form-label">Nomor</label>
                                <input type="text" readonly value="<?php echo $ssw['nomor'] ?>" name="nomor" class="form-control" id="nomor" aria-describedby="Disini ya Nomor nya Dengan Benar">
                            </div>

                            <div class="mb-3">
                                <label for="kd_pendaftaran" class="form-label">Kode Pendaftaran</label>
                                <input type="text" value="<?php echo $ssw['kd_pendaftaran'] ?>" name="kd_pendaftaran" class="form-control" id="kd_pendaftaran" aria-describedby="Kode jangan salah ya">
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" value="<?php echo $ssw['nama'] ?>" name="nama" class="form-control" id="nama" aria-describedby="Alamat Yang Real Ya">
                            </div>

                            <div class="mb-3">
                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                <input type="date" value="<?php echo $ssw['jk'] ?>" name="jk" class="form-control" id="jk" aria-describedby="jangan Lupa Tanggal Lahir Orang">
                            </div>

                            <div class="mb-3">
                                <label for="noinduksekolah" class="form-label">Nomor Induk Sekolah</label>
                                <input type="date" value="<?php echo $ssw['noinduksekolah'] ?>" name="noinduksekolah" class="form-control" id="noinduksekolah" aria-describedby="jangan Lupa isi noinduksekolah">
                            </div>

                            <div class="mb-3">
                                <label for="nisn" class="form-label">Nisn</label>
                                <input type="text" value="<?php echo $ssw['nisn'] ?>" name="nisn" class="form-control" id="nisn" aria-describedby="Masa Lupa Nisnnya">
                            </div>

                            <div class="mb-3">
                                <label for="noindukkependuduk" class="form-label">Nomor Induk Kependudukan</label>
                                <input type="text" value="<?php echo $ssw['noindukkependuduk'] ?>" name="noindukkependuduk" class="form-control" id="noindukkependuduk" aria-describedby="Masa Lupa nomor induk kependudukan">
                            </div>

                            <div class="mb-3">
                                <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                                <input type="text" value="<?php echo $ssw['tempatlahir'] ?>" name="tempatlahir" class="form-control" id="tempatlahir" aria-describedby="Masa Lupa Tempat Lahirnya">
                            </div>

                            <div class="mb-3">
                                <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                <input type="text" value="<?php echo $ssw['tanggallahir'] ?>" name="tanggallahir" class="form-control" id="tanggallahir" aria-describedby="Masa Lupa Tanggal Lahirnya">
                            </div>

                            <div class="mb-3">
                                <label for="agama" class="form-label">Agama</label>
                                <input type="text" value="<?php echo $ssw['agama'] ?>" name="agama" class="form-control" id="agama" aria-describedby="Masa Lupa Agamanya">
                            </div>



                            <button type="submit" class="btn btn-dark">Proses Data</button>
                            <a href="pendaftaran.php" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
<script src="js/bootstrap.js"></script>

</body>
</html>