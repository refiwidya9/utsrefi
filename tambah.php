
<!doctype HTML>
<html>
<head>
	<title>INPUT KENDARAAN</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><h3> <b>Input Data Penjualan</b></h3></center>
				<br>
				<form action="proses-tambah.php" method="POST">
					<div class="form-group">
						<label for="nomor_pesanan">NOMOR PESANAN</label>
						<input type="number" name="nomor_pesanan" class="form-control">
					</div>

					<div class="form-group">
						<label for="nomor_meja">NOMOR MEJA</label>
						<input type="number" name="nomor_meja" class="form-control">
					</div>

					<div class="form-group">
						<label for="nama_makanan">NAMA MAKANAN</label>
						<select name="nama_makanan" class="form-control">
						<option value="pedas">PEDAS</option>
						<option value="biasa">BIASA</option>
						<option value="sepesial">SPECIAL</option>
						</select>
					</div>
					<div class="form-group">
						<label for="jumlah_pesanan">JUMLAH PESANAN</label>
						<input type="number" name="jumlah_pesanan" class="form-control">
					</div>

					<div class="form-group">
						<label for="harga">HARGA</label>
						<textarea name="harga" class="form-control">
						</textarea>
					</div>
					<div class="form-group">
						<label for="total_pesanan">TOTAL PESANAN</label>
						<textarea name="total_pesanan" class="form-control">
						</textarea>
					</div>
					<div class="form-group">
						<label for="total_harga">TOTAL HARGA</label>
						<textarea name="total_harga" class="form-control">
						</textarea>
					</div>




					<input type="submit" name="kirim" value="Simpan" class="btn btn-info">
					<input type="reset" name="kosongkan" value="kosongkan" class="btn btn-danger">

		<script src="bootstrap/js/jQuery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>