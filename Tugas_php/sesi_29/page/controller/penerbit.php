<!-- Read -->
<?php
$penerbits = mysqli_query($sqli, "SELECT id_penerbit, nama_penerbit, email, telp, alamat FROM penerbit ");
?>
<!-- endRead -->

<!-- create -->
<?php
if (isset($_POST['Submit'])) {
  $id_penerbit = $_POST['id_penerbit'];
  $nama_penerbit = $_POST['nama_penerbit'];
  $email = $_POST['email'];
  $telp = $_POST['telp'];
  $alamat = $_POST['alamat'];

  // print_r($_POST);
  //query create
  $insert = mysqli_query($sqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email` , `telp` , `alamat`) VALUE('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat');");
  //pesan pemberitahuan  
  $_SESSION['status'] = "Data Berhasil Di Tambah!";
  //warna alert
  $_SESSION['message'] = "success";
  //setelah di update mengarahkan ke halamana
  exit(header("Location:../penerbit/index.php"));
}

?>
<!-- endCreate -->

<!-- Update -->
<?php

$id_penerbit = $_GET['id_penerbit'];
$penerbit = mysqli_query($sqli, "SELECT * FROM penerbit WHERE id_penerbit='$id_penerbit'");

while ($data_penerbit = mysqli_fetch_array($penerbit)) {
  $id_penerbit = $data_penerbit['id_penerbit'];
  $nama_penerbit = $data_penerbit['nama_penerbit'];
  $email = $data_penerbit['email'];
  $telp = $data_penerbit['telp'];
  $alamat = $data_penerbit['alamat'];
}

if (isset($_POST['update'])) {
  $id_penerbit = $_POST['id_penerbit'];
  $nama_penerbit = $_POST['nama_penerbit'];
  $email = $_POST['email'];
  $telp = $_POST['telp'];
  $alamat = $_POST['alamat'];
  // print_r($_POST);
  //query update
  $result = mysqli_query($sqli, "UPDATE penerbit SET id_penerbit = '$id_penerbit', nama_penerbit = '$nama_penerbit', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$id_penerbit';");
  //pesan pemberitahuan  
  $_SESSION['status'] = "Data Berhasil Di Update!";
  //warna alert
  $_SESSION['message'] = "success";
  //setelah di update mengarahkan ke halamana
  exit(header("Location:../penerbit/index.php"));
}
?>

<!-- end Update -->