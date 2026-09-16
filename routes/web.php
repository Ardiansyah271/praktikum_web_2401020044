<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Pertemuan 2 (Sesuai Modul)
Route::get('/latihan-php', function () {
    // 1. Variabel Data Diri
    $nama = "M. ARIEF SETIAWAN"; // Ganti dengan nama kamu
    $nim = "2401020044";         // Ganti dengan NIM kamu

    // 2. Array Tunggal Nilai Mata Kuliah
    $nilaiMatkul = [85, 78, 90, 88, 75];

    // 3. Menghitung Rata-rata Nilai
    $totalNilai = array_sum($nilaiMatkul);
    $rataRata = $totalNilai / count($nilaiMatkul);

    // 4. Percabangan (If-Else) Status Kelulusan
    if ($rataRata >= 75) {
        $status = "LULUS";
    } else {
        $status = "TIDAK LULUS";
    }

    // 5. Mengirim Data ke View
    return view('latihan-php', compact('nama', 'nim', 'nilaiMatkul', 'rataRata', 'status'));
});