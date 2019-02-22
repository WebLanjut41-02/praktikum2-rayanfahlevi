<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Selamat datang</h1>
<table>
	<tr>
		<td>
		<form action="<?php echo base_url(); ?>prak/inputpeng">
			<button>Input data penghuni</button>
		</form>
		</td>
		<td>
			<form action="<?php echo base_url(); ?>prak/inputpaket">
			<button>Input data paket</button>
			</form>	
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<button >
			<a href="<?php echo base_url(); ?>prak/listpaket">
			lihat list paket
			</a>
			</button>
		</td>
		</form>
	</tr>
	<tr>
		<td colspan="2">
			<a href="<?php echo base_url(); ?>prak/logout">
			Logout
			</a>
		</td>
	</tr>
		
</table>

</body>
</html>