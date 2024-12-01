<?php

session_start(); //mulai sesi
include("../koneksi.php");

//periksa apakah tombol "simpan" pada edit ditekan
if (isset($_POST['simpan'])) {
    //ambil data dari form
    $id = $_POST['paket_id'];
    $berat = $_POST['berat'];
    $tujuan = $_POST['tujuan'];
    $biaya = $_POST['biaya'];

    //buat query untuk memperbarui data siswa
    $sql = "UPDATE paket1 SET
    berat='$berat',
    tujuan='$tujuan',
    biaya='$biaya'
    WHERE paket_id=$id";

    $query = mysqli_query($db, $sql);
    // simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if($query) {
        $_SESSION['notifikasi'] = "data siswa berhasil di perbarui!";
    } else {
        $_SESSION['notifikasi'] = "data siswa gagal diperbarui!";
    }
    // alihkan ke halaman index.php
    header('Location: index.php');
} else {
    //jika akses langsung tanpa form, tampilkan pesan error
    die("akses ditolak...");
}
?>