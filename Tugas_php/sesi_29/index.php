<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepustakaan</title>
    <?php
    // css
    @include("include/style.php");
    // koneksi database
    @include("include/conncet.php");
    // proses query data
    $book = mysqli_query($sqli, "SELECT buku. *, katalog.nama as nama_katalog, penerbit.nama_penerbit, pengarang.nama_pengarang FROM buku
    LEFT JOIN katalog ON katalog.id_katalog = buku.id_katalog
    LEFT JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit
    LEFT JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang 
    ORDER BY judul ASC");
    ?>
</head>

<body>
    <?php
    @include("include/navbar.php");
    ?>

    <?php
    if (isset($_SESSION['gagal'])) {
    }

    ?>
    <!-- section -->
    <div class="container section-navbar">
        <div class="row">
            <div class="col-md-12">
                <a href="page/home/create.php" class="btn btn-primary mb-2">Add New Buku</a>
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
                        <td>" . $books['harga_pinjam'] . "</td>
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
    <!-- section -->
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