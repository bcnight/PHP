<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POST</title>
</head>
<body bgcolor="yellow">
	<?php if( isset($_POST["submit"])) :  ?>
		<h1>Halo, Selamat Datang <?php echo $_POST["nama"]; ?></h1>
	<?php endif; ?>

	<form action="" method="post">
		Masukkan nama:
		<input type="text" name="nama">
		<br>
		<button type="submit" name="submit">Kirim</button>
	</form>

</body>
</html>