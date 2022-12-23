<?php

require 'functions.php';

// ambil data via URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa
               WHERE id = $id");
// cek data
var_dump($mhs["id"]);die;

// cek apakah tombol ubah sudah diklik atau belum
if( ubah($_POST["submit"]) ){
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Ubah Data</title>
</head>
<body>
    <h1>Halaman Ubah Data Mahasiswa</h1>

    <form action=** method=*post*>
    <input type="hidden" name="id" value="<?= $mhs["id"];?>">
    <ul>
        <li>
            <label for="nim">NIM :</label>
            <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"];?>">
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" required value="<?= $mhs["email"];?>">
        </li>
        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"];?>">
        </li>
        <li>
            <label for="gambar">Photo :</label>
            <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"];?>">
        </li>
        <li>
            <button type="submit" name="submit">Simpan</button>
        </li>
    </ul>

    </form>
</body>
</html>