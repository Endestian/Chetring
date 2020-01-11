<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/admin.style.css">
<link rel="stylesheet" href="css/style.css">

   <title>CATHERING ONLINE</title>
</head>
<body>
	<div align="center" class="judul">
		<h2 style="color: white;"><strong>LOGIN</strong></h2>
			<form method="post" action="proses-login.php">
				<tr>
					<input type="text" id="username" name="username" placeholder="username" maxlength="21" required>
				</tr>
				<tr>
					<input type="password" id="password" name="password" placeholder="Password" maxlength="16" required>
				</tr>
				<div>
					<button type="submit" style="width: 60px; height: 30px;">Masuk</button>
				</div>
				<div>
					BELUM DAFTAR? <a href="register.php">REGISTER</a> DULU YUK!
				</div>
			</form>
	</div>
</body>
</html>