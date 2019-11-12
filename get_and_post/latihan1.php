<?php
// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];

// $_GET

$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" => "050607",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Doddy Fermansyah",
        "nrp" => "010203",
        "email" => "doddyferdiansyah@unpas.ac.id",
        "jurusan" => "Teknik Mesin"
    ],

    [
        "nama" => "Efan Halim",
        "nrp" => "070809",
        "email" => "efanhalim@unpas.ac.id",
        "jurusan" => "Teknik Roda"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?PHP foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?> "> <?php echo $mhs["nama"]; ?> </a>
        </li>
    <?PHP endforeach; ?>
    </ul>
    
</body>
</html>