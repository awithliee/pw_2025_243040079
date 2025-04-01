<?php
// array asosiative
// array yang indeknnya adalah string yang ber asosiasi dengan tiap elemen nya

$mahasiwa = [
    ['nama'=>'ali',
    'nim'=> '243040079', 
    'email'=> 'ali@gmail.com',
    'jurusan'=> 'teknik informatika'],

    ['nama'=>'fauzi',
    'nim'=> '243040099', 
    'email'=> 'fazu@gmail.com',
    'jurusan'=> 'teknik mesin']
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
            <li>Nama : <?= $mhs['nama']; ?></li>
            <li>Nim : <?= $mhs['nim']; ?></li>
            <li> Email :<?= $mhs['email']; ?></li>
            <li>Jueusan :<?= $mhs['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>