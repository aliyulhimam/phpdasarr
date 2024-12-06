<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
global $conn;
$result = mysqli_query($conn, $query);
$rows = [];
while( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
  }   
  return $rows;
}

function tambah($data) {
global $conn;
  
  $merek = htmlspecialchars($data["merek"]);
  $ram = htmlspecialchars($data["ram"]);
  $internal = htmlspecialchars($data["internal"]);
  $warna = htmlspecialchars($data["warna"]);
  $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO smartphone
                VALUES
                ('', '$merek', '$ram', '$internal', '$warna', '$gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
      

}


function hapus($id) {
global $conn;
mysqli_query($conn, "DELETE FROM smartphone WHERE id = $id");
return mysqli_affected_rows($conn);
}


function ubah($data) {
  global $conn;
  
  $id = $data["id"];
  $merek = htmlspecialchars($data["merek"]);
  $ram = htmlspecialchars($data["ram"]);
  $internal = htmlspecialchars($data["internal"]);
  $warna = htmlspecialchars($data["warna"]);
  $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE smartphone SET
              merek = '$merek',
              ram = '$ram',
              internal = '$internal',
              warna = '$warna',
              gambar = '$gambar'
              WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

  }


  function cari($keyword) {
        $query = "SELECT * FROM smartphone
        WHERE
        merek LIKE '%$keyword%' OR
        ram LIKE '%$keyword%' OR
        internal LIKE '%$keyword%' OR
        warna LIKE '%$keyword%'
         ";
         
        return query($query);
  }
?>