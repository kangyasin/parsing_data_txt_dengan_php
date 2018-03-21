# Cara Melakukan Parsing data dari file .txt ke PHP

## Mengambil data dari file mhs.txt

Berikut ini saya mempunyai data mahasiswa dalam file mhs.txt dengan data seperti ini :

```markdown
ID|NAMA|NIM|JURUSAN|ALAMAT
001|Yasin|13101031|Sistem Informasi|Indonesia, Jakarta
002|Gerrard|13101032|Manajemen Informasi|Indonesia, Jakarta
```

Lalu buatlah file php sederhana dengan nama file index.php yang berisi kode seperti berikut ini :

```php+HTML
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
```

Jika file index.php dijalankan maka akan terlihat tampilan seperti berikut ini :

![Fetch](https://raw.githubusercontent.com/kangyasin/parsing_data_txt_dengan_php/master/screenshoot/fetch_data.PNG)

------

## Melakukan insert data dari php kedalam file.txt

Setelah berhasil memanggil selanjutnya buat cara menambahkan data kedalam file mhs.txt dengan nama **form.php** dan isi dengan kode berikut :

```php+HTML
<!DOCTYPE HTML>
<html>
  <head>
    <title>Baca (Parsing) File mhs.txt</title>
  </head>
  <body>
 
    <form name="form1" method="post" action="proses.php">
    <table width="780" border="0" align="center">
      <tr>
        <td colspan="2"><h3>Form Isian Data Mahasiswa</h3></td>
      </tr>
      <tr>
        <td width="250">ID</td>
        <td width="530"><input size="40" name="id" type="text" id="id"></td>
      </tr>
      <tr>
        <td>NAMA</td>
        <td><input size="40" name="nama" type="text" id="nama" value=""></td>
      </tr>
      <tr>
        <td>NIM</td>
        <td><input size="40" name="nim" type="text" id="nim"></td>
      </tr>
      <tr>
        <td>JURUSAN</td>
        <td><input size="40" name="jurusan" type="text" id="jurusan"></td>
      </tr>
 
      <tr>
        <td>ALAMAT (Kota, Negara)</td>
        <td><input size="40" name="alamat" type="text" id="alamat"></td>
      </tr>
      <tr>
        <td></td>
        <td><input name="Submit" type="submit" value="Simpan"></td>
      </tr>
      <tr>
        <td></td>
        <td><a href="index.php">Lihat Data >></a></br></td>
      </tr>
    </table>
    </form>
 
  </body>
</html>

```

Setelah kode diatas dibuat dan disimpan dengan nama **form.php** maka akan terlihat tampilan seperti berikut ini :

![Form](https://raw.githubusercontent.com/kangyasin/parsing_data_txt_dengan_php/master/screenshoot/form.PNG)



Lalu buat file php dengan nama **proses.php** untuk menjalankan proses fungsi tambah pada file mhs.txt isikan dengan kode berikut pada **proses.php** :

```php+HTML
<?php
 
  // Menangkap isi variabel dari file yang telah kita isi pada form.php
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $jurusan = $_POST['jurusan'];
  $alamat = $_POST['alamat'];
 
  // Format data yang akandiparsing
  $data = "\n $id|$nama|$nim|$jurusan|$alamat";
 
  // Buka file mhs.txt, kemudian tuliskan isi variabel di atas kedalam mhs.txt
  $fh = fopen("mhs.txt", "a");
  fwrite($fh, $data);
 
  // Tutup file data.txt
  fclose($fh);
 
  // Keterangan bila data berhasil di input
  print "Data Telah Tersimpan.</br><a href='index.php'>Kembali ke Index >></a>";
 
?>
```

Selanjutnya anda bisa jalankan dan jika berhasil maka akan terlihat tampilan kembali ke index seperti dibawah ini :

![Saved](https://raw.githubusercontent.com/kangyasin/parsing_data_txt_dengan_php/master/screenshoot/saved.PNG)

Untuk full sourcenya saya sudah tambahkan disini :

**mhstxt** : https://github.com/kangyasin/parsing_data_txt_dengan_php/tree/master/mhstxt
