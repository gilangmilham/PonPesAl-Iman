<?php
	session_start();
	include "proses/konek.php";
	include "proses/getUser.php";
	
	if(($who == 1) and ($username=="admin")){}
	else {header("location:login.php");}
?>


	<a href="<?php echo $homeadmin ?>">Home</a>



<?php

	if(!$_SESSION['id']){
	}else{
?>

	<a href="proses/logout.php">Logout</a>
	<a href="pengumuman.php">Pengumuman</a>
	<a href="berita.php">Berita</a>

<?php
	echo "Hai, " . $_SESSION['id'];
}
?>
