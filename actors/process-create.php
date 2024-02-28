<?php

include("config.php");

if(isset($_POST['create'])){

	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$kewarganegaraan = $_POST['kewarganegaraan'];

	$sql = "INSERT INTO actors (nama_depan, nama_belakang, kewarganegaraan)
	VALUE ('$nama_depan', '$nama_belakang', '$kewarganegaraan')";

	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}

?>