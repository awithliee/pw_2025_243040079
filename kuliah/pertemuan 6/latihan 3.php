<?php
$mahasiwa = ['ali', '243040079', 'ali@gmail.com', 'teknik informatika'];
$mahasiwa = ['fauzi', '243040080', 'fauzi@gmail.com', 'teknik informatika'];

$mahasiwa = [
    ['ali', '243040079', 'ali@gmail.com', 'teknik informatika'],
    ['fauzi', '243040080', 'fauzi@gmail.com', 'teknik informatika']
];
// echo $mahasiwa[1][2];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array bersarang</title>
</head>

<body>
    <h2>daftar mahasiswa</h2>
    <?php foreach ($mahasiwa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>Nim : <?= $mhs[1]; ?></li>
            <li> Email :<?= $mhs[2]; ?></li>
            <li>Jueusan :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>