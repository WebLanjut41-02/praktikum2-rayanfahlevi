<?php $this->load->view('v_header'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			font-family: sans-serif;
			text-align: center;
		}
		table {
			margin: auto;
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<p>Hai, <?php echo $this->session->username; ?></p>
<table border="solid 1px">
	<tr>
		<th>Username</th>
		<th>Password</th>
		<th>Edit</th>
	</tr>
	<tr>
		<td><?php echo $username; ?></td>
		<td><?php echo $pass; ?></td>
		<td><a href="<?= base_url(); ?>baru/ ">Edit</td>
	</tr>
</table>


</body>
</html>

<?php $this->load->view('v_footer'); ?>