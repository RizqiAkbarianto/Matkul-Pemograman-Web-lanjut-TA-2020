<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #7A77FF">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="<?= site_url('mahasiwa')?>" class="nav-link ">HOME</a>
			<a href="<?= site_url('mahasiwa/tambah')?>" class="nav-link active">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Tuppai</a>
			
		</div>
	</nav>

	<div class="alert alert-success text-center mt-2 shadow">
		Tambah Mahasiswa
	</div>
	<br><br>
	<div class="container">
		<div class="card mt-2">
			
			<div class="card-body ">

				<div class="form-group row">
					<label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="NIM" placeholder="Masukan NIM">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-md-10">
						<textarea name="Alamat" class="form-control" placeholder="Masukan Alamat"></textarea>
					</div>
				</div>
				<div align="right">
					<input type="submit" name="btnsubmit" value="Simpan" class="btn btn-success mt-1">
				</div>
			</div>
		</div>

	</div>

</body>
</html>