<?php
    echo ("Daftar Produk <br>");

    define("kopi", "Kopi");
    define("harga_kopi", 3000);

    define("susu", "Susu");
    define("harga_susu", 3000);

    define("gula", "Gula");
    define("harga_gula", 3000);

    define("beras", "beras");
    define("harga_beras", 3000);

    define("rokok", "Rokok");
    define("harga_rokok", 3000);

    $daftar_harga = array(
        "kopi" => harga_kopi,
        "susu" => harga_susu,
        "gula" => harga_gula,
        "rokok" => harga_rokok,
        "beras" => harga_beras
    );

    foreach ($daftar_harga as $daftar => $harga) {
        echo ("$daftar = $harga <br>");
    }

    echo "<br>";

    define ("laptop","Asus");
    define("harga_laptop", 3);

    define ("pc","Dell");
    define("harga_pc", 1);

    define ("proceccor","Core I7");
    define("harga_processor", 5);

    define ("hdd","Seagate 1tb");
    define("harga_hdd", 300);

    define ("ssd","Toshiba 1tb");
    define("harga_ssd", 500);

    $data_harga = array(
        "Asus" => harga_laptop,
        "Dell" => harga_pc,
        "Core I7" => harga_processor,
        "Seagate 1tb" => harga_hdd,
        "Toshiba 1tb" => harga_ssd
    );

    foreach ($data_harga as $data => $harga) {
        echo("- $data = $harga.jt <br>");
    }

  
    


























echo "<br>";


$harga_beli = 50000;

$harga_jual = 80000;

// Menghitung keuntungan
$keuntungan = $harga_jual - $harga_beli;

// Menghitung persentase keuntungan
$persentase_keuntungan = ($keuntungan / $harga_beli) * 100;

echo "Persentase keuntungan Putri adalah: " . number_format($persentase_keuntungan, 2) . "%";


    
















    




?>