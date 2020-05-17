<?php
	session_start();
	include "proses/konek.php";
?>
<a href="index.php">Home</a>

<br><br>
<form method="POST" action="proses/login.php" >
	username: <input type="text" name="username" onclick="harusDiIsi()" > <br>
	
	<input type="Submit" name="submit">
	<input type="reset" name="reset">
</form>

<script>
	function harusDiIsi(){
		if(username.value=" "){
			alert("Harus diisi");
		}
		if(password.value=" "){
			alert("Harus diisi");
		}
	}

	function errorLogin(){
		document.write("Login gagal");
	}
</script>