<?php
// 1.Membuat koneksi
include_once("koneksi.php");

// 2.Mengambil seluruh nilai input dan dimasukan ke variabel
$kode_kelas  = $_POST['kode_kelas'];
$nip  = $_POST['nip'];
$nis = $_POST['nis'];


// 3.membuat query INSERT
$qry ="INSERT INTO pembagiankelas (kode_kelas,nip,nis) VALUES 
('$kode_kelas','$nip','$nis')";

// 4. Menjalankan query
$simpan = mysqli_query($con,$qry);

// 5. alihkan ke halaman index.php
?>
<script>
    document.location="pembagiankelas.php";
</script>