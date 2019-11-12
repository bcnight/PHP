<?php  
// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];

$mahasiswa = [
	[
		"nama" => "Sandhika Galih",
		"nrp" => "050607",
		"email" => "sandhikagalih@unpas.ac.id",
		"jurusan" => "Teknik Informatika"
	],

	[
		"nama" => "Doddy Ferdiansyah",
		"nrp" => "010203",
		"email" => "doddyferdiansyah@unpas.ac.id",
		"jurusan" => "Teknik Industri"
	],

	[
		"nama" => "Efan Hilman",
		"nrp" => "070809",
		"email" => "efanhilman@unpas.ac.id",
		"jurusan" => "Teknik Roda"
	]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
		<?php foreach($mahasiswa as $mhs) : ?>
			<li>
				<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"] ?>  "> <?php echo $mhs["nama"] ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>