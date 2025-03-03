<?php
// Pengulangan pada PHP
// latihan1.php
$i = 5;
while ($i >= 1) {
    echo "Hello world $i x<br>";
    $i = $i - 1; // kurangi 1 dari setiap pengulangan ($i--)
    // jika ingin kurangi 2 dari setiap pengulangan ($i-=2)
}

// JIKA INGIN MEMBUAT PERULANGAN BERURUTAN BERI VARIABEL DI SAMPING ECHO

// $i = 5;
// while ($i >= 1) {
//     echo "Hello world $i x<br>";
//     $i = $i - 1; // kurangi 1 dari setiap pengulangan ($i--)
// } // pengulangan mundur

echo "<hr>";
$x = 10;
echo $x;
echo "<br>";
echo $x++;
echo "<br>";    
echo ++$x;
echo "<hr>";

for ($i = 1; $i <= 10; $i++) {
    echo "Hello world <br>"; 
}
echo "<hr>";  
$i = 1;  
do {
    echo "Hello world $i kali <br>";
    $i++;
} while ($i <= 5);
echo "<hr>";


?>
