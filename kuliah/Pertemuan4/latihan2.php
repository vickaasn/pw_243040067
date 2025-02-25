<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Looping</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            background-color: salmon;
            font-size: 0.8em;
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <div class="kotak">1</div>
    <?php } ?>
</body>

</html>