<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo base_url(); ?>prak/prosespaket">
		<table>
			<tr>
				<td>Tanggal datang</td>
				<td><input type="date" name="tgl_datang"></td>
			</tr>
			<tr>
				<td>sasaran</td>
				<td><input type="text" name="sasaran"></td>
			</tr>
			<tr>
				<td>penerima</td>
				<td>
					<select name="penerima">
						<option value="volvo">Andri</option>
						<option value="saab">Dadang</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Isi paket</td>
				<td><textarea name="isi" rows="3" cols="25"></textarea></td>
			</tr>
			<tr>
				<td>tanggal ambil</td>
				<td><input type="date" name="tgl_ambil"></td>
			</tr>
			<tr>
				<td><button type="submit">Input</button></td>
			</tr>
		</table>
	</form>
</body>
</html>