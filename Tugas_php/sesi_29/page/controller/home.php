<!-- Read Data -->
<?php
$book = mysqli_query($sqli, "SELECT buku. *, katalog.nama as nama_katalog, penerbit.nama_penerbit, pengarang.nama_pengarang FROM buku
    LEFT JOIN katalog ON katalog.id_katalog = buku.id_katalog
    LEFT JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit
    LEFT JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang 
    ORDER BY judul DESC");
?>
<!-- endRead -->


<!-- Create -->
<?php
$add_penerbit = mysqli_query($sqli,  "SELECT * FROM penerbit");
$add_pengarang = mysqli_query($sqli,  "SELECT * FROM pengarang");
$add_katalog = mysqli_query($sqli,  "SELECT * FROM katalog");

if (isset($_POST['Submit'])) {
  $isbn = $_POST['isbn'];
  $judul = $_POST['judul'];
  $tahun = $_POST['tahun'];
  $id_penerbit = $_POST['id_penerbit'];
  $id_pengarang = $_POST['id_pengarang'];
  $id_katalog = $_POST['id_katalog'];
  $qty_stok = $_POST['qty_stok'];
  $harga_pinjam = $_POST['harga_pinjam'];

  // print_r($_POST);

  //query create
  $insert = mysqli_query($sqli, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUE('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");
  //pesan pemberitahuan  
  $_SESSION['status'] = "Data Berhasil Di Tambah!";
  //warna alert
  $_SESSION['message'] = "success";
  //setelah di update mengarahkan ke halamana
  exit(header("Location:../../index.php"));
}

?>
<!-- endCreate -->


<!-- Update-->
<?php
$add_penerbit = mysqli_query($sqli,  "SELECT * FROM penerbit");
$add_pengarang = mysqli_query($sqli,  "SELECT * FROM pengarang");
$add_katalog = mysqli_query($sqli,  "SELECT * FROM katalog");

$isbn = $_GET['isbn'];
$buku = mysqli_query($sqli, "SELECT * FROM buku WHERE isbn ='$isbn'");

while ($data_buku = mysqli_fetch_array($buku)) {
  $isbn = $data_buku['isbn'];
  $judul = $data_buku['judul'];
  $tahun = $data_buku['tahun'];
  $id_penerbit = $data_buku['id_penerbit'];
  $id_pengarang = $data_buku['id_pengarang'];
  $id_katalog = $data_buku['id_katalog'];
  $qty_stok = $data_buku['qty_stok'];
  $harga_pinjam = $data_buku['harga_pinjam'];
}

if (isset($_POST['update'])) {
  $isbn = $_POST['isbn'];
  $judul = $_POST['judul'];
  $tahun = $_POST['tahun'];
  $id_penerbit = $_POST['id_penerbit'];
  $id_pengarang = $_POST['id_pengarang'];
  $id_katalog = $_POST['id_katalog'];
  $qty_stok = $_POST['qty_stok'];
  $harga_pinjam = $_POST['harga_pinjam'];

  // print_r($_POST);

  //query update
  $result = mysqli_query($sqli, "UPDATE buku SET judul = '$judul', tahun='$tahun', id_penerbit = '$id_penerbit', id_pengarang= '$id_pengarang', id_katalog= '$id_katalog', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn';");
  //pesan pemberitahuan  
  $_SESSION['status'] = "Data Berhasil Di Update!";
  //warna alert
  $_SESSION['message'] = "success";
  //setelah di update mengarahkan ke halamana
  exit(header("Location:../../index.php"));
}
?>
<!-- endUpdate -->