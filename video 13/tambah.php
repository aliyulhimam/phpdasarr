<?php
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    // ambil data dari tiap elemen dalam form
    $merek = $_POST["merek"];
    $ram = $_POST["ram"];
    $internal = $_POST["internal"];
    $warna = $_POST["warna"];
    $gambar = $_POST["gambar"];



    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
       } else {
        echo "
         <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
       }
}   
?>





<!DOCTYPE html>
<html>

<head>

    <title>tambah data smartphone</title>

</head>

<body>
    <h1>tambah data smartphone</h1>


    <form action="" method="post">
        <ul>
            <li>
                <label for="merek">MEREK :</label>
                <input type=" text" name="merek" id="merek" required>
            </li>
            <li>
                <label for="ram">RAM :</label>
                <input type=" text" name="ram" id="ram" required>
            </li>
            <li>
                <label for="internal">INTERNAL :</label>
                <input type=" text" name="internal" id="internal" required>
            </li>
            <li>
                <label for="warna">WARNA :</label>
                <input type=" text" name="warna" id="warna">
            </li>
            <li>
                <label for="gambar">GAMBAR :</label>
                <input type=" text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
</body>

</html>