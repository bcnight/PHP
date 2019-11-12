<?php
$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" => "050607",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Sandhika Galih",
        "nrp" => "050607",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Sandhika Galih",
        "nrp" => "050607",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>

        <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li><?php echo $mhs["nama"]; ?></li>
            <li><?php echo $mhs["nrp"]; ?></li>
            <li><?php echo $mhs["email"]; ?></li>
            <li><?php echo $mhs["jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
    
</body>
</html>