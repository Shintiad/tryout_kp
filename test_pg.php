<?php
$host = "localhost";
$port = "5432";
$dbname = "tryout";
$user = "postgres";
$password = "postgres"; // ganti dengan password PostgreSQL Anda

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
$conn = pg_connect($connection_string);

if($conn) {
    echo "Koneksi ke PostgreSQL berhasil";
} else {
    echo "Koneksi gagal: " . pg_last_error();
}
?>