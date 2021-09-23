<?php

$tabungan = 150000;
$bunga = 12.5; //dalam persen
$waktu = 1; //dalam tahun

echo "Tabungan Awal = Rp. $tabungan <br/>";
echo "Bunga Setahum = $bunga% <br/>";

// menghitung bunga setahun bunga = waktu * bunga/100% * tabungan
$bungaSetahun = $waktu * $bunga / 100 * $tabungan;

$totalTabungan = $bungaSetahun + $tabungan;
echo "Total Tabungan Setahun = $totalTabungan <br/>";
echo "Jawaban : Rp. $totalTabungan";