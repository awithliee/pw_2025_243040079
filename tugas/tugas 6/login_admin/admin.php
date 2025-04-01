<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman sepuh</title>
    <style>
        body {
            text-align: center;
            color: black;
            font-family: Arial, sans-serif;
            background-image: url('img/bg.jpg');
            background-size: cover;
        }
        .isi{
            background-color: white;
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
        }
        .logout {
            background-color: red;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .iya{
            background-color: green;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="isi">
    <h1>Selamat Datang atmin apakah ada yang mau nambah billing?</h1>
    <a href="tambahan.php"class="iya">Iya</a>
    <h3>Atau</h3>
    <a href="logout.php" class="logout">Keluar</a>
    </div>

</body>
</html>