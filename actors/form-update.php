<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM actors WHERE id_actor=$id";
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
				<td><input type="hidden" name="id_actor" value="<?php echo $data['id_actor'] ?>" /></td>
			</tr>
			<tr>
				<td>Nama Depan</td>
				<td><input type="text" name="nama_depan" value="<?php echo $data['nama_depan'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td><input type="text" name="nama_belakang" value="<?php echo $data['nama_belakang'] ?>"></td>
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td><input type="text" name="kewarganegaraan" value="<?php echo $data['kewarganegaraan'] ?>"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>