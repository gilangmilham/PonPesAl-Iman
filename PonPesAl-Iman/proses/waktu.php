<?php
	
	
		$bulanAngka = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
		$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des");
		$hariIng = array("Mon", "Tue", "Wed", "Thr", "Fri", "Sat", "Sun");
		$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");
		$totalHari = count($hari);
		$totalBulan = count($bulan);
	
	function bulan($a){
		echo global $totalBulansssssssssssssssss;
		for($i=0 ; $i < $totalBulan ;$i++){
			if($a == $bulanAngka[i]){
				echo $bulan[i];
			}
		}
	}
	
	echo bulan(2);

?>