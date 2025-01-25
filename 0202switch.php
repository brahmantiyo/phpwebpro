<?php
$menu = "/";
switch ($menu) {
    case "/":
        echo "anda berada di halaman utama";
        break;
    case "/tentang":
        echo "anda berada di halaman about";
        break;
    case "/produk":
        echo "anda berada di halaman produk";
        break;
    case "/kontak":
        echo "anda berada di halaman contact";
        break;
    default:
        echo "halaman tidak ditemukan";
        break;
}