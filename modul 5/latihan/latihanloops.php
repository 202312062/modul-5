<?php
// Array contoh (daftar buah-buahan)
$buah = ["Apel", "Mangga", "Jeruk", "Anggur", "Pisang"];

// Menampilkan semua elemen array menggunakan foreach
echo "Daftar Buah-buahan:<br>";
foreach ($buah as $nama_buah) {
    echo "- $nama_buah<br>";
}

// Contoh lain dengan array asosiatif (nilai mahasiswa)
$nilai = [
    "Matematika" => 85,
    "Fisika" => 78,
    "Kimia" => 90,
    "Biologi" => 82
];

echo "<br>Nilai Ujian:<br>";
foreach ($nilai as $mata_kuliah => $skor) {
    echo "$mata_kuliah: $skor<br>";
}
?>