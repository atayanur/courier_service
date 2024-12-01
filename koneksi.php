<?php
//menentukan nama host, biasanya "localhost"
$server = "localhost";
// nama pengguna MySQL (default: root)
$user = "root";
// kata sandi untuk pengguna MySQL (default: kosong untuk root)
$password = "";
//nama basis data yang dihubungkan
$nama_database = "courier_service2";

//mencoba untuk membuat koneksi ke basis data
$db = mysqli_connect($server, $user, $password, $nama_database);

// memeriksa apakah koneksi berhasil
if (!$db) {
    die("gagal terhubung dengan database: " . mysql_connect_error());
}
?>