<?php
	session_start();
	include "proses/konek.php";
?>

	
	<a href="<?php echo $home ?>">Home</a>
<a href="daftar.php">Daftar</a>

<br><br>
<form method="POST" action="proses/daftar.php" >
	Nama: <input type="text" name="nama" required oninvalid="this.setCustomValidity('Harus diisi')" oninput="setCustomValidity()" > <br>
	username: <input type="text" name="username"> <br>
	password: <input type="password" name="password"> <br>
	Alamat: <textarea name="alamat"> </textarea> <br>
	TTL:  <input type="date" name="ttl" required> <br>
	JK :
	<select name="jk" required>
		<option value="L"> Laki-Laki</option>
		<option value="P"> Perempuan</option>
	</select>
	<br>
	<input type="Submit" name="submit">
	<input type="reset" name="reset">
</form>