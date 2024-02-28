<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>CREATE DATA</h3>
	<form action="process-create.php" method="POST">
		<table border="0">
			<tr>
				<td>Judul Film</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Tahun Rilis</td>
				<td><input type="text" name="tahun_rilis"></td>
			</tr>
			<tr>
				<td>Rating</td>
				<td><input type="text" name="rating"></td>
			</tr>
			<tr>
				<td>Durasi</td>
				<td><input type="text" name="durasi"></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>