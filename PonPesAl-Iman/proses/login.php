<?php
	session_start();
	include "konek.php";

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
		header("location:../login.php");
		echo "<script> 
					document.getElementById('id').innerHTML = 'Login Gagal';
				</script>
			";
	}
?>