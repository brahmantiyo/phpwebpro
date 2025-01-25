<?php
/* Aturan soal
81-100 = A
78-81 = A-
75-78 = B+
70-75 = B
65-70 = B-
60-65 = C+
55-60 = C
40-55 = D
0-40 = E
*******************/
$nilai = 35;
if ($nilai >= 81 AND $nilai <= 100) {
    echo "Nilai Anda $nilai, mendapat grade <b>A</b> Bobot <b>4</b>";
} elseif ($nilai >= 78 AND $nilai < 81) {
    echo "Nilai Anda $nilai, mendapat grade <b>A-</b> Bobot <b>3.7</b>";
} elseif ($nilai >= 75 AND $nilai < 78) {
    echo "Nilai Anda $nilai, mendapat grade <b>B+</b> Bobot <b>3.3</b>";
} elseif ($nilai >= 70 AND $nilai < 75) {
    echo "Nilai Anda $nilai, mendapat grade <b>B</b> Bobot <b>3</b>";
} elseif ($nilai >= 65 AND $nilai < 70) {
    echo "Nilai Anda $nilai, mendapat grade <b>B-</b> Bobot <b>2.7</b>";
} elseif ($nilai >= 60 AND $nilai < 65) {
    echo "Nilai Anda $nilai, mendapat grade <b>C+</b> Bobot <b>2.3</b>";
} elseif ($nilai >= 55 AND $nilai < 60) {
    echo "Nilai Anda $nilai, mendapat grade <b>C</b> Bobot <b>2</b>";
} elseif ($nilai >= 40 AND $nilai < 55) {
    echo "Nilai Anda $nilai, mendapat grade <b>D</b> Bobot <b>1</b>";
} elseif ($nilai >= 0 AND $nilai < 40) {
    echo "Nilai Anda $nilai, mendapat grade <b>E</b> Bobot <b>0</b>";
} else {
    echo "Tidak ada kategori nilai untuk $nilai";
}   