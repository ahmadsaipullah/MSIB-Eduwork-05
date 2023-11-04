
<?php
session_start();
@include("../../include/conncet.php");

$id_pengarang = $_GET['id_pengarang'];

//query delete
$delete = mysqli_query($sqli, "DELETE FROM pengarang WHERE id_pengarang = '$id_pengarang'");
//pesan pemberitahuan  
$_SESSION['status'] = "Data Berhasil Di Hapus!";
//warna alert
$_SESSION['message'] = "danger";
//setelah di update mengarahkan ke halamana
exit(header("Location:index.php"));
?>