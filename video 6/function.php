<?php
function salam($waktu = "datang", $nama = "admin") { 
    return "selamat $waktu, $nama";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>latihan fucntion</title>
</head>

<body>
    <h1>
        <?= salam("siang", "kapten"); ?>
    </h1>
</body>

</html>