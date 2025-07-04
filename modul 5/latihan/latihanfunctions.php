<?php
// Fungsi baru untuk menyapa
function sapa($nama, $waktu) {
    $waktu = strtolower($waktu); // Konversi ke lowercase untuk konsistensi
    
    // Daftar waktu yang valid
    $waktu_valid = ['pagi', 'siang', 'sore', 'malam'];
    
    if (in_array($waktu, $waktu_valid)) {
        echo "Selamat $waktu, $nama!";
    } else {
        echo "Halo, $nama! (Waktu tidak dikenali)";
    }
}

// Contoh penggunaan fungsi sapa()
sapa("Budi", "Pagi");  // Output: Selamat pagi, Budi!
echo "<br>";
sapa("Budi", "Siang");  // Output: Selamat siang, Budi!
echo "<br>";
sapa("Budi", "Malam");  // Output: Selamat malam, Budi!
echo "<br>";
sapa("Budi", "Sore");  // Output: Selamat sore, Budi!
?>