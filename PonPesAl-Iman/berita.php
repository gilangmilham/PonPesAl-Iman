<?php
	include "navAdmin.php";
?>
<br><br><br>
<h1> Berita </h1>
<a href= 'Tambah.php?id=berita'> Tambah </a>

<?php
	$query = mysqli_query($konek, "select * from berita");
	$i=1;
	if((mysqli_num_rows($query))==0){
		echo "Tidak ada berita!";
	}else{
?>		
<table border="1">
	<tr>
		<th> No </th>
		<th> Judul Berita </th>
		<th> Teks </th>
		<th> Tanggal </th>
		<th colspan="2">  </th>
	</tr>
<?php	
	while($ambil = mysqli_fetch_array ($query) ){
		$id = $ambil[0];
?>

	<tr>
		<td> <?php echo $i; ?> </td>
		<td> <?php echo $ambil[1]; ?> </td>
		<td> <?php echo $ambil[2]; ?> </td>
		<td> <?php echo date('d M Y', strtotime($ambil[3])); ?> </td>
		<td>
			<?php
				echo "
				<a href= 'Ubah.php?id=berita+$id'>
					Ubah
				</a>
				";
			?>
		</td>
		<td>
			<?php
				echo "
				<a href= 'proses/hapusData.php?id=berita+$id'>
					Hapus
				</a>
				";
			?>
		</td>
	</tr>


<?php
	$i++;
	}}
?>
</table>