<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil id dari url
$nomor = $_GET['nomor'];

//3. membuat query INSERT
$qry = "DELETE FROM pendaftaran WHERE nomor='$nomor'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. redirect ke index
?>
<script>
    document.location= "pendaftaran.php";
    </script>