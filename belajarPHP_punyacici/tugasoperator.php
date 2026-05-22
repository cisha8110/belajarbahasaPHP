<?php
// tugas 1

//lengkapi script untuk menampilkan hsil bagi bilangan
//100 dengan 3 beserta sisanya 

$pembilang = 100;
$penyebut = 3;
$hasil = $pembilang / $penyebut;
$sisa = $pembilang % $penyebut;

echo "Hasil bagi 100 dengan 3: " . $hasil . "<br>";
echo "Sisa pembagian 100 dengan 3: " . $sisa . "<br>";

// tugas 2
//ada seorang nasabah di bank x dengan saldo awal 1.000.000
//bank x menerapkan bunga 3% perbulan saldo awal tabungan, hitunglah saldo nasabah setelah 11 bulan

$saldo_awal = 1000000;
$bunga = 0.03;
$bulan = 11;
$saldo_akhir = $saldo_awal + $saldo_awal * $bulan * $bunga;

echo "saldo nasabah setelah " . $bulan . " bulan: RP." . $saldo_akhir . "<br>";
?>