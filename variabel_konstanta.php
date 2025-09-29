<?php
// Bagian 1: Operasi Aritmatika
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br>";

// Bagian 2: Tipe Data Boolean
$benar = true;
$salah = false;
echo "Variabel benar: " . (int)$benar . ", Variabel salah: " . (int)$salah . "<br>";

// Bagian 3: Konstanta
define("NAMA_SITUS", "Websiteku.com");
define("TAHUN_PENDIRIAN", 2023);
echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>