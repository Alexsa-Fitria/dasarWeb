<?php
// Langkah 2 & 4.1: Struktur Kontrol IF-ELSEIF-ELSE

$nilaiNumerik = 92;

echo "Nilai Siswa: $nilaiNumerik <br>";

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br>";

//---------------------------------------------------------

// Langkah 6 & 8 (Soal 4.2): Struktur Kontrol WHILE

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Jarak target: $jarakTarget km <br>";
echo "Peningkatan harian: $peningkatanHarian km <br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak $jarakTarget kilometer.";
echo "<br>";

//---------------------------------------------------------

// Langkah 10 & 12 (Soal 4.3): Struktur Kontrol FOR

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Total lahan: $jumlahLahan <br>";
echo "Buah yang didapatkan per lahan: " . ($tanamanPerLahan * $buahPerTanaman) . " <br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br>";

//---------------------------------------------------------

// Langkah 14 & 16 (Soal 4.4): Struktur Kontrol FOREACH (Menghitung Total Skor)

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Daftar Skor: " . implode(", ", $skorUjian) . "<br>";
echo "Total skor ujian adalah: $totalSkor";
echo "<br>";

//---------------------------------------------------------

// Langkah 18 & 20 (Soal 4.5): Struktur Kontrol FOREACH dan IF dengan CONTINUE

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "Daftar Nilai Siswa: " . implode(", ", $nilaiSiswa) . "<br>";

foreach ($nilaiSiswa as $nilai) {
    echo "Nilai: $nilai. ";
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus)<br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus)<br>";
}
echo "<br>";

//---------------------------------------------------------

// Langkah 22 (Soal 4.6): Soal Cerita - Menghitung Rata-rata setelah Mengabaikan Nilai Tertinggi dan Terendah

$nilaiSiswaSoal = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Salin array untuk dimanipulasi
$nilaiSiswaHitung = $nilaiSiswaSoal;

// Mengurutkan array dari kecil ke besar
sort($nilaiSiswaHitung);

// Menghilangkan 2 nilai tertinggi (terakhir) dan 2 nilai terendah (awal)
// Menghilangkan 2 terendah (index 0 dan 1)
array_shift($nilaiSiswaHitung);
array_shift($nilaiSiswaHitung);

// Menghilangkan 2 tertinggi (index terakhir-1 dan terakhir)
array_pop($nilaiSiswaHitung);
array_pop($nilaiSiswaHitung);

$totalNilai = array_sum($nilaiSiswaHitung);
$jumlahSiswaValid = count($nilaiSiswaHitung);
$rataRata = $totalNilai / $jumlahSiswaValid;

echo "Nilai Awal (10 Siswa): " . implode(", ", $nilaiSiswaSoal) . "<br>";
echo "Nilai yang dihitung (setelah mengabaikan 2 terendah & 2 tertinggi): " . implode(", ", $nilaiSiswaHitung) . " ($jumlahSiswaValid siswa)<br>";
echo "Total nilai yang dihitung: $totalNilai <br>";
echo "Rata-rata nilai (tanpa 2 terendah & 2 tertinggi): " . number_format($rataRata, 2);
echo "<br>";

//---------------------------------------------------------

// Langkah 24 (Soal 4.7): Soal Cerita - Menghitung Diskon

$hargaProduk = 120000;
$batasDiskon = 100000;
$persenDiskon = 0.20; // 20%

$diskon = 0;
$hargaBayar = 0;

if ($hargaProduk > $batasDiskon) {
    $diskon = $hargaProduk * $persenDiskon;
}

$hargaBayar = $hargaProduk - $diskon;

echo "Harga Produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Batas Diskon: Rp " . number_format($batasDiskon, 0, ',', '.') . "<br>";
echo "Persentase Diskon: 20% <br>";
echo "Total Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Uang yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($hargaBayar, 0, ',', '.');
echo "<br>";

// Langkah 25 & 26 (Soal 4.8): Soal Cerita - Operator Ternary


$skorPemain = 650;
$batasHadiah = 500;

// Menggunakan Operator Ternary untuk menentukan hadiah
// Sintaks: (kondisi) ? nilai_jika_true : nilai_jika_false
$hadiahTambahan = ($skorPemain > $batasHadiah) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $skorPemain (poin).<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? ($hadiahTambahan)";
echo "<br>";

// Tambahkan contoh lain (misalnya skor di bawah batas)
$skorPemain2 = 480;
$hadiahTambahan2 = ($skorPemain2 > $batasHadiah) ? "YA" : "TIDAK";

echo "<br>--- Contoh Skor Lain ---<br>";
echo "Total skor pemain adalah: $skorPemain2 (poin).<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? ($hadiahTambahan2)";
echo "<br>";
?>