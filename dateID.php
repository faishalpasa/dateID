<?php

function dateID($date, $printHour=true){
	$months = array (
		1 => 'Januari',
		2 => 'Februari',
		3 => 'Maret',
		4 => 'April',
		5 => 'Mei',
		6 => 'Juni',
		7 => 'Juli',
		8 => 'Agustus',
		9 => 'September',
		10 => 'Oktober',
		11 => 'November',
		12 => 'Desember'
	);
  
  $expDateTime = explode(' ', $date);
	$expDate = explode('-', $expDateTime[0]);
	
	// var expDate[0] = day
	// var expDate[1] = month
	// var expDate[2] = year
  
  $date = $expDate[2] . ' ' . $months[ (int)$expDate[1] ] . ' ' . $expDate[0];
  $time = substr($expDateTime[1], 0, -3);
  
 	if($printHour == true){
 		return $date. ' ' . $time;
 	}else{
	 	return $date;
	}
}
