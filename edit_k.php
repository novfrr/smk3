<?php
include_once("koneksi.php");
$id = $_GET['id'];
$qry = "SELECT * FROM pembagiankelas WHERE id='$id'";
$data = mysqli_query($con,$qry);

$PJ = mysqli_fetch_array($data);

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
            <h1>EDIT PEMBAGIAN KELAS</h1>
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
                        <form action="proses_ek.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $PJ['id'] ?>">
                        <div class="mb-3">
                                <label for="kode_kelas" class="form-label">Kode Kelas</label>
                                <input type="text" value="<?php echo $PJ['kode_kelas'] ?>" name="kode_kelas" class="form-control" id="kode_kelas" aria-describedby="kode baru nih">
                            </div>

                            <div class="mb-3">
                                <label for="nip" class="form-label">nip</label>
                                <input type="text" value="<?php echo $PJ['nip'] ?>" name="nip" class="form-control" id="nip" aria-describedby="nip yang sesuai ya">
                            </div>

                            <div class="mb-3">
                                <label for="nis" class="form-label">Nis</label>
                                <input type="text" value="<?php echo $PJ['nis'] ?>" name="nis" class="form-control" id="nis" aria-describedby="nis yang sesuai ya">
                            </div>



                            <button type="submit" class="btn btn-dark">Proses Data</button>
                            <a href="pembagiankelas.php" class="btn btn-secondary">Batal</a>
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
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>