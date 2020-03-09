<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title> <!-- judul halaman -->
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post"> <!-- form action -->
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td> <!-- input text nama -->
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td> <!-- input text alamat -->
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td> <!-- input text pekerjaan -->
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td> <!-- tombol tambah type submit -->
			</tr>
		</table>
	</form>	
</body>
</html>