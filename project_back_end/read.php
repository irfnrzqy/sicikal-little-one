<?php 
	include "koneksiread.php";
	$query = mysqli_query($koneksi, "SELECT * FROM daftar");
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Read Database</title>
</head>
<body>
	<form method="post">
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>no</th>
			<th>email</th>
			<th>Password</th>
		</tr>
	</table>
	<?php if(mysqli_num_rows($query)>0){ ?>
	<?php
		$no = 1;
		while($data = mysqli_fetch_array($query)){
	?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $data ["email"];?></td>
		<td><?php echo $data ["password"];?></td>
	</tr>
		<?php $no++; }?>
		<?php } ?>
	</table>	
	</form>

</body>
</html>
