<?php
// Associative Array (Data Dosen)
$data_dosen = [
    "name" => "Ir. ABADI NUGROMO, S.Kom., M.Kom.",
    "nidn" => "1104129082",
    "matkul" => "Pemrograman Web"
];

echo "Dosen Pengampu: ". $data_dosen["name"] . "<br><br>";

// Indexed Array (Daftar Teman Sekelas)
$teman_sekelas = [
    "Hanif", 
    "Nopal", 
    "Sopyan",
    "Nopal",
    "Agus",
    "Prass"
    // Tambahkan nama teman lainnya
];

echo "Daftar Teman Sekelas:<br>";
foreach ($teman_sekelas as $teman) {
    echo "- " . $teman . "<br>";
}
?>