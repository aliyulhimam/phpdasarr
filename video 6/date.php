<?php
// date 
//untuk menampilkan tanggal dengan format tertentu

// echo date("l, d-M-Y");

// time 
// UNIX Timestamp / EPOCH time (detik yang sudah berlalu sejak 1 januari 1970)
// echo time();
// echo date("l, d M Y", time()-60*60*24*2);

// mktime (untuk membuat detik sendiri yang sudah berlalu sejak 1 januari 1970 sampai yang kita inginkan)
// mktime parameternya ada 6 (0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,9,7,2008));

// strtotime (kebalikan mktime)
echo date("l", strtotime("07 sep 2008"));





?>