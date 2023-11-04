<!-- Read -->
<?php
$katalogs = mysqli_query($sqli, "SELECT id_katalog, nama FROM katalog ");
?>
<!-- endRead -->


<!-- create -->
<?php
if (isset($_POST['Submit'])) {
  $id_katalog = $_POST['id_katalog'];
  $nama = $_POST['nama'];

  // print_r($_POST);
  //query create
  $insert = mysqli_query($sqli, "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUE('$id_katalog', '$nama');");
  //pesan pemberitahuan  
  $_SESSION['status'] = "Data Berhasil Di Tambah!";
  //warna alert
  $_SESSION['message'] = "success";
  //setelah di update mengarahkan ke halamana
  exit(header("Location:../katalog/index.php"));
}

?>
<!-- endCreate -->


<!-- Update -->
<?php

$id_katalog = $_GET['id_katalog'];
$katalog = mysqli_query($sqli, "SELECT * FROM katalog WHERE id_katalog='$id_katalog'");

while ($data_katalog = mysqli_fetch_array($katalog)) {
  $id_katalog = $data_katalog['id_katalog'];
  $nama = $data_katalog['nama'];
}

if (isset($_POST['update'])) {
  $id_katalog = $_POST['id_katalog'];
  $nama = $_POST['nama'];
  // print_r($_POST);
  //query update
  $result = mysqli_query($sqli, "UPDATE katalog SET id_katalog = '$id_katalog', nama = '$nama' WHERE id_katalog = '$id_katalog';");
  //pesan pemberitahuan  
  $_SESSION['status'] = "Data Berhasil Di Update!";
  //warna alert
  $_SESSION['message'] = "success";
  //setelah di update mengarahkan ke halamana
  exit(header("Location:../katalog/index.php"));
}
?>

<!-- end Update -->