<?php
$host ="localhost";
$user= "root";
$pass ="admin";
$db ="mydb";

$conn =mysqli_connect($host,$user,$pass,$db);
if ($conn==false) {
	echo "koneksi server gagal";

}



  ?>