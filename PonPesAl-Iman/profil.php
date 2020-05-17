<?php
	include "navSanba.php";
	include "getUser.php";
	$id=$_GET['id'];
	if(($who == 0) and !($username=="admin")){}
	if ($username == $id) {}
	else {header("location:login.php");}	
	
?>

<br><br>
<form method="POST" action="proses/profil.php" >
	Nama: <input type="text" name="nama" required oninvalid="this.setCustomValidity('Harus diisi')" oninput="setCustomValidity()" value="<?php echo $nama; ?>"> <br>
	username: <input type="text" name="username" value="<?php echo $username; ?>" readonly> <br>
	password: <input type="password" name="password" value=" <?php echo $password; ?> "> <br>
	Alamat: <textarea name="alamat" > <?php echo $alamat; ?> </textarea> <br>
	TTL:  <input type="date" name="ttl" required value="<?php echo $ttl; ?>"> <br>
	JK :
	<select name="jk" required>
		<?php
			if($jk=="L"){
				echo " <option value='L' selected > Laki-Laki</option>
				<option value='P' > Perempuan</option>";
			}else if($jk=="P"){
				echo " <option value='L' > Laki-Laki</option>
				<option value='P' selected > Perempuan</option>";
			}
		?>
	</select>
	<br><br><br>
	Klik simpan, jika ada yang diubah!<br>
	<input type="Submit" name="submit" value="Simpan">
	<input type="reset" name="reset">
</form>