<?php
// Array Assosiative
// Array yang indexnya berupa string yang ber asosiasi dengan tiap elemen
$mahasiswa = [
    [
        'nama' => 'Vicka',
        'nim' => '243040067',
        'email' => 'vickaas29@gmail.com',
        'jurusan' => 'Teknik Informatika'
    ],
    [
        'nama' => 'Aulia',
        'nim' => '243040077',
        'email' => 'Auliasha@gmail.com',
        'jurusan' => 'Teknik Informatika'
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bersaray</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m['nama']; ?></li>
            <li>NIM: <?= $m['nim']; ?></li>
            <li>Email: <?= $m['email']; ?></li>
            <li>Jurusan: <?= $m['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>