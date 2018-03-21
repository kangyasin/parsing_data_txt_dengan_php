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
  print "Data Telah Tersimpan.</br><a href='index.php'>Kembalike Index >></a>";
 
?>
