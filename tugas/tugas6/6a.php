<!DOCTYPE html>
<html>

<head>
    <title>Latihan6a</title>
    <style>
        .box {
            display: inline-block;
            width: 30px;
            height: 30px;
            margin: 2px;
            text-align: center;
            line-height: 30px;
            border: 1px solid black;
        }

        .biru {
            background-color: rgb(10, 97, 119);
        }

        .putih {
            background-color: white;
        }
    </style>
</head>

<body>

    <?php
    $angka = 10;

    for ($i = $angka; $i >= 1; $i--) {
        $warna = (($angka - $i) % 2 == 0) ? 'biru' : 'putih';

        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='box $warna'>$i</div>";
        }

        echo "<br>";
    }
    ?>

</body>

</html>