
<?php
session_start();
@include("../../include/conncet.php");

$isbn = $_GET['isbn'];

//query delete
$delete = mysqli_query($sqli, "DELETE FROM buku WHERE isbn = '$isbn'");
//pesan pemberitahuan  
$_SESSION['status'] = "Data Berhasil Di Hapus!";
//warna alert
$_SESSION['message'] = "danger";
//setelah di update mengarahkan ke halamana
exit(header("Location:../../index.php"));
?>