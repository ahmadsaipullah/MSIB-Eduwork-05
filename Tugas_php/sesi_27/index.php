<!DOCTYPE html>
<html>

<head>
  <title><?php echo "Sesi 27 Looping" ?></title>
  <style>
    table {
      border-collapse: collapse;
    }

    th,
    td {
      border: 1px solid #CCCCCC;
      padding: 10px;
    }

    th {
      background-color: skyblue;
    }

    tr:nth-child(even) {
      background-color: #FFFFFF;

    }

    tr:nth-child(odd) {
      background-color: #CCCCCC;

    }
  </style>
</head>

<body>


  <?php


  //Tugas Nomor 1

  for ($i = 0; $i <= 8; $i++) {
    for ($j = 0; $j <= $i; $j++) {
      echo $j;
    }
    echo "<br>";
  }

  echo "<br/><br/><br/>";
  ?>

  <!-- Tugas Nomor 2 -->

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i = 1; $i <= 10; $i++) { ?>
        <tr>
          <td><?php echo $i ?></td>
          <td>Nama ke <?php echo $i ?></td>
          <td>Kelas <?php echo (11 - $i) ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>