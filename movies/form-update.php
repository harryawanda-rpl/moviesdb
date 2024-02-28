<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM movies WHERE id_movie=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>Update Data</h3>
	<form action="process-update.php" method="POST">
		<table border="0">
			<tr>
				<td></td>
				<td><input type="hidden" name="id_movie" value="<?php echo $data['id_movie'] ?>" /></td>
			</tr>
			<tr>
				<td>Judul Film</td>
				<td><input type="text" name="judul" value="<?php echo $data['judul'] ?>"></td>
			</tr>
			<tr>
				<td>Tahun Rilis</td>
				<td><input type="text" name="tahun_rilis" value="<?php echo $data['tahun_rilis'] ?>"></td>
			</tr>
			<tr>
				<td>Rating</td>
				<td><input type="text" name="rating" value="<?php echo $data['rating'] ?>"></td>
			</tr>
			<tr>
				<td>Durasi</td>
				<td><input type="text" name="durasi" value="<?php echo $data['durasi'] ?>"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>