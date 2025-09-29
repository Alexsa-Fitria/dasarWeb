<?php
// Langkah 2: Operator Aritmatika
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Tambahan untuk menampilkan hasil Aritmatika (Soal 3.1)
echo "<h3>Operator Aritmatika</h3>";
echo "Nilai a: $a, Nilai b: $b <br>";
echo "Hasil Tambah ($a + $b): $hasilTambah <br>";
echo "Hasil Kurang ($a - $b): $hasilKurang <br>";
echo "Hasil Kali ($a * $b): $hasilKali <br>";
echo "Hasil Bagi ($a / $b): $hasilBagi <br>";
echo "Sisa Bagi ($a % $b): $sisaBagi <br>";
echo "Pangkat ($a ** $b): $pangkat <br>";

// Langkah 5: Operator Perbandingan
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Tambahan untuk menampilkan hasil Perbandingan (Soal 3.2)
echo "<h3>Operator Perbandingan</h3>";
echo "Hasil Sama ($a == $b): " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Hasil Tidak Sama ($a != $b): " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Kecil ($a < $b): " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Besar ($a > $b): " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Kecil Sama ($a <= $b): " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Besar Sama ($a >= $b): " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

// Langkah 7: Operator Logika
$hasilAnd = $a && $b; // Akan true karena 10 dan 5 dianggap true (non-zero)
$hasilOr = $a || $b;  // Akan true
$hasilNotA = !$a;     // Akan false
$hasilNotB = !$b;     // Akan false

// Tambahan untuk menampilkan hasil Logika (Soal 3.3)
echo "<h3>Operator Logika</h3>";
echo "Hasil AND (TIDAK AKURAT jika variabel bukan boolean, tapi 10 && 5 diinterpretasikan sebagai true): " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR (10 || 5): " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A (!10): " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B (!5): " . ($hasilNotB ? 'true' : 'false') . "<br>";

// Langkah 11: Operator Penugasan (Assignment)
// Catatan: $a akan berubah nilainya setelah setiap operasi
$a_awal = 10;
$b_nilai = 5;
$a = $a_awal; // Reset $a ke nilai awal

echo "<h3>Operator Penugasan (Assignment)</h3>";
echo "Nilai Awal a: $a_awal, Nilai b: $b_nilai <br>";

$a += $b_nilai; // $a = $a + $b
echo "\$a += \$b (Sekarang a = $a): $a <br>";

$a -= $b_nilai; // $a = $a - $b
echo "\$a -= \$b (Sekarang a = $a): $a <br>";

$a *= $b_nilai; // $a = $a * $b
echo "\$a *= \$b (Sekarang a = $a): $a <br>";

$a /= $b_nilai; // $a = $a / $b
echo "\$a /= \$b (Sekarang a = $a): $a <br>";

$a %= $b_nilai; // $a = $a % $b
echo "\$a %= \$b (Sekarang a = $a): $a <br>";

// Langkah 14: Operator Identitas
// Reset $a untuk perbandingan identitas
$a = 10;
$b = "10"; // Menggunakan string untuk menunjukkan perbedaan tipe data
$c = 5;

$hasilIdentik = $a === $b; // False, karena tipe data berbeda (integer vs string)
$hasilTidakIdentik = $a !== $c; // True, karena nilai dan tipe data berbeda

// Tambahan untuk menampilkan hasil Identitas (Soal 3.4)
echo "<h3>Operator Identitas (Tipe Data & Nilai)</h3>";
echo "Nilai a: $a (integer), Nilai b: \"10\" (string), Nilai c: $c (integer) <br>";
echo "Hasil Identik (\$a === \$b) : " . ($hasilIdentik ? 'true' : 'false') . " (False, karena tipe data berbeda)<br>";
echo "Hasil Tidak Identik (\$a !== \$c) : " . ($hasilTidakIdentik ? 'true' : 'false') . " (True, karena nilai berbeda)<br>";

// Langkah 16 & 17: Soal Cerita Persentase Kursi Kosong
$totalKursi = 45;
$kursiTerisi = 28;

// 1. Hitung jumlah kursi kosong
$kursiKosong = $totalKursi - $kursiTerisi;

// 2. Hitung persentase kursi kosong
// Rumus: (Kursi Kosong / Total Kursi) * 100
$persenKosong = ($kursiKosong / $totalKursi) * 100;

// Tampilkan hasil
echo "<h3>Soal Cerita: Persentase Kursi Kosong</h3>";
echo "Total Kursi: $totalKursi <br>";
echo "Kursi Terisi: $kursiTerisi <br>";
echo "Kursi Kosong: $kursiKosong <br>";
echo "Persentase Kursi Kosong: " . number_format($persenKosong, 2) . "% <br>";
// Menggunakan number_format() untuk membatasi angka desimal (2 digit)
?>