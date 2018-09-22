<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap//css/bootstrap-theme.css">
	<title>Tambah Guru</title>
</head>
<body>
	<div class="container">
	<h1 align="center">Add Guru</h1>
	<form class="form-group" method="POST" action = "<?php echo base_url();?>index.php/beranda/tambahdataguru">
	<table align="center">
		<tr>
			<td>Nama</td>
			<td><input class="form-control" type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Mapel</td>
			<td><input class="form-control" type="text" name="mapel"></td>
		</tr>
		<tr>
			<td>No. Tel&nbsp&nbsp</td>
			<td><input class="form-control" type="text" name="telp"></td>
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
