<?php
	session_start();
	include "proses/konek.php";
?>
<a href="index.php">Home</a>
<a href="daftar.php">Daftar</a>

<br><br>
<form method="POST" action="#">

	<p id="id"> </p>
	username: <input type="text" name="username" onclick="harusDiIsi()" required oninvalid="this.setCustomValidity('Harus diisi')" oninput="setCustomValidity()" focus > <br>
	password: <input type="password" name="password" onclick="harusDiIsi()"> <br>
	<br>
	
	Belum punya akun? <a href="daftar.php">Daftar</a><br>
	<a href="lupaPassword.php"> Lupa password</a><br> 
	<input type="Submit" name="submit" onclick="submitLogin()">
	<input type="reset" name="reset">
</form>



<?php
	if(isset($_POST['submit'])){
		$user = $_POST['username'];
		$pw = $_POST['password'];
		
		
		$query = mysqli_query($konek, "select * from userAccount where username='$user' and password='$pw'");
		
		while($ambil = mysqli_fetch_array ($query) ){
			$nama=$ambil[0];
			$id=$ambil[1];
			$who = $ambil[6];
		}
		
		if((mysqli_num_rows($query))==1){
			$_SESSION['id']=$id;
			
			if($who == 0){
				header("location:$homesanba");
			}else if($who == 1){	
				header("location:$homeadmin");
			}
		}
		else{
			echo "<script> 
					document.getElementById('id').innerHTML = 'Login Gagal';
				</script>
			";
			
		}
	}
?>


