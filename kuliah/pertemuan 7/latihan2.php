<?php
// $_GET
// menggunakna super global variabel $_GET
// lewat url

// isset = mengecek apakah variabel sudah di buat atau belum

// if (!isset($_GET['nama'])){
//   echo "tidak ada nama yang di kirimkan";
// else{
 // echo $_GET['nama'];
// }

// ternary
// untuk membuat if else menjadi rigkas
// echo "nama:" . (isset($_GET['nama'])) ? $_GET['nama'] : 'unknown';

// null coleescing operator
// untuk membuat isset lebih ringkas
// ??
// echo "NAMA :" . ($_GET['nama'] ?? 'unknown');

echo "NAMA :" . ($_GET['nama'] ?? 'unknown');
echo "<br>";
echo "NIM :" . ($_GET['nim'] ?? 'unknown');
echo "<br>";
