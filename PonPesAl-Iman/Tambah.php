<?php
	include "navAdmin.php";
	
	$id=$_GET['id'];
	$tema = substr($id,0,6);
	if($tema == "berita"){
		$tema = "Berita";
	}else if($tema == "pengum"){
		$tema = "Pengumuman";
	}else{
		header("location:$homeadmin");
	}
	
?>
<br><br><br>
<h1> <?php echo $tema;?> </h1>


<form method="POST" action="proses/tambahData.php" >
	<input type="hidden" name="tema" value="<?php echo $tema ?>" > <br>
	Judul <?php echo $tema ?> : <input type="text" name="judul" > <br>
	Tanggal : <input type="date" name="tanggal" > <br>
	Teks <?php echo $tema ?> : <input type="text" name="text"> <br>
	<br>
	<input type="Submit" name="submit" value="Simpan">
	<input type="reset" name="reset">
</form>