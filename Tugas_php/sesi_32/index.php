<!-- Nomor 1 -->

<?php
$angka = array("satu", "dua", "tiga", "empat", "lima");
$reversed_angka = array_reverse($angka);
$output = implode("<br/>", $reversed_angka);
echo $output;


?>

<!-- Nomor 2 -->
<?php
echo "<br/><br/><br/>";

$buah = array("apel", "nanas", "mangga", "jeruk");
$jumlah_buah = count($buah);

echo "Terdapat " . $jumlah_buah . " buah";

?>

<!-- Nomor 3 -->
<?php
echo "<br/><br/><br/>";

$number = array(7, 3, 4, 9);
$total = 0;

foreach ($number as $n) {
  $total += $n;
}

echo "Totalnya adalah " . $total;

?>


<!-- Nomor 4 -->
<?php
echo "<br/><br/><br/>";
for ($i = 1; $i <= 10; $i++) {
  $result = 1 * $i;
  echo "1 x " . $i . " = " . $result . "<br/>";
}

?>