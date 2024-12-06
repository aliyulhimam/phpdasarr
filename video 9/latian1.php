<?php
// variabel scope / lingkup variabel

// $x = 10;

// function tampilX() {
//     $x = 20;
//     echo $x;
// }

// tampilX(); {
//     echo "<br>";
//     echo $x;
// }

// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
   
// }

// tampilX(); 
   
// SUPERGLOBALS [$_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV]
// variabel global milik PHP
// merupakan array associative
// echo $_SERVER["SERVER_NAME"];


// $_GET

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
    <title>GET</title>
</head>

<body>
    <h1>daftar smartphone</h1>
    <ul>
        <?php foreach( $smartphone as $smp ) : ?>
        <li>
            <a href="latian2.php?merek=<?= $smp["merek"]; ?>&
                ram=<?= $smp["ram"]; ?>&
                internal=<?= $smp["internal"]; ?>&
                warna=<?= $smp["warna"]; ?>&
                gambar=<?= $smp["gambar"]; ?>
                "><?=$smp["merek"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>