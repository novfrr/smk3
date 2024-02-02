<?php
// 1. membuat koneksi
include_once("pendaftaran.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$kodependaftaran = $_POST['kodependaftaran'];


//3. membuat query INSERT
$qry ="UPDATE pendaftaran SET kodependaftaran='$kodependaftaran' WHERE id='$id'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman jurusan
?>
<script>
    document.location= "pendaftaran.php";
    </script>

