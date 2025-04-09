<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to right, rgb(241, 188, 206), rgb(216, 140, 165));
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgb(180, 103, 129);
            width: 350px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: rgb(180, 103, 129);
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: rgb(180, 103, 129);
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: rgb(180, 103, 129);
            color: white;
            border: none;
            border-radius: 8px;
            margin-top: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(241, 188, 206);
        }

        .error {
            color: red;
            font-style: italic;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Login Admin</h1>

        <?php if (isset($error)) : ?>
            <p class="error">username / password salah!</p>
        <?php endif; ?>

        <form action="" method="post">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">

            <label for="password">Password :</label>
            <input type="password" name="password" id="password">

            <button type="submit" name="submit">Login</button>
        </form>
    </div>
</body>

</html>