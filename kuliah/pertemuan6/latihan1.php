<?php
// Membuat array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Vicka', 39, true];

// Mencetak / Menampilkan Array
// Menampilkan seluruh isi (hanya untuk debugging)
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Gunakan echo jika ingin mencetak 1 elemen (Menggunakan index)
echo $hari[2];
echo "<br>";
echo $myArray[0];
echo "<hr>";


// Menambah isi array
// gunakan []
$hari[] = 'Kamis';
$bulan[] = 'Maret';
print_r($hari);
echo "<br>";
print_r($bulan);
