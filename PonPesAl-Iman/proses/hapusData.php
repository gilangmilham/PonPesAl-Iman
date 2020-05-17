<?php
	include "konek.php";
	
	$id=$_GET['id'];
	$tema = substr($id,0,6);
	if($tema == "berita"){
		$tema = "berita";
		$id=substr($id,7,strlen($id));
	}else if($tema == "pengum"){
		$tema = "pengumuman";
		$id=substr($id,11,strlen($id));
	}
	$seleksi = "id_".$tema;
	
	
	$query = mysqli_query($konek,"delete from $tema where $seleksi ='$id'");
	header("location:../$tema.php");
?>
