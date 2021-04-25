<?php 
$koneksi = mysqli_connect("localhost", "root", "");
$db      = mysqli_select_db($koneksi,"menu");

if (!$koneksi) {
    die("Database selection failed: " . mysqli_error());
}
echo "Connected succesfully";mysqli_close($koneksi);
?>