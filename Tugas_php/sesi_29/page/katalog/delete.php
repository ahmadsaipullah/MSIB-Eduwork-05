
<?php
session_start();
@include("../../include/conncet.php");

$id_katalog = $_GET['id_katalog'];

//query delete
$delete = mysqli_query($sqli, "DELETE FROM katalog WHERE id_katalog = '$id_katalog'");
//pesan pemberitahuan  
$_SESSION['status'] = "Data Berhasil Di Hapus!";
//warna alert
$_SESSION['message'] = "danger";
//setelah di update mengarahkan ke halamana
exit(header("Location:index.php"));
?>