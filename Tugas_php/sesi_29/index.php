<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUGAS SESI 29</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <?php
  @include("connect.php");
  //nomor urut pada table
  $nomor = 0;
  //query menampilkan data yang data di database
  $karyawans = mysqli_query($sqli, "SELECT nip, nama, jenis_kelamin, tanggal_lahir, telpon, agama, status, alamat, jabatan FROM karyawan ");
  ?>


  <!-- awal navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand text-white" href="#">EMPLOYEE</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation ">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">About</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
  <!-- awal header -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../tugas/img/1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item ">
        <img src="../tugas/img/2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../tugas/img/3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- akhir header -->
  <!-- awal content -->
  <div class="container mt-5">
    <h3 class="text-center mb-5">DATA KARYAWAN</h3>
  </div>

  <?php while ($karyawan = mysqli_fetch_array($karyawans)) {

    $nomor++;
  ?>
    <div class="container">



      <table class="table table-striped table-bordered ">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>TANGGAL LAHIR</th>
            <th>TELPON</th>
            <th>AGAMA</th>
            <th>STATUS</th>
            <th>ALAMAT</th>
            <th>JABATAN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th><?php echo htmlspecialchars($nomor) ?></th>
            <td><?php echo htmlspecialchars($karyawan['nip']) ?></td>
            <td><?php echo htmlspecialchars($karyawan['nama']) ?></td>
            <td><?php echo htmlspecialchars($karyawan['jenis_kelamin']) ?></td>
            <td><?php echo htmlspecialchars($karyawan['tanggal_lahir']) ?></td>
            <td><?php echo htmlspecialchars($karyawan['telpon']) ?></td>
            <td><?php echo htmlspecialchars($karyawan['agama']) ?></td>
            <td><?php echo htmlspecialchars($karyawan['status']) ?></td>
            <td><?php echo htmlspecialchars($karyawan['alamat']) ?></td>
            <td><?php echo htmlspecialchars($karyawan['jabatan']) ?></td>
          </tr>
        </tbody>
      </table>


    <?php } ?>
    </div>
    <footer class="container-fluid bg-dark" style="margin-top: 300px;">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">
        <div class="row">
          <!-- Grid column -->
          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-4 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mb-4 text-white">About</h5>

            <ul class="list-unstyled">
              <li>
                <p>
                  <a href="#!" class="text-white text-decoration-none">PROJECTS</a>
                </p>
              </li>
              <li>
                <p>
                  <a href="#!" class="text-white text-decoration-none">ABOUT US</a>
                </p>
              </li>
              <li>
                <p>
                  <a href="#!" class="text-white text-decoration-none">BLOG</a>
                </p>
              </li>
              <li>
                <p>
                  <a href="#!" class="text-white text-decoration-none">AWARDS</a>
                </p>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-4 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

            <!-- Contact details -->
            <h5 class="font-weight-bold text-uppercase mb-4 text-white">Address</h5>

            <ul class="list-unstyled text-white">
              <li>
                <p>
                  <i class="fas fa-home mr-3"></i> New York, NY 10012, US
                </p>
              </li>
              <li>
                <p>
                  <i class="fas fa-envelope mr-3"></i> info@example.com
                </p>
              </li>
              <li>
                <p>
                  <i class="fas fa-phone mr-3"></i> + 01 234 567 88
                </p>
              </li>
              <li>
                <p>
                  <i class="fas fa-print mr-3"></i> + 01 234 567 89
                </p>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->

          <!-- Social media-->
          <div class="col-md-4 col-lg-2 text-center mx-auto my-4">
            <ul class="text-center">

              <h5 class="font-weight-bold text-uppercase mb-4 text-white d-block">Follow Us</h5>
              <li><a type="button" class="btn-floating btn-dribbble text-white text-decoration-none ">
                  <i class="fa-brands fa-instagram"> </i> instagram
                </a>
              </li>
              <li><a type="button" class="btn-floating btn-fb text-white text-decoration-none pt-4 ">
                  <i class="fab fa-facebook-f"> </i> Facebook
                </a>
              </li>
              <li><a type="button" class="btn-floating btn-gplus text-white text-decoration-none pt-4">
                  <i class="fab fa-google-plus-g"> </i> Google
                </a>
              </li>
              <li><a type="button" class="btn-floating btn-tw text-white text-decoration-none pt-4">
                  <i class="fab fa-twitter"> </i> Twitter
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- sosial media-->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-4 text-white"><b> © 2023 Copyright</b>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

    </script>
</body>

</html>