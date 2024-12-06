<?php
require 'functions.php';
$smartphone = query("SELECT * FROM smartphone");
 
// ambil data (fetch) smartphone dari objek result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() 

// while( $smp = mysqli_fetch_assoc($result) )  {
//     var_dump($smp);
//}

?>
<!DOCTYPE html>
<html>

<head>
    <title>halaman admin</title>
</head>

<body>
    <h1>daftar smartphone</h1>
    <table border="1" cellpadding="10" cellspacing="10">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>merek</th>
            <th>ram</th>
            <th>internal</th>
            <th>warna</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $smartphone as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" width=" 50">
            </td>
            <td><?= $row["merek"]; ?></td>
            <td><?= $row["ram"]; ?></td>
            <td><?= $row["internal"]; ?></td>
            <td><?= $row["warna"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
</body>

</html>