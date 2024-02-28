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
				<td>Nama Depan</td>
				<td><input type="text" name="nama_depan"></td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td><input type="text" name="nama_belakang"></td>
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td><input type="text" name="kewarganegaraan"></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>