<?php include_once("koneksi.php")?>

<?php
$sql_pend= "SELECT * FROM pendaftaran";
$result_pend = mysqli_query($con,$sql_pend);
$pend = mysqli_num_rows($result_pend);
?>

<?php
$sql_pemb = "SELECT * FROM pembagiankelas";
$result_pemb = mysqli_query($con,$sql_pemb);
$pemb = mysqli_num_rows($result_pemb);
?>