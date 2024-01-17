<?php
session_start();
if(!isset($_SESSION['sid']) AND !isset($_COOKIE['cid']) ){
  ?>
  <script>
    document.location="login.php";
  </script>
  <?php
}

if(isset($_SESSION['sid'])){
    //variabel alemt session
    $l_id = $_SESSION['sid'];
    $l_nama = $_SESSION['snama'];
    $l_email = $_SESSION['semail'];

}elseif(isset($_COOKIE['cid'])){
    //varialbel elemt cookie
    $l_id = $_COOKIE['cid'];
    $l_nama = $_COOKIE['cnama'];
    $l_email = $_COOKIE['cemail'];
}
?>