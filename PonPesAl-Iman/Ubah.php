<?php
	include "navAdmin.php";
	
	$id=$_GET['id'];
	$tema = substr($id,0,6);
	
	if($tema == "berita"){
		$tema = "Berita";
		$id = substr($id,7,3);
	}else if($tema == "pengum"){
		$tema = "Pengumuman";
		$id = substr($id,11,3);
	}else{
		header("location:$homeadmin");
	}

	$query = mysqli_query($konek, "select * from $tema where id_$tema=$id;");
	while($ambil = mysqli_fetch_array ($query) ){
		$id_db = $ambil[0];
		$judul = $ambil[1];
		$tex = $ambil[2];
		$tanggal = $ambil[3];
	}
	if($id_db != $id) header("location:$tema.php");
?>
<br><br><br>
<h1> <?php echo $tema;?> </h1>


<form method="POST" action="proses/ubahData.php" >
	<input type="hidden" name="id" value="<?php echo $id_db ?>" > <br>
	<input type="hidden" name="tema" value="<?php echo $tema ?>" > <br>
	Judul <?php echo $tema ?> : <input type="text" name="judul" value="<?php echo $judul ?>" > <br>
	Tanggal : <input type="date" name="tanggal" value="<?php echo $tanggal ?>" > <br>
	Teks <?php echo $tema ?> : <input type="text" name="text" value="<?php echo $tex ?>" > <br>
	<br>
	<input type="Submit" name="submit" value="Simpan">
	<input type="reset" name="reset">
</form>




<?php
		
?>