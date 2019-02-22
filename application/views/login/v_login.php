<?php $this->load->view('header'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			font-family: sans-serif;

		}
		table {
			margin: auto;
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<table>
		<form method="post" action="<?= base_url(); ?>baru/index">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" placeholder="password"></td>
			</tr>
			<tr>
				<td colspan="2"><button name="submit" type="submit">submit</button></td>
			</tr>
		</form>
	</table>
</body>
</html>