<!DOCTYPE html>
<html>
<head>
    <title>Daftar Perangkat Keras Komputer</title>
</head>
<body>

<h2>Macam-macam perangkat keras komputer</h2>
<ol>
<?php

$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Cooller", "VGA Card", "SSD"];

$nomor = 1;
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
?>
</ol>

<h2>Macam-macam perangkat keras komputer baru</h2>
<ol>
<?php

array_push($hardware, "Card Reader", "Modem");

sort($hardware);

$nomor = 1;
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
?>
</ol>

</body>
</html>