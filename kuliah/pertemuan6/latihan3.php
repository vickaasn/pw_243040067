<?php
$mahasiswa = [
    ['Vicka', '243040067', 'vickaas29@gmail.com', 'Teknik Informatika'],
    ['Aulia', '243040077', 'Auliasha@gmail.com', 'Teknik Informatika'],
    [85, 100, 40]
];
// echo $mahasiswa[1][4][2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bersaray/title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m[0]; ?></li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>