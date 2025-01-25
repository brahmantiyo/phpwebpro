<?php
echo "<h1>Contoh Ternary operator</h1>";
$gender = "tes";
echo $gender == "laki-laki" ? "Laki-laki" : "Perempuan";
echo "<br>";

if ($gender == "laki-laki") {
    echo "Laki-laki";
} else {
    echo "Perempuan"; 
}

echo "<hr>";
$waktu = 20;
echo $waktu <= 18 ? "Siang Hari" : "Malam Hari";

echo "<hr>";
if ($waktu <= 18) {
    echo "Siang Hari";
} else {
    echo "Malam Hari";
}