<?php

session_start();//mulai sesi
//menghubungkan file ini dengan file konfigurasi database
include("../koneksi.php");

//mengecel apakah tombol 'simpan' telah ditekan
if(isset($_POST['simpan'])){
    /*mengambil nilai dari form input dan
     menyimpannya ke dalam  variable */
    $id = $_POST['paket_id'];
    $berat = $_POST['berat'];
    $tujuan = $_POST['tujuan'];
    $biaya = $_POST['biaya'];
    /* menyusun query SQL untuk menambahkan data
     ke tabel 'paket1' */
    $sql = "INSERT INTO paket1
    (berat, tujuan, biaya)
    VALUES ('$berat','$tujuan','$biaya')";

    // Menjalankan query dan menyimpan hasilnya dalam variable $query
    $query = mysqli_query($db, $sql);

    //simpan pesan di sesi
    if ($query){
        $_SESSION['notifikasi'] = "Data siswa berhasil di tambahakan!";
    } else {
        $_SESSION['notifikasi'] = "Data siswa gagal disimpan!";
    }
    //alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // jika akses langsung tanpa form, tampilkan pesan error
    die("Akses di tolak...");
}
?>