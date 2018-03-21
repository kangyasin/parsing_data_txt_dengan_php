<!DOCTYPE HTML>
<html>
  <head>
    <title>Baca (Parsing) File mhs.txt</title>
  </head>
  <body>

  <?php
  $txt_file    = file_get_contents('mhs.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);

  echo '<h3>Data Mahasiswa</h3>';
  echo '<a href="form.php">Tambah Data</a></br></br>';
  $i=1;

  foreach($rows as $row => $data)
  {

        // Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
        $row_data = explode('|', $data);

        $info[$row]['id']           = $row_data[0];
        $info[$row]['nama']         = $row_data[1];
        $info[$row]['nim']          = $row_data[2];
        $info[$row]['jurusan']      = $row_data[3];
        $info[$row]['alamat']       = $row_data[4];

        // Menampilkan Data

        echo 'Bariske- ' . $i++ . '<br />';
        echo ' ID: <b>' . $info[$row]['id'] . '</b><br />';
        echo ' NAMA: <b>' . $info[$row]['nama'] . '</b><br />';
        echo ' TIM: <b>' . $info[$row]['nim'] . '</b><br />';
        echo ' JURUSAN: <b>' . $info[$row]['jurusan'] . '</b><br />';
        echo ' ALAMAT: <b>' . $info[$row]['alamat'] . '</b><br />';
        echo "<hr>";

  }
  ?>

</body>
</html>