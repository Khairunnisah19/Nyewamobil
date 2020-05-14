<?php
function ifunset($arr, $key, $default) {
	return isset($arr[$key])? $arr[$key] : $default;
}
function ifunsetempty($arr, $key, $default) {
	return !isset($arr[$key]) || empty($arr[$key])? $default : $arr[$key];
}
function ifunsetemptynull($arr, $key, $default) {
	return !isset($arr[$key]) || empty($arr[$key]) || $arr[$key]=='null' || $arr[$key]=='undefined'? $default : $arr[$key];
}

function ifempty($val, $default) {
	return empty($val)? $default : $val;
}
function convert_tgl($tgl,$search,$replace,$format){
	if(strlen($tgl) == 10){
		$date = str_replace($search, $replace, $tgl);
		return date($format, strtotime($date));
	} else{
		return $tgl;
	}
}
function toYmd($tgl){
	if(strlen($tgl) == 10){
		$date = str_replace('/', '-', $tgl);
		return date('Y-m-d', strtotime($date));
	} else{
		return $tgl;
	}
}
function echojson2($data) {
	header("Content-Type: application/json");
	
	if (!is_string($data)) {
		$data = json_encode($data);
	}
	
	echo $data;
}
function echojson($data,$cb){
	return $cb.'('.json_encode($data).');';
}
function ubah_tgl($tgl,$pemisah,$f){
	if(strlen($tgl) > 1){
		if($f == 1){ // 1 = d/m/yyyy <=> m/d/yyyy
			$date1 = substr($tgl,0,10);
			$date2 = explode($pemisah,$date1);
			$date3 = $date2[1].'/'.$date2[0].'/'.$date2[2];
			return $date3;
		}elseif($f == 2){ //   d/m/yyyy => yyyy/m/d
			$date1 = substr($tgl,0,10);
			$date2 = explode($pemisah,$date1);
			$date3 = $date2[2].'/'.$date2[1].'/'.$date2[0];
			return $date3;
		}elseif($f == 3){ //  m/d/yyyy => yyyy/m/d
			$date1 = substr($tgl,0,10);
			$date2 = explode($pemisah,$date1);
			$date3 = $date2[2].'/'.$date2[0].'/'.$date2[1];
			return $date3;
		}elseif($f == 4){ //  yyyy/m/d => d/m/yyyy 
			$date1 = substr($tgl,0,10);
			$date2 = explode($pemisah,$date1);
			$date3 = $date2[2].'/'.$date2[1].'/'.$date2[0];
			return $date3;
		}elseif($f == 5){ //  yyyy/m/d => m/d/yyyy 
			$date1 = substr($tgl,0,10);
			$date2 = explode($pemisah,$date1);
			$date3 = $date2[1].'/'.$date2[2].'/'.$date2[0];
			return $date3;
		}
	}else{
		return '';
	}
}
function convert_bulan($id){
		switch($id){
			case 1:
				return 'Januari';
				break;
			case 2:
				return 'Februari';
				break;
			case 3:
				return 'Maret';
				break;
			case 4:
				return 'April';
				break;
			case 5:
				return 'Mei';
				break;
			case 6:
				return 'Juni';
				break;
			case 7:
				return 'Juli';
				break;
			case 8:
				return 'Agustus';
				break;
			case 9:
				return 'September';
				break;
			case 10:
				return 'Oktober';
				break;
			case 11:
				return 'Nopember';
				break;
			case 12:
				return 'Desember';
				break;
		}
	}
	function convert_hari($id){
		switch($id){
			case 1:
				return 'Senin';
				break;
			case 2:
				return 'Selasa';
				break;
			case 3:
				return 'Rabu';
				break;
			case 4:
				return 'Kamis';
				break;
			case 5:
				return 'Jumat';
				break;
			case 6:
				return 'Sabtu';
				break;
			case 7:
				return 'Minggu';
				break;
		}
	}
	function get_semester($id){
		switch($id){
			case 1:
				return 1;
				break;
			case 2:
				return 1;
				break;
			case 3:
				return 1;
				break;
			case 4:
				return 1;
				break;
			case 5:
				return 1;
				break;
			case 6:
				return 1;
				break;
			case 7:
				return 2;
				break;
			case 8:
				return 2;
				break;
			case 9:
				return 2;
				break;
			case 10:
				return 2;
				break;
			case 11:
				return 2;
				break;
			case 12:
				return 2;
				break;
		}
	}