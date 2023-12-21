<?php
// $angka_1 = 100;
// $angka_2 = 75;

// echo ("Angka Pertama : $angka_1 <br>");
// echo ("Angka kedua : $angka_2");

// $kali = $angka_1 * $angka_2;
// echo "<br>";
// echo ("HAsil Kali : $kali");

// $tambah = $angka_1 + $angka_2;
// echo "<br>";
// echo ("HAsil Tambah : $tambah");

// $kurang = $angka_1 - $angka_2;
// echo "<br>";
// echo ("HAsil Kurang : $kurang");

// $bagi = $angka_1 / $angka_2;
// echo "<br>";
// echo ("HAsil Bagi : $bagi");
// echo "<br>";
// echo "<br>";




// SOAL NO.1
function hitungWaktu($tenagaKerjaAwal, $waktuAwal, $tenagaKerjaBaru) {
    // Menghitung proporsi waktu terhadap jumlah tenaga kerja
    $waktuBaru = ($waktuAwal * $tenagaKerjaAwal) / $tenagaKerjaBaru;
    return $waktuBaru;
}
$tenagaKerjaAwal = 12;
$waktuAwal = 36;
$tenagaKerjaBaru = 24;
$waktuBaru = hitungWaktu($tenagaKerjaAwal, $waktuAwal, $tenagaKerjaBaru);
echo "1. Waktu yang diperlukan dengan 24 tenaga kerja: " . $waktuBaru . " hari";
echo "<br>";
echo "<br>";




// SOAL NO.2
function hitungPersentaseKeuntungan($hargaBeli, $hargaJual) {
    $keuntungan = $hargaJual - $hargaBeli;
    $persentaseKeuntungan = ($keuntungan / $hargaBeli) * 100;
    return $persentaseKeuntungan;
}
$hargaBeli = 50000; // Harga beli boneka
$hargaJual = 80000; // Harga jual boneka
$persentaseKeuntungan = hitungPersentaseKeuntungan($hargaBeli, $hargaJual);
echo "2. Persentase keuntungan Putri: " . $persentaseKeuntungan . "%";
echo "<br>";
echo "<br>";




// SOAL NO.3
// Jarak antara kota A – Z 360 km. Jika ditempuh dengan sepeda motor berkecepatan 90 km/jam maka lama perjalanan… (Terapkan jawaban dalam pemrograman PHP)

// Deklarasi variabel
$jarak = 360; // Jarak dalam kilometer
$kecepatan = 90; // Kecepatan dalam km/jam
// Menghitung lama perjalanan
$lama_perjalanan = $jarak / $kecepatan;
echo "3. Lama perjalanan dari kota A ke Z adalah: " . $lama_perjalanan . " jam";
echo "<br>";
echo "<br>";



// SOAL NO.4
// Defan menabung di Bank Rp. 150.000. Bunga 1 tahunnya adalah 12,5 %. Maka jumlah tabungan Defan setelah 1 tahun adalah… (Terapkan jawaban dalam pemrograman PHP)
// Deklarasi variabel
$tabungan_awal = 150000; // Jumlah tabungan awal dalam Rupiah
$bunga = 12.5; // Bunga dalam persentase per tahun

// Menghitung jumlah tabungan setelah 1 tahun
$jumlah_tabungan = $tabungan_awal + ($tabungan_awal * ($bunga / 100));
echo "4. Jumlah tabungan Defan setelah 1 tahun adalah: Rp " . number_format($jumlah_tabungan, 2, ',', '.');
echo "<br>";
echo "<br>";


// SOAL NO.5 
// Seorang petani membeli beberapa ekor anak kambing dengan harga Rp. 8.000,- , Dia jual dengan harga Rp. 7.500,- dan mendapat keuntungan 300 rupiah untuk tiap ekor anak kambing.
// Berapa ekor anak kambing yang ia beli ? (Terapkan jawaban dalam pemrograman PHP)

// Deklarasi variabel
$harga_beli_per_ekor = 8000; // Harga beli per ekor dalam Rupiah
$harga_jual_per_ekor = 7500; // Harga jual per ekor dalam Rupiah
$keuntungan_per_ekor = 300; // Keuntungan per ekor dalam Rupiah
// Perhitungan
// Keuntungan per ekor adalah selisih antara harga jual dan harga beli per ekor
$keuntungan_per_ekor = $harga_jual_per_ekor - $harga_beli_per_ekor;
// Jumlah ekor anak kambing yang dibeli bisa dihitung dengan membagi total keuntungan dengan keuntungan per ekor
$jumlah_ekor = $keuntungan_per_ekor / $keuntungan_per_ekor;
echo "5. Jumlah ekor anak kambing yang dibeli adalah: " . $jumlah_ekor;
echo "<br>";
echo "<br>";



// SOAL NO.6 
// Suatu pintu air di suatu tempat mempunyai 523 cabang saluran, dalam satu minggu terpakai 8891 liter air. 
// Berapa liter air rata-rata yang dipakai oleh tiap-tiap keluarga dalam waktu itu ? (Terapkan jawaban dalam pemrograman PHP)
// Deklarasi variabel
$jumlah_cabang_saluran = 523; // Jumlah cabang saluran pintu air
$total_air_terpakai = 8891; // Total liter air terpakai dalam satu minggu
// Menghitung rata-rata liter air yang dipakai oleh tiap keluarga
$rata_rata_per_keluarga = $total_air_terpakai / $jumlah_cabang_saluran;
echo "6. Rata-rata liter air yang dipakai oleh tiap keluarga dalam seminggu adalah: " . $rata_rata_per_keluarga . " liter";














?>