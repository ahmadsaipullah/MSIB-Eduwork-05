<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Pengarang</title>
  <?php
  session_start();
  ob_start();
  @include("../../include/conncet.php");
  @include("../../include/style.php");
  @include("../controller/pengarang.php");
  ?>
</head>

<body>
  <!-- section -->
  <div class="container section-navbar">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2>UPDATE PENGARANG</h2>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
        <form action="edit.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post" class="border py-4 px-4">
          <div class="row mb-3">
            <label for="id_pengarang" class="col-sm-2 col-form-label">Id Pengarang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="id_pengarang" name="id_pengarang" value="<?php echo $id_pengarang; ?>" readonly>
            </div>
          </div>
          <div class="row mb-3">
            <label for="nama_pengarang" class="col-sm-2 col-form-label">Nama Pengarang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" value="<?php echo $nama_pengarang; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label for="telp" class="col-sm-2 col-form-label">Telpon</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="telp" name="telp" value="<?php echo $telp; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>">
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