<?php
	include "konek.php";
	
	$id = $_POST['id'];
	$tema = $_POST['tema'];
	$judul = $_POST['judul'];
	$tanggal = $_POST['tanggal'];
	$text = $_POST['text'];

	
	$query = mysqli_query($konek,"update $tema set judul='$judul', tanggal='$tanggal', teks='$text' where id_$tema='$id'");
	header("location:../$tema.php");
?>
