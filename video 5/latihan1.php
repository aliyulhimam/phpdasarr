<?php
// pengulangan
// for (di dalam sintaks ini ada 3 bagian: inisialisasi, kondisi terminasi, increment/decrement
// inisialisasi=menentukan variabel awal untuk pengulangannya, kondisi terminasi= digunakan untuk
// memberhentikan pengulangannya, increment/decrement= supaya pengulangannya bisa maju atau mundur)
// while (tidak digunakan sama sekali ketika false(kosong))
// do.. while (digunakan sekali ketika false)
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
//     echo "hello word <br>";
// }

// $i = 0;
// while($i < 5){
//     echo "hello word <br>";
    
// $i++;
// }

// $i = 10;
// do {
//     echo "hello word <br>";
//     $i++;
// } while ($i < 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>latihan1</title>

</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0"><?php for ($i=1; $i <=5; $i++) {
        echo "<tr>";

        for ($j=1; $j <=5; $j++) {
            echo "<td>$i,$j</td>";
        }
    }

    ?></table>
</body>

</html>