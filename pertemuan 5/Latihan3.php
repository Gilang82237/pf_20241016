<?php
// array multidimesi
// array di dalam array

$mahasiswa = [
    ["adam", "0708078505", "PTI", "adam@gmail.com"],
    ["Gilang", "010120202", "PTI", "gilang@gmail.com"],
    ["Fahmi", "09897648", "PTI", "fahmi@gmail.com"],
    ["Angan", "09875643", "PTI", "angan@gmail.com"]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array Multidimensi</title>
</head>
<body>
    <h1>Daftar Biodata Mahasiswa</h1>

    <ul>
        <?php foreach ( $mahasiswa as $mhs) : ?>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM : <?= $mhs[1]; ?></li>
        <li>Jurusan :<?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
        <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>