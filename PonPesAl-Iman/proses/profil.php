<?php
	session_start();
	include "konek.php";
	
	$user = $_POST['username'];
	
	$nama = $_POST['nama'];
	$pw = $_POST['password'];
	$alamat = $_POST['alamat'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
		
	if($jk=="P" || $jk=="L"){	 
		$query = mysqli_query($konek,"update useraccount set nama='$nama' , password='$pw', alamat='$alamat', ttl='$ttl', jk='$jk' where username='$user' ");
		if($query){
			echo "<script> alert('berhasil disimpan!') </script>";
		}
		else{
			header("location:profil.php?id=$user");
		}
		header("location:$homesanba");
	}
	else{
		header("location:../profil.php?id=$user");
		//echo "<script> alert('gagal!') </script>";
		
	}
?>
