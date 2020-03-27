<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
	die("Koneksi Gagal : ". mysqli_connect_error());
}

$sql = "CREATE DATABASE mydb";
if (mysqli_query($conn, $sql)){
	echo "Database Sukses Terbuat";
} else {
	echo "Pembuatan Database Error".mysqli_error($conn);
}

mysqli_close($conn);
?>