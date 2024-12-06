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
  
  // upload gambar
  $gambar = upload();
  if( !$gambar ) {
    return false;
  }

    $query = "INSERT INTO smartphone
                VALUES
                ('', '$merek', '$ram', '$internal', '$warna', '$gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmpName'];


  // cek apakah tidak ada gambar yang di upload
  if( $error === 4 ) {
      echo"<script>
      alert('pilih gambar terlebih dahulu!');
      </script>";
      return false; 
  }

  // cek apakah yang di upload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if( !in_array($ekstensiGambar, $ekstensiGambarValid) ); {
  echo"<script>
          alert('yang anda upload bukan gambar');
  <script>";
  return false;
}

// cek jika ukurannya terlalu besar
if( $ukuranFile > 1000000 ) {
  echo"<script>
          alert('ukuran gambar terlalu besar!');
  </script>";
  return false;
}

// lolos pengecekan, gambar siap diupload
// generate   gambar baru
$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

return $namaFileBaru;

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
  $gambarLama = htmlspecialchars($data["gambarLama"]);

// cek apakah user pilih gambar baru atau tidak
if($_FILES['gambar']['error'] === 4 ) {
  $gambar = $gambarLama;
} else {
  $gambar = upload();
}
  
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

function registrasi($data) {
global $conn;

$username = strtolower(stripslashes($data["username"]));
$password = mysqli_real_escape_string($conn, $data["password"]);
$password2 = mysqli_real_escape_string($conn, $data["password2"]);

// cek username sudah ada atau belum
$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

if( mysqli_fetch_assoc($result) ) {
  echo "<script>
          alert('username sudah terdaftar')
        </script";
        return false;
}

// cek konfirmasi password
if( $password !== $password2 ) {
  echo "<script>
          alert('konfirmasi password tidak sesuai!');
        </script>";
  return false;
}

// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

// tambahkan user baru ke database
mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

return mysqli_affected_rows($conn);



  
}

  
?>