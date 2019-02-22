<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="solid 1px">
	<tr>
		<th>No.</th>
		<th>Sasaran</th>
		<th>Penerima</TH>
		<th>Isi paket</th>
		<th>tanggal masuk</th>
		<th>Tanggal diambil</th>
	</tr>
	<?php $i = 1;
			foreach ($value as $val){
		?>
	<tr>
		
		<td>
			<?php echo $i ?>
		</td>
		
		<td>
			<?php echo $val->sasaran; ?>	
		</td>
		<td>
			<?php echo $val->penerima; ?>
		</td>
		<td>
			<?php echo $val->isi; ?>
		</td>
		<td>
			<?php echo $val->tgl_datang; ?>
		</td>
		<td>
			<?php echo $val->tgl_ambil; ?>
		</td>
		
	</tr>
	<?php $i++;  } ?>
</table>
</body>
</html>