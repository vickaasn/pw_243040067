<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Papan Catur</title>
    <style>
        table {
            border-collapse: collapse;
            width: 400px;
            height: 400px;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <table border="1">
        <?php
        for ($row = 0; $row < 5; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 5; $col++) {
                $class = ($row + $col) % 2 == 0 ? "black" : "white";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>