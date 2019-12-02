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

	<h1>Halaman Login</h1>


	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<a href="registrasi.php"><button class="btn btn-primary" name="registrasi">Registrasi</button></a>

		<form action="cek_login.php" method="post">
			<div class="form-group">
				<label>NAMA PENGGUNA</label>
				<input type="text" name="nama_pengguna" class="required form-control" placeholder="NamaPengguna .." required="required">
			</div>

			<div class="form-group">
				<label>KATA SANDI</label>
				<input type="password" name="kata_sandi" class="required form-control" placeholder="KataSandi .." required="required">
			</div>

			<div class="form-group">
				<input type="submit" class="btn  btn-primary" value="LOGIN">
				<button class="btn  btn-warning" type="reset">Reset</button>
			</div>

		</form>
	</div>
</body>

</html>