<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
	die("Koneksi Gagal : ". mysqli_connect_error());
}
$sql = "INSERT INTO liga (kode, negara, champion) VALUES ('Jer','Jerman','4')";

if (mysqli_query($conn, $sql)) {
	echo "Catatan Sukses Terbuat";
} else {
	echo "Error : ". $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>