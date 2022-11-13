<?php



function rounder($value){
 $buffer = $value * 100;
 $rounded = round($buffer);
 $buffer = $rounded / 100;
 $point_pos = strpos($buffer, ".");
 if ($point_pos == FALSE)
     $buffer .= ".00";
 else {
   if ((strlen($buffer) - $point_pos) == 2)
        $buffer .= "0";
 }
 return $buffer;
}


/*
function diff_date($fin, $debut) {

		  
 $diff = round((strtotime($fin) - strtotime($debut))/(60*60*24*30)-1);
  
  $diff=$diff+1;
  return $diff;
}

*/

//echo diff_date("2014-05-03","2013-06-30");
	
	function advancedRmdir($path) { //mappát töröl akkor is, ha nem üres
    $origipath = $path;
    $handler = opendir($path);
    while (true) {
        $item = readdir($handler);
        if ($item == "." or $item == "..") {
            continue;
        } elseif (gettype($item) == "boolean") {
            closedir($handler);
            if (!@rmdir($path)) {
                return false;
            }
            if ($path == $origipath) {
                break;
            }
            $path = substr($path, 0, strrpos($path, "/"));
            $handler = opendir($path);
        } elseif (is_dir($path."/".$item)) {
            closedir($handler);
            $path = $path."/".$item;
            $handler = opendir($path);
        } else {
            unlink($path."/".$item);
        }
    }
    return true;
}

function crypter($maCleDeCryptage="", $maChaineACrypter){
if($maCleDeCryptage==""){
$maCleDeCryptage=$GLOBALS['PHPSESSID'];
}
$maCleDeCryptage = md5($maCleDeCryptage);
$letter = -1;
$newstr = '';
$strlen = strlen($maChaineACrypter);
for($i = 0; $i < $strlen; $i++ ){
$letter++;
if ( $letter > 31 ){
$letter = 0;
}
$neword = ord($maChaineACrypter{$i}) + ord($maCleDeCryptage{$letter});
if ( $neword > 255 ){
$neword -= 256;
}
$newstr .= chr($neword);
}
return base64_encode($newstr);
}


		function diff_minutea($a,$b)
			{
			
		$tmp1=explode(" ",$a);
		$tmp2=explode(" ",$b);
		
		$heuredebut=$tmp1[1];
		$datedebut=$tmp1[0];
		
		$heurefin=$tmp2[1];
		$datefin=$tmp2[0];

		
		$hd = explode(":", $heuredebut);
		$hf = explode(":", $heurefin);
		
		$dd = explode("-", $datedebut);
		$df = explode("-", $datefin);

$year1=$dd[0];
$mois1=$dd[1];
$jour1=$dd[2];

$heure1=$hd[0];
$minute1=$hd[1];

$year2=$df[0];
$mois2=$df[1];
$jour2=$$df[2];

$heure2=$hf[0];
$minute2=$hf[1];



$dur=$heure1*60+$minute1-$heure2*60-$minute2;
			

		return $dur;
		//echo $duree;

	}
	

	

function convertDate($date)
{
if($date!="") {
     $tabDate = explode('/' , $date);
     $enDate  = $tabDate[2].'-'.$tabDate[1].'-'.$tabDate[0];
     return $enDate;
}}

function convertDate_f($date)
{
if($date!="") {
     $tabDate = explode('-' , $date);
     $enDate  = $tabDate[2].'/'.$tabDate[1].'/'.$tabDate[0];
     return $enDate;
}}


//echo convertDate("12/11/1982");




		function yearofdate($a)
			{
			
		$tmp=explode("-",$a);
		
$year=$tmp[0];
		return $year;

	}
	

		function moisofdate($a)
			{
			
		$tmp=explode("-",$a);
		
$mois=$tmp[1];
		return $mois;

	}




		function jourofdate($a)
			{
			
		$tmp=explode("-",$a);
		
$jour=$tmp[2];
		return $jour;

	}
	
	
	


?>

