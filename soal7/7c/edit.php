<?php
include 'inc/config.php';
if ($_POST['id']) {
	$id = $_POST['id'];
	$name = $_POST['nama'];
	$work = $_POST['pekerjaan'];
	$salary = $_POST['gaji'];
	$query = "UPDATE name SET name.nama = '$name', name.id_work = '$work', name.id_salary = '$salary' WHERE name.id = '$id'";
	if (mysqli_query($conn, $query)) {
		header("location:index.php");
	} else {
		echo "Gagal nih";
	}
} else {
	header("location:index.php");
}
