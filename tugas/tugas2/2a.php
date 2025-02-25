<?php
// Mendeklarasikan variabel
$namaDepan = "Ali ";
$namaBelakang = "Fauzi JR";
// Menampilkan deretan angka dari 100 sampai 1
for ($i = 100; $i >= 1; $i--) {
    // Memeriksa angka jika habis dibagi 3 dan 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $namaDepan . " " . $namaBelakang . "<br>";
    } 
    // Memeriksa angka jika habis dibagi 3
    elseif ($i % 3 == 0) {
        echo $namaDepan . "<br>";
    } 
    // Memeriksa angka jika habis dibagi 5
    elseif ($i % 5 == 0) {
        echo $namaBelakang . "<br>";
    } 
    // Jika tidak memenuhi syarat, hanya tampilkan angkanya
    else {
        echo $i . "<br>";
    }
}
?>
