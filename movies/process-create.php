<?php

include("config.php");

if(isset($_POST['create'])){

	$judul = $_POST['judul'];
	$tahun_rilis = $_POST['tahun_rilis'];
	$rating = $_POST['rating'];
	$durasi = $_POST['durasi'];

	$sql = "INSERT INTO movies (judul, tahun_rilis, rating, durasi)
	VALUE ('$judul', '$tahun_rilis', $rating ,'$durasi')";

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