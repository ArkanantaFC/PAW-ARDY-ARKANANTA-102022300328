<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
// host
$host = "localhost";

//username
$username = "root";

//password
$pass = "";

//database name
$db = "db_modul2";

//port
$port = 3306;

// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database
$conn = mysqli_connect($host, $username, $pass, $db, $port);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>