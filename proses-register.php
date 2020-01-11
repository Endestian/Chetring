<?php
	require_once("connection.php");
	$nama =$_POST['nama'];
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$alamat = $_POST['alamat'];
	$nomor = $_POST['nomer'];
	
	$uppercase = preg_match('@[A-Z]@', $pass);
	$lowercase = preg_match('@[a-z]@', $pass);
	$number    = preg_match('@[0-9]@', $pass);
	$lowerchar = preg_match('@[a-z]@', $username);

	$cekuser = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");
	if(mysqli_num_rows($cekuser) <> 0) {
		echo "<script> alert('Username sudah terdaftar'); location = 'register.php'; </script>";
	}elseif(!$nama || !$username || !$pass  || !$alamat  || !$nomor) {
		echo "<script> alert('Masih ada data kosong'); location = 'register.php'; </script>";
	}elseif (!$uppercase || !$lowercase || !$number || strlen($pass) < 8) {
		echo "<script> alert('Password harus terdiri dari 8 huruf [a-b],[A-B],[0-9]'); location = 'register.php'; </script>";
	}elseif (!$lowerchar) {
		echo "<script> alert('username harus harus [a-z]'); location = 'register.php'; </script>";
	} else {
		$pass = $_POST['password'];
		$simpan = mysqli_query($connect, "INSERT INTO user(nama_user, alamat, username, password, no_telp) VALUES('$nama','$alamat','$username','$pass','$nomor')");
		if($simpan) {
			echo "<script> alert('pendaftaran sukses, silahkan login'); location = 'login.php'; </script>";
		} else {
			echo "<script> alert('Proses Gagal!'); location = 'register.php'; </script>";
		}
	}
?>