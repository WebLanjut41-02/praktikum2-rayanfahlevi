<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form method="post" action="<?php echo base_url() ; ?>prak/aksi_login">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="username"></td>
		</tr>
		<tr>
			<td>NIP</td>
			<td><input type="password" name="nip" placeholder="password"></td>
		</tr>
		<tr>
			<td colspan="2"><button type="submit">LOGIN</button></td>
		</tr>
		</form>
	</table>
</body>
</html>
<?php 


 ?>