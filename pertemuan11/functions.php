<?php

    //koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "db_20241016");

    // query
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
          $rows[] = $row;
        }
        return $rows;
    }

    // tambah
    function tambah($data){
        global $conn;
        // ambil data dari form
        $nim = $data["nim"];
        $nama = $data["nama"];
        $email = $data["email"];
        $jurusan = $data["jurusan"];
        $gambar = $data["gambar"];

        // membuat query insert(tambah) data
        $query = "INSERT INTO mahasiswa
                  VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    }

    // hapus
    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

?>