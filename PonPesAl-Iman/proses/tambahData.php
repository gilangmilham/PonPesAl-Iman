<?php
	include "konek.php";
	
	$tema = strtolower($_POST['tema']);
	$judul = $_POST['judul'];
	$tanggal = $_POST['tanggal'];
	$text = $_POST['text'];

	$tanggaldb = date($tanggal, strtotime('YYYY-MM-DD'));
	
	$query = mysqli_query($konek,"insert into $tema values('','$judul', '$text','$tanggaldb')");
	header("location:../$tema.php");
?>
