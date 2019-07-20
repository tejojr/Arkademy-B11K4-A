<?php
include 'inc/config.php';

if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$pekerjaan = $_POST['work'];
	$gaji = $_POST['salary'];
	$query = "INSERT INTO name VALUES('', '$nama', $pekerjaan, $gaji)";
	if (mysqli_query($conn, $query)) {
		header("location:index.php");
	} else {
		echo "Gagal nih";
	}
} else {
	die("Akses dilarang...");
}
