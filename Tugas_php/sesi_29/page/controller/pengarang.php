<!-- Read -->
<?php
$pengarangs = mysqli_query($sqli, "SELECT id_pengarang, nama_pengarang, email, telp, alamat FROM pengarang ");
?>
<!-- endRead -->

<!-- create -->
<?php
if (isset($_POST['Submit'])) {
  $id_pengarang = $_POST['id_pengarang'];
  $nama_pengarang = $_POST['nama_pengarang'];
  $email = $_POST['email'];
  $telp = $_POST['telp'];
  $alamat = $_POST['alamat'];

  // print_r($_POST);
  //query create
  $insert = mysqli_query($sqli, "INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email` , `telp` , `alamat`) VALUE('$id_pengarang', '$nama_pengarang', '$email', '$telp', '$alamat');");
  //pesan pemberitahuan  
  $_SESSION['status'] = "Data Berhasil Di Tambah!";
  //warna alert
  $_SESSION['message'] = "success";
  //setelah di update mengarahkan ke halamana
  exit(header("Location:../pengarang/index.php"));
}

?>
<!-- endCreate -->

<!-- Update -->
<?php

$id_pengarang = $_GET['id_pengarang'];
$pengarang = mysqli_query($sqli, "SELECT * FROM pengarang WHERE id_pengarang='$id_pengarang'");

while ($data_pengarang = mysqli_fetch_array($pengarang)) {
  $id_pengarang = $data_pengarang['id_pengarang'];
  $nama_pengarang = $data_pengarang['nama_pengarang'];
  $email = $data_pengarang['email'];
  $telp = $data_pengarang['telp'];
  $alamat = $data_pengarang['alamat'];
}

if (isset($_POST['update'])) {
  $id_pengarang = $_POST['id_pengarang'];
  $nama_pengarang = $_POST['nama_pengarang'];
  $email = $_POST['email'];
  $telp = $_POST['telp'];
  $alamat = $_POST['alamat'];
  // print_r($_POST);
  //query update
  $result = mysqli_query($sqli, "UPDATE pengarang SET id_pengarang = '$id_pengarang', nama_pengarang = '$nama_pengarang', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id_pengarang';");
  //pesan pemberitahuan  
  $_SESSION['status'] = "Data Berhasil Di Update!";
  //warna alert
  $_SESSION['message'] = "success";
  //setelah di update mengarahkan ke halamana
  exit(header("Location:../pengarang/index.php"));
}
?>

<!-- end Updatgarang