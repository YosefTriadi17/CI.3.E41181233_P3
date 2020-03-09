	<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title> <!-- judul halaman -->
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){  //ubah variabel user ke u
		?>
		<tr>
			<td><?php echo $no++ ?></td> <!-- Nomor looping -->
			<td><?php echo $u->nama ?></td> <!-- tampilkan data nama dari database -->
			<td><?php echo $u->alamat ?></td> <!-- tampilkan data alamat dari database -->
			<td><?php echo $u->pekerjaan ?></td> <!-- tampilkan data pekerjaan dari database -->
			<td>
			    <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?> <!-- tombol edit -->
                <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?> <!-- tombol hapus -->
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>