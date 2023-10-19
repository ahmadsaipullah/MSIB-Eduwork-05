<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "Sesi 26 For" ?></title>
</head>

<body>

  <?php
  //Nomor 1
  for ($angka = 1; $angka <= 10; $angka++) {

    if ($angka % 2 == 1) {
      echo "$angka Adalah Bilangan Ganjil <br/> ";
    } else {

      echo "$angka Adalah Bilangan Genap <br/>";
    }
  }

  echo "<br/><br/><br/>";
  //Nomor 2


  for ($tahun = 2000; $tahun <= 2023; $tahun++) {

    if ($tahun % 2 == 0) {
      echo "Tahun $tahun Adalah Tahun Kabisat <br/> ";
    } else {
      echo "Tahun $tahun Adalah Bukan Tahun Kabisat <br/>";
    }
  }
  echo "<br/><br/><br/>";

  //Nomor 3

  for ($i = 9; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
      echo $j;
    }
    echo "<br>";
  }

  ?>



</body>

</html>