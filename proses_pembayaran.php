<?php
	require_once("connection.php");
	$nama =$_POST['namarek'];
	$norek = $_POST['norek'];
	
		$simpan = mysqli_query($connect, "INSERT INTO pembayaran(nama, norek_tujuan) VALUES('$nama','$norek')");
		if($simpan) {
			echo "<script> alert('Sukses silahkan membayar sebelum tenggat waktu, yaitu 24 jam'); location = 'home.html'; </script>";
		} else {
		echo "<script> alert('Proses Gagal!'); location = 'Pembayaran.html'; </script>";}
?>