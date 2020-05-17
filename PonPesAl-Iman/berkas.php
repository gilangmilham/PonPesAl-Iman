<?php
	include "navSanba.php";
	include "proses/getUser.php";
	
	if(($who == 0) and !($username=="admin")){}
	else {header("location:login.php");}
?>


<br><br>

<form method="POST" action="" enctype="multipart/form-data">
	KK: <input type="file" name="kk" value="<?php echo $kk; ?>" ><br>
	KK: <input type="file" name="1" value="<?php echo $kk; ?>"> <br>
	KK: <input type="file" name="2" value="<?php echo $kk; ?>"> <br>
	KK: <input type="file" name="4" value="<?php echo $kk; ?>"> <br>
	<br>
	<input type="Submit" name="submit">
	<input type="reset" name="reset">
</form>





<?php
	session_start();
	include "proses/konek.php";
	
	
	$user = $_SESSION['id'];
	
	if($submit){
		echo $kk = $_POST['kk'];
		echo $kk1 = $_POST['1'];
		echo $kk2 = $_POST['2'];
		echo $kk4 = $_POST['4'];
		
		$berkas = array($kk, $kk1, $kk2,$kk4);
		for($i=0 ; $i<count($berkas) ; $i++){
			echo $berkas[$i];
		}
		//upload file
		$ekstensi_diperbolehkan	= array('png','jpg');
		$nama = $_FILES['kk']['name'];
		$file_tmp = $_FILES['kk']['tmp_name'];
		
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		
		 
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			if($ukuran < 5044070){
				mkdir($user);
				move_uploaded_file($file_tmp, $user.'/'.$nama);
				echo $cekUser = mysqli_query($konek,"select username from berkas where username='$user'");
				if($cekUser)
					echo "ada";
				else
					echo "tidak ada";
				// $query = mysqli_query($konek,"insert into berkas values ('' , '$user', '$kk', '$kk1', '$kk2', '$kk4')");
				// if($query){
				// }else{
					// echo 'Gagal';
				// }
			}else{
				echo 'Ukuran file terlalu besar';
			}
		}else{
			echo 'Ekstensi file yang di upload tidak di perbolehkan';
		}
	}else{}
?>
