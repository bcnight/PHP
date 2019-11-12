<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
	!isset($_GET["nrp"]) ||
	!isset($_GET["email"]) ||
	!isset($_GET["jurusan"])) {
	// redirect
	header("Location: latihan1.php");
	exit; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Mahasiswa</title>
</head>
<body>

	<ul>
		<li><?php echo $_GET["nama"] ?></li>
		<li><?php echo $_GET["nrp"] ?></li>
		<li><?php echo $_GET["email"] ?></li>
		<li><?php echo $_GET["jurusan"] ?></li>
	</ul>
	
</body>
</html>