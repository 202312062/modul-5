<?php
// Variabel dengan berbagai tipe data
$judul_buku = "Pemrograman PHP";       // String
$jumlah_halaman = 300;                 // Integer
$harga = 125000.50;                    // Float
$stok_tersedia = true;                 // Boolean
$penerbit = null;                      // NULL
$penulis = array("Budi", "Ani");       // Array
$tanggal_terbit = new DateTime();      // Object

// Menampilkan informasi detail setiap variabel
echo "<pre>";
var_dump($judul_buku);
var_dump($jumlah_halaman);
var_dump($harga);
var_dump($stok_tersedia);
var_dump($penerbit);
var_dump($penulis);
var_dump($tanggal_terbit);
echo "</pre>";
?>