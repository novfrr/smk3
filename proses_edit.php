<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$nomor  = $_POST['nomor'];
$kd_pendaftaran  = $_POST['kd_pendaftaran'];
$nama  = $_POST['nama'];
$jk  = $_POST['jk'];
$nis = $_POST['noinduksekolah'];
$nisn  = $_POST['nisn'];
$nik  = $_POST['noindukkependuduk'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir  = $_POST['tanggallahir'];
$agama  = $_POST['agama'];

//3. membuat query INSERT
$qry = "UPDATE pendaftaran SET kd_pendaftaran='$kd_pendaftaran', nama='$nama',
jk='$jk', noinduksekolah='$nis', nisn='$nisn', noindukpenduduk='$nik', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', agama='$agama' WHERE nomor='$nomor'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location="pendaftaran.php";
</script>
