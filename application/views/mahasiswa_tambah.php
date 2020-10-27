<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>
	<h1>Tambah mahasiswa</h1>
	<a href="<?= site_url('mahasiswa') ?>">kembali</a>
	<hr>
	<form>
		<h5>Nim</h5>
		<input type="number" name="nim"> <br>

		<h5>Nama Mahasiswa</h5>
		<input type="text" name="nama_mahasiswa"><br><br>

		<input type="submit" name="submit" value="Simpan">
	</form>

</body>
</html>