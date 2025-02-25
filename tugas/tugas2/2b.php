<?php
// Menentukan jumlah baris yang ingin ditampilkan
$jb = 10;

// Menggunakan looping untuk mencetak angka
for ($i = 1; $i <= $jb; $i++) {
    // Mencetak angka 
    // dalam satu baris
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    // Pindah ke baris berikutnya
    echo "<br>";
}
?>
