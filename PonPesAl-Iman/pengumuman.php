<?php
	include "navAdmin.php";
?>
<br><br><br>
<h1> Pengumuman </h1>
<a href= 'Tambah.php?id=pengumuman'> Tambah </a>

<?php
	$query = mysqli_query($konek, "select * from pengumuman");
	$i=1;
	if((mysqli_num_rows($query))==0){
		echo "Tidak ada pengumuman!";
	}else{
?>		
<table border="1">
	<tr>
		<th> No </th>
		<th> Judul Pengumuman </th>
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
		<td> <?php echo $ambil[3]; ?> </td>
		<td>
			<?php
				echo "
				<a href= 'Ubah.php?id=pengumuman+$id'>
					Ubah
				</a>
				";
			?>
		</td>
		<td>
			<?php
				echo "
				<a href= 'proses/hapusData.php?id=pengumuman+$id'>
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