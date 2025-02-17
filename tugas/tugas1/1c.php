<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1c</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin: 20px;
        }
        .row {
            display: flex;
        }
        .box {
            width: 50px;
            height: 50px;
            background-color: pink;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class= "container">
        <div class= "row">
            <div class="box">1</div>
        </div>
        <div class= "row">
            <div class="box">2</div>
            <div class="box">2</div>
        </div>
        <div class= "row">
            <div class="box">3</div>
            <div class="box">3</div>
            <div class="box">3</div>
        </div>
    </div>
</body>
</html>