<?php
// membuat array asosiatif (terdiri atas key dan value)
$mhs = [
    'nama' => 'Puspita', 
    'Nim' => '011', 
    'Prodi' => 'SI',
    'ips' => [
        1 => 3.40,
        2 => 3.70,
        3 => 4.0,
    ],
];

// panggil array asosiatif
echo "Nama: " . $mhs['nama'];
echo "<br> IPS semester 1: " . $mhs['ips']['1'];
echo "<br> IPS semester 2: " . $mhs['ips']['2'];
echo "<br> IPS semester 3: " . $mhs['ips']['3'];