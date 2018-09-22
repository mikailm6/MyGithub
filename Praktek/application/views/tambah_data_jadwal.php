<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap//css/bootstrap-theme.css">
	<title>Tambah Jadwa;</title>
</head>
<body>
	<div class="container">
	<h1 align="center">Add Jadwal</h1>
	<form class="form-group" method="POST" action = "<?php echo base_url();?>index.php/beranda/tambahdatajadwal">
	<table align="center">
		<tr>
			<td>Mapel</td>
			<td><input class="form-control" type="text" name="mapel"></td>
		</tr>
		<tr>
			<td>Id Pengajar</td>
			<td><input class="form-control" type="text" name="guru_id"></td>
		</tr>
		<tr>
			<td>Hari</td>
			<td><input class="form-control" type="text" name="hari"></td>
		</tr>
		<tr>
			<td>Dari Jam &nbsp</td>
			<td><input class="form-control" type="text" name="jam"></td>
		</tr>
		<tr>
			<td>Sampai Jam &nbsp</td>
			<td><input class="form-control" type="text" name="jamakhir"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<center>
					<br>
				<button class="btn btn-primary" type="submit">
					<span class="glyphicon glyphicon-plus"></span>
					Add data
				</button>
				</center>
			</td>
		</tr>
	</table>
	</form>
	
	
</div>
</body>
</html>
