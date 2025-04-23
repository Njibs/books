<?php
$id = $_GET['id'];
include_once("setting.php");

$sql = "DELETE FROM siswa WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);
if($result) {
    header('location: ?m=siswa&s=tampil');
} else {
    echo "Error" . $sql . "<br>" . $koneksi->error;
}