<?php
echo "<h1>Contoh IF</h1>";
$hasil = "lulus";
if ($hasil == "lulus") {
    echo "Selamat Anda $hasil";
}

echo "<h1>Contoh IF dengan 2 pilihan</h1>";

if ($hasil == "lulus") {
    echo "Selamat Anda $hasil";
} else {
    echo "Maaf Anda $lulus";

}echo "<h1>Contoh IF dengan 3 pilihan</h1>";
# 60-100 Lulus
# 40-59 Belum Lulus
# <40 Tidak Lulus
$nilai = 30;
if ($nilai >= 60) {
    echo "Selamat Anda <b>Lulus</b> dengan Nilai $nilai,";
} elseif ($nilai >= 40) {
    echo "Maaf Anda <b>Belum Lulus</b>";
} else {
    echo "Maaf Anda <b>Tidak Lulus</b>";
}

echo "<h2>Batas Atas</h2>";
if ($nilai < 50) {
    echo "Maaf Anda <b>Tidak Lulus</b>. Nilai Anda $nilai";
} elseif ($nilai < 60) {
    echo "Maaf Anda <b>Remedial</b>. Nilai Anda $nilai";
} else {
    echo "Selamat Anda <b>Lulus</b>. Nilai Anda $nilai";
}

echo "<h2>Batas Atas & Bawah</h2>";
if ($nilai >=60 AND $nilai <=100) {
    echo "Selamat Anda <b>Lulus</b>. Nilai Anda $nilai";
} elseif ($nilai >=40 AND $nilai <=59) {
    echo "Maaf Anda <b>Remedial</b>. Nilai Anda $nilai";
} elseif ($nilai >= 0 AND $nilai <=39) {
    echo "Maaf Anda <b>Gagal!</b>. Nilai Anda $nilai";
} else {
    echo "Tidak ada kategori untuk nilai $nilai";
}