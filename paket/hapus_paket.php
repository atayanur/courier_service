<?php
session_start(); // mulai sesi
include("../koneksi.php");

//periksa apakah ada ID yang dikirim melalui URL
if (isset($_GET['paket_id'])) {
    //Ambil ID dari URL
    $paket_id = $_GET['paket_id'];

    //Buat query untuk menghapus data siswa berdasarkan ID
    $sql = "DELETE FROM paket1 WHERE paket_id=$paket_id";
    $query = mysqli_query($db, $sql);

    //simpan pesan notifikasi dalam sesi berdasarkan query
    if ($query) {
        $_SESSION['notifikasi'] = "Data siswa berhasil di hapus!";
    } else {
        $_SESSION['notifikasi'] = "Data siswa gagal di hapus!";
    }
    
    //Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    //jika akses langsung tanpa ID, tampilkan pesan error
    die("akses di tolak...");
}
?>