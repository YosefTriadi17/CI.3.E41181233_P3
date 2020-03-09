<!DOCTYPE html>
<html>
<head>
	<title>Membuat login dengan codeigniter | www.malasngoding.com</title> <!-- judul halaman -->
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2> <!-- tampilkan dat6a nama ambil dari session nama -->
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a> <!-- link untuk logout -->
</body>
</html>