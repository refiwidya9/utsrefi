<!doctype HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dasbord Admin</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
	<nav class="navbar-fixed-top navbar-inverse" style=>
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><img src="th.png"></li>
			<li><a href="index.php">DASBOARD ADMIN <span class="sr-only">(current)</span></a></li>
			
			<li><a href="tampil-penjualan.php">INPUT DATA</a></li>
			<li><a href="logout.php">LOGOUT</a></li>

			</ul>
		</div>
		</div>
	</nav>	
	<body>
	<nav class="navbar navbar-inverse" style=>
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><img src="images web/logo2.png"></li>
			<li><a href="index.php">MENU <span class="sr-only">(current)</span></a></li>
			
			<li><a href="tampil-penjualan.php">INPUT DATA</a></li>
			<li><a href="logout.php">LOGOUT</a></li>

			</ul>
		</div>
		</div>
	</nav>	
	
	<center><h3><B>DATABASE PRNJUALAN BASO</B></h3>

<table border="2" width="1000px">
		<tr>
		<td>NOMOR PESANAN</td><td>NOMOR MEJA</td><td>NAMA MAKANAN</td><td>JUMLAH PESANAN</td><td>HARGA</td><td>TOTAL PESANAN</td><td>TOTAL HARGA</td>
		</tr>
		

<?php


include "koneksi.php";

$sql=$koneksi->query("select * from makanan order by nomor_pesanan ASC");

while($row= $sql->fetch_assoc()){
	?>

		<tr>
			<td><?php echo $row['nomor_pesanan']?></td>
			<td><?php echo $row['nomor_meja']?> </td>
			<td><?php echo $row['nama_makanan']?></td>
			<td><?php echo $row['jumlah_pesanan']?></td>
			<td><?php echo $row['harga']?> </td>
			<td><?php echo $row['total_pesanan']?></td>
			<td><?php echo $row['total_harga']?></td>
			<td>
		</tr>
<?php
}
?>

</table></center>


</body>
</html>
</body>
</html>
