<?php
	session_start();
	include "proses/konek.php";
	include "proses/getUser.php";
	
?>


	<a href="<?php $home ?>">Home</a>



<?php
error_reporting(0);
	if(!$_SESSION['id']){
?>

		<a href="daftar.php">Daftar</a>
		<a href="Login.php">Login</a>


<?php
	}else{
?>

		<a href="proses/logout.php">Logout</a>
	
<?php
	echo "Hai, " . $_SESSION['id'];
}
?>
