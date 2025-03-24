<!-- cara membuat array  -->
<?php $hari = array("senin", "selasa", "rabu",);
$bulan = ["januari", "februari", "maret"];
$myAraay = ['ali', 18, true];

//mencetak Array
// menampilkan semua elemen array gunsksn var_dump() atau print_r()

var_dump($hari);
echo"<br>";
print_r($bulan);
echo "<br>";

// gunakan echo jika ingin mencetak satu elemen array lalu masukan nomor indexnya
echo $hari[2];
echo "<br>";
echo $myAraay[0];
echo "<br>";
echo "<hr>";

// menambahkan elemen baru pada array
// gunakan [] untuk menambahkan elemen baru pada array
$hari[] = "kamis";
$hari[] = "jumat";
$bulan[] = "april";
print_r($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";
?>