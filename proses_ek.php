<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id  = $_POST['id'];
$kode_kelas  = $_POST['kode_kelas'];
$nip = $_POST['nip'];
$nis  = $_POST['nis'];


//3. membuat query INSERT
$qry = "UPDATE pendaftaran SET kode_kelas='$kode_kelas', nip='$nip',
nis='$nis' WHERE id='$id'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location="pembagiankelas.php";
</script>
