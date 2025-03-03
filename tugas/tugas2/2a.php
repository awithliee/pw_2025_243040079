<?php
//  variabel
$namaDepan = "Ali ";
$namaBelakang = "Fauzi JR";
//deretan angka dari 100 sampai 1
for ($i = 100; $i >= 1; $i--) {
    // angka habis dibagi 3 dan 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $namaDepan . " " . $namaBelakang . "<br>";
    } 
    //  angka habis dibagi 3
    elseif ($i % 3 == 0) {
        echo $namaDepan . "<br>";
    } 
    //  angka  habis dibagi 5
    elseif ($i % 5 == 0) {
        echo $namaBelakang . "<br>";
    } 
    else {
        echo $i . "<br>";
    }
}
?>
