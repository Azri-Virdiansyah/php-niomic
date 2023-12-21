<?php
class mahasiswa{
    // public $nama;
    // public $umur;
    // public $tanggal_lahir;

    function get_nama(){ 
        return $this->nama;
    }
}

$mahasiswa_baru = new mahasiswa;
$mahasiswa_baru ->nama= "Azri";
$mahasiswa_baru ->umur= "18";
$mahasiswa_baru ->tanggal_lahir= "20 Maret 2005";
$mahasiswa_baru ->Status= "Lajang";

print_r($mahasiswa_baru);
echo "<br>";

class Person {
    private $nama;

    // Konstruktor untuk mengatur nama saat objek dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Fungsi untuk mendapatkan nama
    public function get_nama() {
        return $this->nama;
    }
}

// Membuat objek dari kelas Person
$orang = new Person("John Doe");

// Menggunakan fungsi get_nama() untuk mendapatkan nama
echo "Nama: " . $orang->get_nama(); // Output: Nama: John Doe


?>