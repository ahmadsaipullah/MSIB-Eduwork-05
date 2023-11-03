<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Edit Buku</title>
    <?php
    ob_start();
    @include("../../include/conncet.php");
    @include("../../include/style.php");
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


    ?>
</head>

<body>



    <div class="container">
        <div class="row" style="margin: 50px;">
            <div class="col-md-12 text-center">
                <h4>EDIT BUKU</h4>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <form action="edit.php?isbn=<?php echo $isbn; ?>" method="post" name="form1">
                    <table width="100%" class="table-bordered" cellpadding="10" border="0">
                        <tr>
                            <td>ISBN</td>
                            <td><input type="text" readonly class="form-control" name="isbn" value="<?php echo $isbn; ?>"></td>
                        </tr>
                        <tr>
                            <td>JUDUL</td>
                            <td><input type="text" class="form-control" name="judul" value="<?php echo $judul; ?>"></td>
                        </tr>
                        <tr>
                            <td>TAHUN</td>
                            <td><input type="text" class="form-control" name="tahun" value="<?php echo $tahun; ?>"></td>
                        </tr>
                        <tr>
                            <td>PENERBIT</td>
                            <td><select class="form-control" name="id_penerbit">
                                    <?php

                                    while ($penerbit = mysqli_fetch_array($add_penerbit)) {

                                        echo "
                                        <option " . ($penerbit['id_penerbit'] == $id_penerbit ? 'selected' : '') . " value="
                                            . $penerbit['id_penerbit'] . ">" . $penerbit['nama_penerbit'] . "</option>";
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
                                        <option " . ($pengarang['id_pengarang'] == $id_pengarang ? 'selected' : '') . " value="
                                            . $pengarang['id_pengarang'] . ">" . $pengarang['nama_pengarang'] . "</option>";
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
                            <td><input type="text" class="form-control" name="qty_stok" value="<?php echo $qty_stok; ?>"></td>
                        </tr>
                        <tr>
                            <td>HARGA PINJAM</td>
                            <td><input type="text" class="form-control" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>"></td>
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
    $result = mysqli_query($sqli, "UPDATE buku SET judul = '$judul', tahun='$tahun', id_penerbit = '$id_penerbit', id_pengarang= '$id_pengarang', id_katalog= '$id_katalog', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn';");


    exit(header("Location:../../index.php"));
}



?>