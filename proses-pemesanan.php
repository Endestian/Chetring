<?php
	require_once("connection.php");
	$nama_acr =$_POST['nama'];
	$alamat = $_POST['alamatac'];
	$nomor = $_POST['nomer'];
	
		$simpan = mysqli_query($connect, "INSERT INTO form_acara(nama_acara, alamat_acara, no_telp) VALUES('$nama_acr','$alamat','$nomor')");
		if($simpan) {
			echo "<script> alert('Sukses, Silahkan memilih Menu'); location = 'Pemesanan1.html'; </script>";
		} else {
		echo "<script> alert('Proses Gagal!'); location = 'Pemesanan.html'; </script>";}
?>