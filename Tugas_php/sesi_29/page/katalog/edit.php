<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Katalog</title>
  <?php
  session_start();
  ob_start();
  @include("../../include/style.php");
  // koneksi database
  @include("../../include/conncet.php");
  // proses query data
  @include("../controller/katalog.php");
  ?>
</head>

<body>
  <!-- section -->
  <div class="container section-navbar">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2>UPDATE KATALOG</h2>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
        <form action="edit.php?id_katalog=<?php echo $id_katalog; ?>" method="post" class="border py-4 px-4">
          <div class="row mb-3">
            <label for="id_katalog" class="col-sm-2 col-form-label">Id Katalog</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="id_katalog" name="id_katalog" value="<?php echo $id_katalog; ?>" readonly>
            </div>
          </div>
          <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
            </div>
          </div>

          <div class="d-flex justify-content-end">
            <button type="submit" name="update" class="btn btn-primary">Update</button>
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