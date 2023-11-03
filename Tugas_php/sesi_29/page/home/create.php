<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foam Buku</title>
    <?php
    ob_start();
    @include("../../include/conncet.php");
    @include("../../include/style.php");
    $add_penerbit = mysqli_query($sqli,  "SELECT * FROM penerbit");
    $add_pengarang = mysqli_query($sqli,  "SELECT * FROM pengarang");
    $add_katalog = mysqli_query($sqli,  "SELECT * FROM katalog");
    ?>
</head>

<body>
    <?php
    @include("../../include/navbar.php");
    ?>
    <div class="container section-navbar">
        <div class="row" style="margin: 50px;">
            <div class="col-md-12 text-center">
                <h4>TAMBAH BUKU</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="../../page/home/create.php" method="post">
                    <table width="100%" class="table-bordered" cellpadding="10" border="0">
                        <tr>
                            <td>ISBN</td>
                            <td><input type="text" class="form-control" name="isbn"></td>
                        </tr>
                        <tr>
                            <td>JUDUL</td>
                            <td><input type="text" class="form-control" name="judul"></td>
                        </tr>
                        <tr>
                            <td>TAHUN</td>
                            <td><input type="text" class="form-control" name="tahun"></td>
                        </tr>
                        <tr>
                            <td>PENERBIT</td>
                            <td><select class="form-control" name="id_penerbit">
                                    <?php

                                    while ($penerbit = mysqli_fetch_array($add_penerbit)) {

                                        echo "
                                        <option value=" . $penerbit['id_penerbit'] . ">" . $penerbit['nama_penerbit'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td>PENGARANG</td>
                            <td><select class="form-control" name="id_pengarang">
                                    <?php

                                    while ($pengarang = mysqli_fetch_array($add_pengarang)) {

                                        echo "
                                        <option value=" . $pengarang['id_pengarang'] . ">" . $pengarang['nama_pengarang'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </td>


                        <tr>
                            <td>KATALOG</td>
                            <td><select class="form-control" name="id_katalog">
                                    <?php

                                    while ($katalog = mysqli_fetch_array($add_katalog)) {

                                        echo "
                                        <option value=" . $katalog['id_katalog'] . ">" . $katalog['nama'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </td>


                        <tr>
                            <td>STOCK</td>
                            <td><input type="text" class="form-control" name="qty_stok"></td>
                        </tr>
                        <tr>
                            <td>HARGA PINJAM</td>
                            <td><input type="text" class="form-control" name="harga_pinjam"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="form-control btn btn-primary" name="Submit" value="Add"></td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
    </div>

    <!-- section -->
    <?php
    // Footer
    @include("../../include/footer.php");
    // javascript
    @include("../../include/script.php");
    ?>
</body>

</html>

<?php
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
    $insert = mysqli_query($sqli, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUE('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");
    $_SESSION['berhasil'] = "Success";
    $_SESSION['gagal'] = "Your Record has been Saved";
    exit(header("Location:../../index.php"));
}

?>