<?php
	session_start();
	include "proses/konek.php";
	include "proses/getUser.php";
	
	if(($who == 0) and ($username!="admin")){}
	else {header("location:login.php");}
?>


	<a href="<?php $homesanba ?>">Home</a>



<?php
$user = $_SESSION['id'];
	if(!$user){
?>

		<a href="daftar.php">Daftar</a>
		<a href="Login.php">Login</a>


<?php
	}else{
?>

		<a href="proses/logout.php"> Logout</a>
	
	<?php
	
		if($statusPembayaran == "Lunas")
			echo " <a href='berkas.php'>PemBerkasan</a>";
		else {}
		echo "<a href='profil.php?id=$user'> Hai, " . $nama."</a>";
}
?>
