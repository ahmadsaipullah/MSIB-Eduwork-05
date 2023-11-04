<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Buku</title>
    <?php
    session_start();
    ob_start();
    @include("../../include/conncet.php");
    @include("../../include/style.php");
    @include("../controller/home.php");
    ?>
</head>

<body>
    <!-- section -->
    <div class="container section-navbar">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2>EDIT BUKU</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <form action="edit.php?isbn=<?php echo $isbn; ?>" method="post" class="border py-4 px-4">

                    <div class="row mb-3">
                        <label for="isbn" class="col-sm-2 col-form-label">Isbn</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $isbn; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="tahun" name="tahun" value="<?php echo $tahun; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="id_penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="id_penerbit" id="id_penerbit">

                                <?php

                                while ($penerbit = mysqli_fetch_array($add_penerbit)) {

                                    echo "
        <option " . ($penerbit['id_penerbit'] == $id_penerbit ? 'selected' : '') . " value="
                                        . $penerbit['id_penerbit'] . ">" . $penerbit['nama_penerbit'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="id_pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="id_pengarang" id="id_pengarang">

                                <?php

                                while ($pengarang = mysqli_fetch_array($add_pengarang)) {

                                    echo "
        <option " . ($pengarang['id_pengarang'] == $id_pengarang ? 'selected' : '') . " value="
                                        . $pengarang['id_pengarang'] . ">" . $pengarang['nama_pengarang'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="id_katalog" class="col-sm-2 col-form-label">Katalog</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="id_katalog" id="id_katalog">

                                <?php

                                while ($katalog = mysqli_fetch_array($add_katalog)) {

                                    echo "
                                    <option " . ($katalog['id_katalog'] == $id_katalog ? 'selected' : '') . " value="
                                        . $katalog['id_katalog'] . ">" . $katalog['nama'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="qty_stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="qty_stok" name="qty_stok" value="<?php echo $qty_stok; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga_pinjam" class="col-sm-2 col-form-label">Harga Pinjam</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="harga_pinjam" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" name="update" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- endsection -->
    <?php
    // javascript
    @include("../../include/script.php");
    ?>
</body>

</html>