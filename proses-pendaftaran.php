<?php

include("config.php");

// cek tombol daftar 
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // buat query
    $sql = "INSERT INTO daftar (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // jika berhasil dialihkan ke halaman index.php dengan status = sukses
        header('Location: index.php?status=sukses');
    } else {
        // jika gagal dialihkan ke halaman index.php dengan status = gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses tidak bisa dibuka");
}
?>