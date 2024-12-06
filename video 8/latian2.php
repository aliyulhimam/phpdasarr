<?php
// $mahasiswa = [
//     ["aliyuel", "12345678", "erpeel", "aliyuel@gmail.com"], 
//     ["isanzeros", "87654321", "erpeel", "isanzeros@gmail.com"]
// ];

// array associative
// definisinya sama seperti array numerik, kecuali 
// key-nya adalah string yang kita buat sendiri

// "tugas" => [50, 75, 100]
$smartphone = [
      [
        "merek" => "realme narzo50A prime", 
        "ram" => "4",
        "internal" => "128",
        "warna" => "hitam",
        "gambar" => "realme.jpg"
      ],
        [
        "merek" => "samsung galaxy s24", 
        "ram" => "8",
        "internal" => "256",
        "warna" => "hitam",
        "gambar" => "samsung.jpg"
       
        ]
    ];
    
?>
<!DOCTYPE html>
<html>

<head>
    <title>daftar smartphone</title>
</head>

<body>
    <h1>daftar smartphone</h1>
    <?php foreach( $smartphone as $smp ) : ?>
    <ul>
        <li><img src="img/<?= $smp ["gambar"]; ?>"></li>
        <li><?= $smp["merek"]; ?></li>
        <li><?= $smp["ram"]; ?></li>
        <li><?= $smp["internal"]; ?></li>
        <li><?= $smp["warna"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body