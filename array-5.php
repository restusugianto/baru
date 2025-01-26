<?php

// Array daftar ikan
$ikan = [
    ["nama" => "Lele", "jenis" => "Air Tawar", "harga" => 20000],
    ["nama" => "Gurame", "jenis" => "Air Tawar", "harga" => 50000],
    ["nama" => "Tuna", "jenis" => "Air Laut", "harga" => 80000],
    ["nama" => "Salmon", "jenis" => "Air Laut", "harga" => 120000]
];

// Menampilkan daftar ikan
echo "<h2>Daftar Ikan</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Jenis</th><th>Harga (IDR)</th></tr>";
foreach ($ikan as $item) {
    echo "<tr>";
    echo "<td>{$item['nama']}</td>";
    echo "<td>{$item['jenis']}</td>";
    echo "<td>" . number_format($item['harga'], 0, ',', '.') . "</td>";
    echo "</tr>";
}
echo "</table>";

?>