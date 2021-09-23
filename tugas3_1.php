<?php

$jarak = 360; //kilometer
$kecepatan = 90; //km/jam

echo "Jarak Kota A - Z = $jarak Km <br />";
echo "Kecepatan Motor = $kecepatan km/jam <br/>";

// rumus
$waktu = $jarak / $kecepatan;
echo "Waktu Tempuh = $waktu jam <br/>";

// mencari menit 1 jam = 60 menit
$menit = $waktu * 60;
echo "Jawaban = $menit menit";