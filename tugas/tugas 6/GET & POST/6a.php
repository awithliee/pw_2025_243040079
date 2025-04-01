<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        .box {
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border: 1px solid black;
            font-size: 18px;
        }

        .green {
            background-color: darkgreen;
        }

        .white {
            background-color: white;
        }
    </style>
</head>

<body>

    <?php

    $angka = isset($_GET['angka']) ? (int)$_GET['angka'] : 10;
    for ($i = $angka; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            $color = ($i % 2 == 0) ? 'green' : 'white';
            echo "<div class='box $color'>$i</div>";
        }
        echo "<br>";
    }
    ?>

</body>

</html>