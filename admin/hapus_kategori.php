<?php  
include_once 'koneksi.php';
//include('login_session.php');

$id=$_GET['id'];
$sql="delete from kategori where id_kategori='{$id}'";
$result =mysqli_query($conn,$sql);
header('location: kategori.php');
?>