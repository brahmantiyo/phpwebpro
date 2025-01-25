<?php
//Operator
echo "<h1>Operator Aritmatika</h1>";
$a = 8;
$b = 16;
 
# aritmatika standar
echo "{$a} + {$b} = " . ($a + $b) . " <br>";

echo "{$a} - {$b} = " . ($a - $b) . " <br>";

echo "{$a} * {$b} = " . ($a * $b) . " <br>";

echo "{$a} / {$b} = " . ($a / $b) . " <br>";
 
# modulus
echo "{$a} % {$b} = " . ($a % $b) . " <br>";

# eksponensial
echo "{$a} ** {$b} = " . ($a ** $b) . " <br>";

# negasi
echo "-a = " . (-$a) . " <br>";

echo "<hr>";

echo "<h1>Operator Penugasan</h1>";
 
$nilaiMatematika = 8;
$rataRata = (10 + 7 + $nilaiMatematika) / 3;
 
$namaDepan = "Titho";
$namaBelakang = "{$namaDepan} Brahmantiyo";
 
$a = 5;
$a += 10;
echo var_dump($a) . "<br>";
 
$a -= 20;
echo var_dump($a) . "<br>";
 
$a *= 100;
echo var_dump($a) . "<br>";
 
$a /= 10;
echo var_dump($a) . "<br>";

echo "<hr>";
 
//Operator Perbandingan
echo "<h1>Operator Perbandingan</h1>";
 
$nilai = 90;
$lulus = $nilai > 80;
 
echo "{$nilai} > 80 = ";
var_dump($lulus);
echo "<br>";



//membandingkan dgn angka scr langsung
 
echo "3 >= 3 = ";
var_dump(3 >= 3);
echo "<br>";
 
echo "6 < 5 = ";
var_dump(6 < 5);
echo "<br>";
 
echo "'a' < 'b' = ";
var_dump('a' < 'b');
echo "<br>";
 
echo "'mnm' < 'jmj' = ";
var_dump('mnm' < 'jmj');
echo "<br>";
