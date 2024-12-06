<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["merek"]) || 
    !isset($_GET["ram"]) ||
    !isset($_GET["internal"]) ||
    !isset($_GET["warna"]) ||
    !isset($_GET["gambar"])) {
        // redirect
        header("Location: latian1.php");
    }


?>
<!DOCTYPE html>
<html>

<head>

    <title>Detail smartphone</title>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["merek"]; ?></li>
        <li><?= $_GET["ram"]; ?></li>
        <li><?= $_GET["internal"]; ?></li>
        <li><?= $_GET["warna"]; ?></li>

    </ul>

    <a href=latian1.php>kembali ke daftar smartphone </a>

</body>

</html>