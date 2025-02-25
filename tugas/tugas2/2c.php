<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2C</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 30px;
            height: 30px;
            text-align: center;
            background-color: salmon;
            color: black;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <?php
        $n = 10;
        for ($i = $n; $i >= 1; $i--) {
            echo "<tr>";
            for ($j = 1; $j <= $i; $j++) {
                echo "<td>$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>