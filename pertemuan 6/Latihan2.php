<?php 
  // $mahasiswa = [
  //   ['Adam', "0708078505", "PTI", "adambachtiar@undikma.ac.id"], 
  //   ['Bachtiar', "0708078005", "PTI", "bachtiar@undikma.ac.id"],
  //   ['Otong Surotong', "0708078505", "PTI", "otongsurotong@undikma.ac.id"]
  // ];

  // Array Associative
  // definisinya sama dengan array numerik, kecuali
  // key-nya adalah string yang kita buat sendiri
  $mahasiswa = [
    ["nama" => "Adam",
     "nim" => "0708078505",
     "email" => "adam@undikma.com",
     "jurusan" => "PTI"
    ],
    ["nama" => "Gilang",
     "nim" => "019732927",
     "email" => "gilang@gmail.com",
     "jurusan" => "PTI"
    ],
    ["nama" => "Fahmi",
     "nim" => "9103472903",
     "email" => "fahmi@gmail.com",
     "jurusan" => "PTI"
    ],
    ["nama" => "angan",
     "nim" => "763893847",
     "email" => "angan@gmail.com",
     "jurusan" => "PTI"
    ]
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Array Asosiatif</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NIM : <?= $mhs["nim"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li> 
    </ul>
    <?php endforeach; ?>
</body>
</html>