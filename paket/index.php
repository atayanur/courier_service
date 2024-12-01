<?php
// menghubungkan file config dengan index 
include("../koneksi.php");
session_start(); // mulai sesi
?>
<!DOCTYPE html>
<html>
<head>
    <title>Selamat datang !</title>
<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
     }
    </style>
<body>
    <h2>Data paket </h2>
    <!-- Tampilkan notifikasi jika ada -->
     <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <!-- Hapus notifikasi setelah ditampilkan -->
         <?php unset($_SESSION['notifikasi']); ?>
         <?php endif; ?>
         <table>
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>berat</th>
                    <th>tujuan</th>
                    <th>biaya</th>
                    <th><a href="tambah_paket.php">Tambah</a></th>
     </tr>
     </thead>
     <tbody>
        <?php
        $no= 1; //membuat penomoran data dari 1
        // membuat variable untuk menjalankan query SQL
        $query = $db->query("SELECT*FROM paket1");
        /* perulangan while akan terus berjalan (menampilkan data)
        selama kondisi $query bernilai true (adanya data pada table
        tb_siswa) */
        while ($paket1 = $query->fetch_assoc()){
            /* fungsi fetch_assoc digunakan untuk mengambil
            data perulangan dalam bentuk array */
            ?> <!-- kode PHP ditututp untuk menyisipkan kode HTML 
            yang akan di looping menggunakan while loop -->
           
            <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $paket1['berat'] ?></td>
            <td><?php echo $paket1['tujuan'] ?></td>
            <td><?php echo $paket1['biaya'] ?></td>
          
            <td align="center">
            <a href="edit_paket.php?id=<?php echo $paket1['paket_id'] ?>">Edit</a>
            
            <a onclick="return confirm('Anda yakin ingin menghapus data?')"
            href="hapus_paket.php?paket_id=<?php echo $paket1['paket_id'] ?>">Hapus</a>
            </td>
            </tr>
            <?php
        }/*mengakhiri proses perulangan while yang dimulai dari baris 48 */
        ?>
        </tbody>
        </table>
        
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
        </body>
        </html>