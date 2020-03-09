<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title> <!-- judul halaman -->
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?> <!-- ubah variabel user ke u -->
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post"> <!-- form action -->
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>"> <!-- data id database type hidden -->
					<input type="text" name="nama" value="<?php echo $u->nama ?>"> <!-- data nama database type text -->
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td> <!-- data alamat database -->
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td> <!-- data pekerjaan database -->
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td> <!-- tombol simpan type submit -->
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>