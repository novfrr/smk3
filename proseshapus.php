<?php
// 1. membuat koneksi
include_once("pendaftaran.php");

//2. mengambil id dari url
$id = $_GET['id'];

//3. membuat query INSERT
$qry = "DELETE FROM mahasiswa WHERE id='$id'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. redirect ke index
?>
<script>
    document.location= "index.php";
    </script>