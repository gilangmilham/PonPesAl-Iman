<?php
	session_start();
	include "konek.php";
	
	$nama = $_POST['nama'];
	$user = $_POST['username'];
	$pw = $_POST['password'];
	$alamat = $_POST['alamat'];
	echo $ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
	
	//0= biasa		1=admin
	//$query = mysqli_query($konek,"insert into useraccount values ('$nama', '$user', '$pw', '$alamat', '$ttl','$jk', '0')");
	//header("location:$home");
?>
