<?php
$mahasiswa = [
    ['M ali Fauzi JR', '243040079', 'ali@gmail.com', 'Teknik Informatika'],
    ['Indra Permana', '243020080', 'fauzi@gmail.com', 'Teknik Pangan'],
    ['Fauzan Ghariza', '243030081', 'fzn@gmail.com', 'Teknik Mesin'],
    ['Gery ', '243010001', 'Gryz@gmail.com', 'Teknik Industri'],
    ['Riska Sabila', '243050071', 'RiskaS@gmail.com', 'Teknik Lingkungan'],
    ['Putri Nur rizki', '243060099', 'PutriNR@gmail.com', 'Teknik Perencanaan Wilayah & Kota'],
    ['Dina Amalia', '243070102', 'dina@gmail.com', 'Teknik Sipil'],
    ['Rizky Ramadhan', '243080103', 'rizzz20@gmail.com', 'Teknik Elektro'],
    ['Siti Aisyah', '243090104', 'aisyah@gmail.com', 'Teknik Kimia'],
    ['Ahmad Zaki', '243100105', 'ahmdzaks@gmail.com', 'Teknik Geologi']
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Terbaik</title>
    <link rel="shortcut icon" href="img/Favicon.png"
        type="image/x-icon">

</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NIM: <?= $mhs[1]; ?></li>
            <li>Email: <?= $mhs[2]; ?></li>
            <li>Jurusan: <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>