<?php
$mahasiswa = [
    ["aliyuel", "12345678", "erpeel", "aliyuel@gmail.com"], 
    ["isanzeros", "87654321", "erpeel", "isanzeros@gmail.com"]
];
?>

<!--<!DOCTYPE html>
 <html>

<head>
    <title>daftar mahasiswa</title>
</head>

<body>
    <h1>daftar mahasiswa</h1>
    <ul>
        <li>aliyuel</li>
        <li>12345678</li>
        <li>erpeel</li>
        <li>aliyuel@gmail.com</li>
    </ul>
</body>

</html> -->

<!DOCTYPE html>
<html>

<head>
    <title>daftar mahasiswa</title>
</head>

<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li><?= $mhs[0]; ?></li>
        <li><?= $mhs[1]; ?></li>
        <li><?= $mhs[2]; ?></li>
        <li><?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>