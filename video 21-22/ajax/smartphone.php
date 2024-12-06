<?php
usleep(500000);

require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM smartphone
         WHERE
        merek LIKE '%$keyword%' OR
        ram LIKE '%$keyword%' OR
        internal LIKE '%$keyword%' OR
        warna LIKE '%$keyword%'
         ";
$smartphone = query($query); 
?>

<table border=" 1" cellpadding="10" cellspacing="10">

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
            <a href=" ubah.php?id=<?= $row["id"]; ?>">ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm('yakin deckk?');">hapus</a>
        </td>
        <td><img src=" img/<?php echo $row["gambar"]; ?>" width=" 50">
        </td>
        <td><?= $row["merek"]; ?></td>
        <td><?= $row["ram"]; ?></td>
        <td><?= $row["internal"]; ?></td>
        <td><?= $row["warna"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>