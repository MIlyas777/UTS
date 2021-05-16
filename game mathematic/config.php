<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "game mathematic";
 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn ->conn) {
  die("Koneksi gagal: " . mysqli_connect_error);
}else{
    echo "koneksi sukses";
}
mysqli_close($conn);
?>
