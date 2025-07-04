<?php
$ukuran_baju = "M"; // Anda bisa mengubah nilai ini menjadi "S", "L", atau "XL"

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran Small - Cocok untuk badan kecil";
        break;
    case "M":
        echo "Ukuran Medium - Ukuran standar kebanyakan orang";
        break;
    case "L":
        echo "Ukuran Large - Untuk postur tubuh besar";
        break;
    case "XL":
        echo "Ukuran Extra Large - Untuk postur tubuh sangat besar";
        break;
    default:
        echo "Maaf, ukuran yang Anda pilih tidak tersedia";
}
?>