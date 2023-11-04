<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katalog Buku</title>
  <?php
  session_start();
  // css
  @include("../../include/style.php");
  // koneksi database
  @include("../../include/conncet.php");
  // proses query data
  @include("../controller/katalog.php");
  ?>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Katalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../penerbit/index.php">Penerbit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pengarang/index.php">Pengarang</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- section -->
  <div class="container section-navbar">
    <div class="header">
      <h2 class="text-center">Data Katalog Buku</h2>
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
        <a href="create.php" class="btn btn-primary mb-2">Tambah Katalog Baru</a>
        <table class="table table-striped text-center bg-light" border="2">
          <thead class="fw-bold">
            <tr>
              <td>No</td>
              <td>Id Katalog</td>
              <td>Nama</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            <?php
            $s = 0;
            while ($katalog = mysqli_fetch_array($katalogs)) {
              $s++;
              echo "
                    <tr>
                        <td>$s</td>
                        <td>" . $katalog['id_katalog'] . "</td>
                        <td>" . $katalog['nama'] . "</td>
                        <td>
                        <a href='edit.php?id_katalog=" . $katalog['id_katalog'] . " 'class=' btn btn-warning'>Edit</a>
                        <a href='#' class=' btn btn-danger' onclick='confirmation(`" . $katalog['id_katalog'] . "`)' >Delete</a>
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
  @include("../../include/footer.php");
  // javascript
  @include("../../include/script.php");

  ?>
  <script type="text/javascript">
    function confirmation(id_katalog) {
      if (confirm('Apakah anda yakin ingin menghapus data ini ?')) {
        window.location.href = 'delete.php?id_katalog=' + id_katalog;
      }
    }
  </script>
</body>

</html>