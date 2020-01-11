<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/justin.css">

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
						<p><strong>JENIS MINUMAN</strong></p>
					</td>
				</tr>
				<tr>
					<td>
						<p>MINUMAN PANAS</p>
					</td>
					<td>
						<tr>
							<?php
							 include "connection.php";
							 $data=mysqli_query($connect, "SELECT * from mn_minuman where jns_minuman=2");
							 if ($data === FALSE) {
							 die(mysql_error());
							 }
							 $no=1;
							 while($hasil=mysqli_fetch_array($data)){ 
							 
							 echo "<tr>
							 <td>$no</td>
							 <td>$hasil[nama_minuman]</td>
							 </tr>";
							 $no++;
							 }
							 ?>
						</tr>
					</td>
					<td>
						<p>MINUMAN DINGIN</p>
					</td>
					<td>
						<tr>
							<?php
							 include "connection.php";
							 $data=mysqli_query($connect, "SELECT * from mn_minuman where jns_minuman=1");
							 if ($data === FALSE) {
							 die(mysql_error());
							 }
							 $no=1;
							 while($hasil=mysqli_fetch_array($data)){ 
							 
							 echo "<tr>
							 <td>$no</td>
							 <td>$hasil[nama_minuman]</td>
							 </tr>";
							 $no++;
							 }
							 ?>
						</tr>
					</td>		 
				</tr>
			</div>
		</div>
	</section>
</body>
</html>

