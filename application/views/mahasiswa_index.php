<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #7A77FF">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="<?= site_url('mahasiwa')?>" class="nav-link active">HOME</a>
			<a href="<?= site_url('mahasiwa/tambah')?>" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Tuppai</a>
			
		</div>
	</nav>

	<div class="alert alert-success text-center mt-2 shadow">
		Data Mahasiswa
	</div>
<div class="container">
	

	<table class="table table-bordered table-striped table-hover ">
		
		<tr class="text-center">
			<th>NO</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1810320002</td>
			<td>Tuppai</td>
			<td>Mataram</td>
			<td class="text-center">
				
				<a href="" class="btn btn-info btn-sm">EDIT</a>
				<a href="" class="btn btn-danger btn-sm">EDIT</a>


			</td>
		</tr>

	</table>
</div>
</body>
</html>