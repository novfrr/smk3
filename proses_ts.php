<?php
// 1.Membuat koneksi
include_once("koneksi.php");

// 2.Mengambil seluruh nilai input dan dimasukan ke variabel
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

// 3.membuat query INSERT
$qry ="INSERT INTO pendaftaran(nomor,kd_pendaftaran,nama,jk,noinduksekolah,nisn,noindukkependuduk,tempatlahir,tanggallahir,agama) VALUES 
('$nomor','$kd_pendaftaran','$nama','$jk','$nis','$nisn','$nik','$tempatlahir', '$tanggallahir', '$agama')";

// 4. Menjalankan query
$simpan = mysqli_query($con,$qry);

// 5. alihkan ke halaman index.php
?>
<script>
    document.location="pendaftaran.php";
</script>