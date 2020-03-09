<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan CodeIgniter | www.malasngoding.com</title> <!-- judul halaman -->
</head>
<body>
	<h1>Membuat Login Dengan CodeIgniter <br/> www.malasngoding.com</h1>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">	<!-- form action -->	
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td> <!-- input text username -->
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td><!-- input password -->
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td><!-- tombol login type submit -->
			</tr>
		</table>
	</form>
</body>
</html>