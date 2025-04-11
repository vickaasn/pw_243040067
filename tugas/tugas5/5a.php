<?php
$mahasiswa = [
    [
        "nama" => "Alvino Reynad Albar",
        "nrp" => "243040067",
        "email" => "alvinoreynad29.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Rajendra Gumerald",
        "nrp" => "243040002",
        "jurusan" => "Teknik Industri",
        "email" => "rajendramerald@gmail.com",
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "Alfad Raydhika Harold",
        "nrp" => "243040008",
        "jurusan" => "Teknik Sipil",
        "email" => "alfadraydhika@gmail.com",
        "gambar" => "3.jpg"
    ],
    [
        "nama" => "Zeyla Alzetta",
        "nrp" => "243040029",
        "jurusan" => "Tekniknologi Pangan",
        "email" => "alzettazeyla@gmail.com",
        "gambar" => "4.jpg"
    ],
    [
        "nama" => "Henry Pamudya",
        "nrp" => "243040077",
        "jurusan" => "Teknik Mesin",
        "email" => "henhenry07@gmail.com",
        "gambar" => "5.jpg"
    ],
    [
        "nama" => "Seyla Denatta",
        "nrp" => "243040018",
        "jurusan" => "Teknik Informatika",
        "email" => "seylanatta@gmail.com",
        "gambar" => "6.jpg"
    ],
    [
        "nama" => "Jarven Arzano",
        "nrp" => "243040004",
        "jurusan" => "Teknik Lingkungan",
        "email" => "jarvenarzano@gmail.com",
        "gambar" => "7.jpg"
    ],
    [
        "nama" => "Gerald Arthariz",
        "nrp" => "243040085",
        "jurusan" => "Teknik Informatika",
        "email" => "artharizgerald08@gmail.com",
        "gambar" => "8.jpg"
    ],
    [
        "nama" => "Jayendra Fabian",
        "nrp" => "243040017",
        "jurusan" => "Teknik Sipil",
        "email" => "jayendrabian@gmail.com",
        "gambar" => "9.jpg"
    ],
    [
        "nama" => "Bangkit Rendra Pratama",
        "nrp" => "243040021",
        "jurusan" => "Teknik Industri",
        "email" => "pratmarendra@gmail.com",
        "gambar" => "10.jpg"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>