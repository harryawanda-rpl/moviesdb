<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id_actor'];
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$kewarganegaraan = $_POST['kewarganegaraan'];

	$sql = "UPDATE actors SET nama_depan='$nama_depan', nama_belakang='$nama_belakang',
	kewarganegaraan='$kewarganegaraan' WHERE id_actor=$id";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: index.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
    die("Akses dilarang...");
}

?>