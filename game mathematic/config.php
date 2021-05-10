<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "game mathematic";
 
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn ->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}else{
    echo "koneksi sukses";
}
$conn->close();
?>