<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "Tugas PHP" ?></title>
</head>

<body>
  <?php

  //Tugas 1 Membuat Output Bilangan Ganjil Genap
  echo "Tugas 1 Membuat Output Bilangan Ganjil Genap <br/> Jawaban <br/>";

  $nilaiBilangan = 80;

  if ($nilaiBilangan % 2 == 0) {
    echo "Ini Adalah Bilangan Genap = " . $nilaiBilangan;
  } else {
    echo "Ini Adalah Bilangan Ganjil = " . $nilaiBilangan;
  }


  echo "<br/><br/><br/>";
  // Tugas 2 Membuat Output tahun kabisat
  echo "Tugas 2 Membuat Output tahun kabisat <br/> Jawaban <br/>";

  $tahun = 2023;

  if ($tahun % 4 == 0) {
    echo "$tahun Tahun Kabisat";
  } else {
    echo "$tahun Bukan Tahun Kabisat";
  }

  echo "<br/><br/><br/>";

  // Tugas 3 Membuat Grade Nilai
  echo "Tugas 3 Membuat Grade Nilai <br/> Jawaban <br/>";
  // A = 90 - 100;
  // B = 80 - 89;
  // C = 70 - 79;
  // D = 60 - 69;
  // E = 90 - 100;

  $nilai = 89;

  if ($nilai >= 90) {
    echo "Grade A";
  } else if ($nilai >= 80) {
    echo "Grade B";
  } else if ($nilai >= 70) {
    echo "Grade C";
  } else if ($nilai >= 60) {
    echo "Grade D";
  } else {
    echo "Nilai Anda Kurang Dari 60";
  }
  ?>
</body>

</html>