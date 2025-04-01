<?php
session_start();

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = "admin";
    $valid_password = "admin";

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Username / Password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/bg\ log.jpg');
            background-size: cover;
            text-align: center;
        }

        .login-box {
            width: 300px;
            padding: 20px;
            background-color: white;
            margin: 100px auto;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
        }

        .error {
            color: red;
        }

        button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkgreen;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2>Login sepuh warnet</h2>
        <img src="img/logo.jpg" width="100px" alt="Logo"> <!-- Pastikan file ini ada di folder img -->
        <form method="post">
            <p>Username :</p>
            <input type="text" name="username" required>
            <p>Password :</p>
            <input type="password" name="password" required>
            <br><br>
            <button type="submit">Login</button>
        </form>
        <p class="error"><?php echo $error; ?></p>
    </div>

</body>

</html>