<?php
	require_once("connection.php");
	$query = "SELECT * FROM judul";
	$hasil= mysqli_query($connect, $query);
	$data=mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/justin.css">
<title><?php echo "".$data['judul']."";?></title>
</head>
<body>
	<header>
		<div align="center">
			<nav>
				<ul>
					<li><a href="home.html">HOME</a></li>
					<li><a href="JMakan.html">Jenis makanan</a></li>
					<li><a href="JMinuman.html">Jenis minuman</a></li>
					<li><a href="Paket.html">PAKET</a></li>
					<li><a href="Pemesanan.html">FORM PEMESANAN</a></li>
					<li><a href="Pembayaran.html">FORM PEMBAYARAN</a></li>
					<li><a href="Login.php">LOGOUT</a></li>
				</ul>
			</nav>
		</div>	
	</header>


	<section>
		<div align="center" class="container-fluid">
			<div>
				<tr>
					<td>
						<p><STRONG>MENU PAKET</STRONG></p>
					</td>
				</tr>
				<tr>
					<p>NAMA PAKET 1</p>
				</tr>
				<tr>
					<img src="">
				</tr>
				<tr>
					<p>Dekskripsi PAKET 1</p>
				</tr>
				<tr>
					<p>NAMA PAKET 2</p>
				</tr>
				<tr>
					<img src="">
				</tr>
				<tr>
					<p>Dekskripsi PAKET 1</p>
				</tr>
			</div>
		</div>
	</section>
</body>
</html>

