<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo base_url(); ?>prak/prosesdata">
		<table>
			<tr>
				<td>KTP</td>
				<td><input type="text" name="ktp"></td>
			</tr>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>unit</td>
				<td><input type="text" name="unit"></td>
			</tr>
			<tr>
				<td><button type="submit">Input</button></td>
			</tr>
		</table>
	</form>
</body>
</html>