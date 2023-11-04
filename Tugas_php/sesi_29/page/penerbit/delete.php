
<?php
session_start();
@include("../../include/conncet.php");

$id_penerbit = $_GET['id_penerbit'];

//query delete
$delete = mysqli_query($sqli, "DELETE FROM penerbit WHERE id_penerbit = '$id_penerbit'");
//pesan pemberitahuan  
$_SESSION['status'] = "Data Berhasil Di Hapus!";
//warna alert
$_SESSION['message'] = "danger";
//setelah di update mengarahkan ke halamana
exit(header("Location:index.php"));
?>