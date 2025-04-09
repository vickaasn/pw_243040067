<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            background-image: url(bg.jpg);
            height: 100vh;
            margin: 0;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            color: #db7093;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #db7093;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #ffb6c1;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat Datang Admin!</h1>
        <a href="login.php">Logout</a>
    </div>
</body>

</html>