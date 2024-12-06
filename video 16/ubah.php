<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data smartphone berdasarkan id
$smp = query("SELECT * FROM smartphone WHERE id = $id") [0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    // ambil data dari tiap elemen dalam form
    $merek = $_POST["merek"];
    $ram = $_POST["ram"];
    $internal = $_POST["internal"];
    $warna = $_POST["warna"];
    $gambar = $_POST["gambar"];



    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
       } else {
        echo "
         <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
            </script>
        ";
       }
}   
?>





<!DOCTYPE html>
<html>

<head>

    <title>ubah data smartphone</title>

</head>

<body>
    <h1>ubah data smartphone</h1>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $smp["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $smp["gambar"]; ?>">
        <ul>
            <li>
                <label for=" merek">MEREK :</label>
                <input type=" text" name="merek" id="merek" required value="<?= $smp["merek"]; ?>">
            </li>
            <li>
                <label for=" ram">RAM :</label>
                <input type=" text" name="ram" id="ram" required value="<?= $smp["ram"]; ?>">
            </li>
            <li>
                <label for=" internal">INTERNAL :</label>
                <input type=" text" name="internal" id="internal" required value="<?= $smp["internal"]; ?>">
            </li>
            <li>
                <label for=" warna">WARNA :</label>
                <input type=" text" name="warna" id="warna" value="<?= $smp["warna"]; ?>">
            </li>
            <li>
                <label for=" gambar">GAMBAR :</label> <br>
                <img src="img/<?= $smp['gambar']; ?>" width="40"> <br>
                <input type=" file" name="gambar" id="gambar">
            </li>
            <li>
                <button type=" submit" name="submit">Ubah Data</button>
            </li>
        </ul>
</body>

</html>