<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
    
}

require 'functions.php';

$smartphone = query("SELECT * FROM smartphone");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
$smartphone = cari($_POST["keyword"]);
}
 


?>
<!DOCTYPE html>
<html>

<head>
    <title>halaman admin</title>
    <style>
    .loader {
        width: 100px;
        position: absolute;
        top: 118px;
        left: 310px;
        z-index: -1;
        display: none;

    }
    </style>
    <script src="js/jquery-3.7.1.js"></script>
    <script src=" js/script.js"></script>
</head>

<body><a href="logout.php">Logout</a>
    <h1>daftar smartphone</h1>

    <a href=" tambah.php">tambah data smartphone</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="
off" id="keyword"> <button type="submit" name="cari" id="tombol-cari">cari!</button>

        <img src="img/loader.gif" class="loader">
    </form>

    <br>
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="10">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>merek</th>
                <th>ram</th>
                <th>internal</th>
                <th>warna</th>
            </tr><?php $i=1;
    ?><?php foreach($smartphone as $row) : ?><tr>
                <td><?=$i;
    ?></td>
                <td><a href=" ubah.php?id=<?= $row["id"]; ?>">ubah</a><a href="hapus.php?id=<?= $row["id"]; ?>"
                        onclick=" return confirm('yakin deckk?');">hapus</a></td>
                <td><img src=" img/<?php echo $row["gambar"]; ?>" width=" 50"></td>
                <td><?=$row["merek"];
    ?></td>
                <td><?=$row["ram"];
    ?></td>
                <td><?=$row["internal"];
    ?></td>
                <td><?=$row["warna"];
    ?></td>
            </tr><?php $i++;
    ?><?php endforeach;
    ?>
        </table>
    </div>
</body>

</html>