<?php
// mencetak array dengan menggunakan looping
$binatang = ['🦢', '🦆', '🦉', '🦅', '🦁', '🦅', '🦁'];
$makanan  = ['🍜', '🍚', '🍛', '🍖', '🥩'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>mencetak binatang </title>
</head>

<body>
    <h1>Daftar Binatang</h1>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
            <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>Daftar Binatang</h2>
    <ul>
        <?php for ($i = 0; $i < count($makanan); $i++) { ?>
            <li><?php echo $makanan[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>daftar binatang baru</h2>
    <?php
    $binatang[] = '🐍';
    $binatang[] = '🐢';
    ?>
    <ul>
        <?php foreach ($binatang as $b) : ?>
            <li><?= $b; ?></li>
        <?php endforeach; ?>

    </ul>
    <h2>daftar makanan baru</h2>
    $maknanan[] = '🍑';
    $makanan[] = '🍌';
    ?>
    <ul>
        <?php foreach ($makanan as $m) : ?>
            <li><?= $m; ?></li>
        <?php endforeach; ?>

    </ul>
</body>