<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepustakaan</title>
    <?php
    session_start();
    // css
    @include("include/style.php");
    // koneksi database
    @include("include/conncet.php");
    // proses query data
    @include("page/controller/home.php");
    ?>
</head>

<body>
    <?php
    @include("include/navbar.php");
    ?>

    <!-- section -->
    <div class="container section-navbar">
        <div class="header">
            <h2 class="text-center">Data Buku Perpustakaan</h2>
        </div>
        <!-- Alert -->
        <?php
        if (isset($_SESSION['status'])) { ?>
            <div class="alert alert-<?= $_SESSION['message'] ?> alert-dismissible fade show" role="alert">
                <strong>Hey! </strong> <?php echo $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <?php
                echo $_SESSION['status'];
                unset($_SESSION['status']);
                ?>
            </div>
        <?php
        }
        ?>
        <!-- endAlert -->
        <div class="row">
            <div class="col-md-12">
                <a href="page/home/create.php" class="btn btn-primary mb-2">Tambah Buku Baru</a>
                <table class="table table-striped text-center bg-light" border="2">
                    <thead class="fw-bold">
                        <tr>
                            <td>No</td>
                            <td>Isbn</td>
                            <td>Judul</td>
                            <td>Tahun</td>
                            <td>Penerbit</td>
                            <td>Pengarang</td>
                            <td>Katalog</td>
                            <td>Stock</td>
                            <td>Harga Pinjam</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $s = 0;
                        while ($books = mysqli_fetch_array($book)) {
                            $s++;
                            echo "
                    <tr>
                        <td>$s</td>
                        <td>" . $books['isbn'] . "</td>
                        <td>" . $books['judul'] . "</td>
                        <td>" . $books['tahun'] . "</td>
                        <td>" . $books['nama_penerbit'] . "</td>
                        <td>" . $books['nama_pengarang'] . "</td>
                        <td>" . $books['nama_katalog'] . "</td>
                        <td>" . $books['qty_stok'] . "</td>
                        <td>" . number_format($books['harga_pinjam']) . "</td>
                        <td>
                        <a href='page/home/edit.php?isbn=" . $books['isbn'] . " 'class=' btn btn-warning'>Edit</a>
                        <a href='#' class=' btn btn-danger' onclick='confirmation(`" . $books['isbn'] . "`)' >Delete</a>
                        </td>
                    </tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- endsection -->

    <?php
    // Footer
    @include("include/footer.php");
    // javascript
    @include("include/script.php");

    ?>
    <script type="text/javascript">
        function confirmation(isbn) {
            if (confirm('Apakah anda yakin ingin menghapus data ini ?')) {
                window.location.href = 'page/home/delete.php?isbn=' + isbn;
            }
        }
    </script>
</body>

</html>