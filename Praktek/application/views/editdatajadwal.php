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
	<?php extract($jadwal); ?>
	<form class="form-group" method="POST" action = "<?php echo base_url();?>index.php/beranda/updatejadwal/<?php echo $jadwal_id; ?>">
	<table align="center">
		<tr>
			<td>Id Pengajar</td>
			<td><input class="form-control" type="text" value="<?php echo $guru_id;?>" name="guru_id"></td>
		</tr>
		<tr>
			<td>Mapel</td>
			<td><input class="form-control" type="text" value="<?php echo $mapel;?>" name="mapel"></td>
		</tr>
		<tr>
			<td>Hari</td>
			<td><input class="form-control" type="text" value="<?php echo $hari;?>" name="hari"></td>
		</tr>
		<tr>
			<td>Dari Jam</td>
			<td><input class="form-control" type="text" value="<?php echo $jam;?>" name="jam"></td>
		</tr>
		<tr>
			<td>Sampai Jam&nbsp&nbsp</td>
			<td><input class="form-control" type="text" value="<?php echo $jamakhir;?>" name="jamakhir"></td>
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
