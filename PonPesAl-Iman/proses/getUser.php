<?php
	include "konek.php";
	error_reporting(0);
	$tanda = $_SESSION['id'];
	
	
	
	if($tanda){
		$query = mysqli_query($konek, "select * from userAccount where username='$tanda'");
		while($ambil = mysqli_fetch_array ($query) ){
			$nama = $ambil[0];
			$username = $ambil[1];
			$password = $ambil[2];
			$alamat = $ambil[3];
			$ttl = $ambil[4];
			$jk = $ambil[5];
			$who = $ambil[6];
			$statusPembayaran = $ambil[7];
		}
		if($statusPembayaran == "BL") $statusPembayaran = "Belum Lunas";
		else if($statusPembayaran == "L") $statusPembayaran = "Lunas";
		
		
		$queryBerkas = mysqli_query($konek, "select * from berkas where username='$tanda'");
		while($ambil = mysqli_fetch_array ($queryBerkas) ){
			$idBerkas = $ambil[0];
			$kk = $ambil[2];
			$kk2 = $ambil[3];
			$kk3 = $ambil[4];
			$kk4 = $ambil[5];
		}
		
	}
	
	
	else
		//header("location:login.php"); 

?>