<?php
	include "proses/konek.php";
	include "nav.php";
?>
<br><br><br>
<h1> Home </h1>

<?php
	$bulanAngkaArray = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
	$bulanArray = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des");
	$hariIngArray = array("Mon", "Tue", "Wed", "Thr", "Fri", "Sat", "Sun");
	$hariArray = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");
		
		
	$query = mysqli_query($konek, "select * from pengumuman");
	if((mysqli_num_rows($query))==0){
		echo "Tidak ada pengumuman!";
	}else{
		while($ambil = mysqli_fetch_array($query) ){
			$tanggalPenuh = date('D d m Y', strtotime($ambil[3]));
			$hari = substr($tanggalPenuh,0,3);
			$tanggal = substr($tanggalPenuh,4,2);
			$bulan = substr($tanggalPenuh,7,2);
			$tahun = substr($tanggalPenuh,10,4);
			
			for($i=0 ; $i<count($hariIngArray) ; $i++){
				if($hari == $hariIngArray[$i]){
					$hari = $hariArray[$i];
				}
			}
			
			for($i=0 ; $i<count($bulanAngkaArray) ; $i++){
				if($bulan == $bulanAngkaArray[$i]){
					$bulan = $bulanArray[$i];
				}
			}
			
			
?>
	<table>
		<tr>
			<td>
				<h2> <?php echo $hari." ".$tanggal?> </h2>
				<h2> <?php echo $bulan; ?> </h2>
			</td>
			<td>
				<h2> <?php echo $ambil[1]; ?> </h2>
				<h4> <?php echo $ambil[2]; ?> </h4>
			</td>
		 <br>
		</tr>
	</table>
<?php
	}}
?>



---------------------------------------------------------------------------------------------




<?php
	$query = mysqli_query($konek, "select * from berita");
	if((mysqli_num_rows($query))==0){
		echo "Tidak ada berita!";
	}else{
		while($ambil = mysqli_fetch_array($query) ){
			$tanggalPenuh = date('D d m Y', strtotime($ambil[3]));
			$hari = substr($tanggalPenuh,0,3);
			$tanggal = substr($tanggalPenuh,4,2);
			$bulan = substr($tanggalPenuh,7,2);
			$tahun = substr($tanggalPenuh,10,4);
			
			for($i=0 ; $i<count($hariIngArray) ; $i++){
				if($hari == $hariIngArray[$i]){
					$hari = $hariArray[$i];
				}
			}
			
			for($i=0 ; $i<count($bulanAngkaArray) ; $i++){
				if($bulan == $bulanAngkaArray[$i]){
					$bulan = $bulanArray[$i];
				}
			}
			
			
?>
	<table>
		<tr>
			<td>
				<h2> <?php echo $hari." ".$tanggal?> </h2>
				<h2> <?php echo $bulan; ?> </h2>
			</td>
			<td>
				<h2> <?php echo $ambil[1]; ?> </h2>
				<h4> <?php echo $ambil[2]; ?> </h4>
			</td>
		 <br>
		</tr>
	</table>
<?php
	}}
?>