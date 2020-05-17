<?php
	session_start();
	include "konek.php";
	
	$user = $_SESSION['id'];
	
	$kk = $_POST['kk'];
	$kk1 = $_POST['1'];
	$kk2 = $_POST['2'];
	$kk4 = $_POST['4'];
	
	$berkas = array($kk, $kk1, $kk2,$kk4);
	for($i=0 ; $i<count($berkas) ; $i++){
		echo $berkas[$i];
	}
	//upload file
	$ekstensi_diperbolehkan	= array('png','jpg');
	$nama = $_FILES['kk']['name'];
	$file_tmp = $_FILES['kk']['tmp_name'];
	
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	
	 
	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){		
		mkdir($user);
		move_uploaded_file($file_tmp, $user.'/'.$nama);
		$query = mysqli_query($konek,"insert into berkas values ('' , '$kk', '$kk1', '$kk2', '$kk4')");
		if($query){
			echo "succ";
		}else{
			echo "galga";
		}
	}else{
	}
?>
