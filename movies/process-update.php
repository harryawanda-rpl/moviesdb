<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id_movie'];
	$judul = $_POST['judul'];
	$tahun_rilis = $_POST['tahun_rilis'];
	$rating = $_POST['rating'];
	$durasi = $_POST['durasi'];

	$sql = "UPDATE movies SET judul='$judul', tahun_rilis='$tahun_rilis',
	rating='$rating', durasi='$durasi' WHERE id_movie=$id";
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