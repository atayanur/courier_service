<?php
//termasuk file konfigurasi
include("../koneksi.php");

//mengambil ID siswa dari parameter URL
$id = $_GET['id'];

//mengambil data siswa dari database berdasarkan ID
$query = $db->query("SELECT * FROM paket1 WHERE paket_id = '$id'");
$paket1 = $query->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <tittle>Edit Data paket</tittle>
</head>
<body>
    <h3>Edit Data paket</h3>  
    <form action="proses_edit.php" method="POST">
        <!-- Menyimpan ID untuk proses selanjutnya -->
         <input type="hidden" name="paket_id" value="<?php echo $paket1['paket_id']; ?>">
         <table border="0">
            <tr>
                <td>berat</td>
                <td>
                    <input type="text" name="berat"
                    value="<?php echo $paket1 ['berat']; ?>" required>
</td>
</tr>
<tr>
    <td>tujuan</td>
   <td>
    <input type="text" name="tujuan" value="<?php echo $paket1['tujuan']; ?>" required>
</td>
</tr>
  <tr>
    <td>biaya</td>
    <td>
        <input type="text" name="biaya"
        value="<?php echo $paket1['biaya']; ?>">
</td>
</tr>

</table>
<button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>