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
					<li><a href="JMakan.php">Jenis makanan</a></li>
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
						<p><strong>JENIS MAKANAN</strong></p>
					</td>
				</tr>
				<tr>
					<td>
						<p>MAKANAN BERAT</p>
					</td>
					<td>
						<tr>
							<?php
							 include "connection.php";
							 $data=mysqli_query($connect, "SELECT * from mn_makanan where jns_makanan=1");
							 if ($data === FALSE) {
							 die(mysql_error());
							 }
							 $no=1;
							 while($hasil=mysqli_fetch_array($data)){ 
							 
							 echo "<tr>
							 <td>$no</td>
							 <td>$hasil[nama_makanan]</td>
							 </tr>";
							 $no++;
							 }
							 ?>
						</tr>
					</td>
					<td>
						<p>MAKANAN RINGAN</p>
					</td>
					<td>
						<tr>
							 <?php
							 include "connection.php";
							 $data=mysqli_query($connect, "SELECT * from mn_makanan where jns_makanan=2");
							 if ($data === FALSE) {
							 die(mysql_error());
							 }
							 $no=1;
							 while($hasil=mysqli_fetch_array($data)){ 
							 
							 echo "<tr>
							 <td>$no</td>
							 <td>$hasil[nama_makanan]</td>
							 </tr>";
							 $no++;
							 }
							 ?>	
						</tr>
					</td>	
					<td>
						<p>MAKANAN MANIS</p>
					</td>
					<td>
						<tr>
							 <?php
							 include "connection.php";
							 $data=mysqli_query($connect, "SELECT * from mn_makanan where jns_makanan=3");
							 if ($data === FALSE) {
							 die(mysql_error());
							 }
							 $no=1;
							 while($hasil=mysqli_fetch_array($data)){ 
							 
							 echo "<tr>
							 <td>$no</td>
							 <td>$hasil[nama_makanan]</td>
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

