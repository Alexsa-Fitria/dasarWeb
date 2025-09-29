<?php

//======================================================================
// 1. Array Satu Dimensi dan FOREACH dengan Kondisi (Soal 5.1)
//======================================================================

$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai; // Menambahkan nilai yang lulus ke array baru
    }
}

echo "Daftar nilai siswa: " . implode(', ', $nilaiSiswa) . "<br>";
echo "Daftar nilai siswa yang lulus (>= 70): " . implode(', ', $nilaiLulus);
echo "<br><hr>";

//======================================================================
// 2. Array Dua Dimensi dan FOREACH dengan Kondisi (Soal 5.2)
//======================================================================

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    // $karyawan[1] adalah tahun pengalaman
    if ($karyawan[1] > 5) {
        // $karyawan[0] adalah nama
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dan pengalaman (Tahun): " . json_encode($daftarKaryawan) . "<br>";
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);
echo "<br><hr>";

//======================================================================
// 3. Array Multidimensi Asosiatif dan Akses Spesifik (Soal 5.3)
//======================================================================

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah **$mataKuliah**: <br>";

// Akses spesifik ke array 'Fisika' menggunakan $daftarNilai[$mataKuliah]
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    // $nilai adalah array 2D ['Nama', Nilai]
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
echo "<br><hr>";

//======================================================================
// 4. Soal Cerita: Rata-rata Array Dua Dimensi (Soal 5.4)
//======================================================================

$nilaiMatematika = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$totalNilai = 0;
$jumlahSiswa = count($nilaiMatematika);

// 1. Hitung total nilai
foreach ($nilaiMatematika as $data) {
    $totalNilai += $data[1]; // $data[1] adalah nilai
}

// 2. Hitung rata-rata
$rataRata = $totalNilai / $jumlahSiswa;

echo "Daftar Nilai Matematika: <br>";
foreach ($nilaiMatematika as $data) {
    echo "- {$data[0]}: {$data[1]} <br>";
}

echo "<br>Rata-rata kelas: " . number_format($rataRata, 2) . "<br>";

echo "Daftar siswa yang mencapai nilai di atas rata-rata: <br>";

// 3. Cetak siswa yang nilainya di atas rata-rata
foreach ($nilaiMatematika as $data) {
    if ($data[1] > $rataRata) {
        echo "- {$data[0]} (Nilai: {$data[1]}) <br>";
    }
}
echo "<hr>";
?>