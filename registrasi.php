<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style>
		body {
			background: #00b4f0;
		}
	</style>
</head>

<body>

	<h1>Halaman Registrasi</h1>


	<div class="kotak_regis">
		<p class="tulisan_login">Silahkan Registrasi</p>

		<form class="row-border" action="proses_registrasi.php" method="post">
			<div class="form-group">
				<label>ID AKUN<span class="required">*</span></label>
				<input name="id_akun" type="number" class="required form-control">
			</div>

			<div class="form-group">
				<label>Nama Lengkap <span class="required">*</span></label>
				<input name="nama_lengkap" type="text" class="required form-control">
			</div>

			<div class="form-group">
				<label>Alamat <span class="required">*</span></label>
				<input name="alamat" type="text" class="required form-control">
			</div>

			<div class="form-group">
				<label>Email <span class="required">*</span></label>
				<input name="email" type="email" class="required form-control">
			</div>

			<div class="form-group">
				<label>NO TELPON <span class="required">*</span></label>
				<input name="no_telpon" type="text" class="required form-control">
				</span>
			</div>

			<div class="form-group">
				<label>NAMA_PENGGUNA <span class="required">*</span></label>
				<input name="nama_pengguna" type="text" class="required form-control">
			</div>

			<div class="form-group">
				<label>KATA_SANDI <span class="required">*</span></label>
				<input name="kata_sandi" type="password" class="required form-control">
			</div>

			<div class="form-group">
				<label>STATUS <span class="required">*</span></label>
				<select name="status">
					<option value="kurir">KURIR</option>
					<option value="pengguna">PENGGUNA</option>
				</select>
				</span>
			</div>

			<div class="form-group">
				<label>JENIS KELAMIN <span class="required">*</span></label>
				<input type="radio" name="jenis_kelamin" value="L">Laki Laki
				<input type="radio" name="jenis_kelamin" value="P">Perempuan
				</span>
			</div>


			<div class="form-actions">
				<button class="btn btn-primary" type="submit">Registrasi</button>
				<button class="btn  btn-warning" type="reset">Reset</button>

			</div>

		</form>
		<a href="index.php"><button class="btn  btn-secondary">Kembali</button></a>
	</div>

</body>

</html>