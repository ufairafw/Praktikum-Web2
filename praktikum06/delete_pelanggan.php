<?php 
// import database
require_once 'dbkoneksi.php';
// tangkap data id delete nya
$delete = $_GET['iddel'];
// bikin query
$sql = "DELETE FROM pelanggan WHERE id=?";
// siapin query
$st = $dbh->prepare($sql);
// eksekusi query
$st->execute([$delete]);

header('location:list_pelanggan.php');

?>