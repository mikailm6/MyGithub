<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap//css/bootstrap-theme.css">
	<title>Edit data Siswa</title>
</head>
<body>
	<h1 align="center">Edit</h1>
	<?php extract($guru); ?>
	<form class="form-group" method="POST" action = "<?php echo base_url();?>index.php/beranda/updateguru/<?php echo $guru_id; ?>">
	<table align="center">
		<tr>
			<td>Nama</td>
			<td><input class="form-control" type="text" value="<?php echo $nama;?>" name="nama"></td>
		</tr>
		<tr>
			<td>Mapel</td>
			<td><input class="form-control" type="text" value="<?php echo $mapel;?>" name="mapel"></td>
		</tr>
		<tr>
			<td>No. Telp &nbsp&nbsp</td>
			<td><input class="form-control" type="text" value="<?php echo $telp;?>" name="telp"></td>
		</tr>
		<tr>
			<td>
				<br>
				<center>
				<button class="btn btn-primary" type="submit">
					<span class="glyphicon glyphicon-edit"></span>
					Edit
				</button>
				</center>
			</td>
		</tr>
	</table>
	</form>	
</body>
</html>
