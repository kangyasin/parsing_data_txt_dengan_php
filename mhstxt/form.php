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