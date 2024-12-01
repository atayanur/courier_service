<!DOCTYPE html>
<html>
<head>
    <title>Data paket</title>
</head>
<body>
 <h3>Tambah Data Siswa</h3>
<form action="proses_tambah.php" method="POST">
    <table border="0">
    <tr>
    <td>berat</td>
    <td><input type="text" name="berat" required></td>
</tr>
<tr>
    <td>tujuan</td>
    <td><input type="text" name="tujuan" required></td>
</tr>
<tr>
    <td>biaya</td>
    <td><input type="float" name="biaya"></td>
</tr>

</table>
<button type="submit" name="simpan" class="btn btn-primary">
    Simpan</button>

   </from>
 </body>
</html>