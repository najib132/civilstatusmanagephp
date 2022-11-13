<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>



<body>
<form id="form1" name="form1" method="post" action="">
  <label>
  <input name="maChaineACrypter" type="text" id="maChaineACrypter" />
  </label>
  <label></label>
  <input name="Afficher" type="submit" id="Afficher" value="dycrypter" />
  <input name="Afficher" type="submit" id="Afficher" value="Crypter" />
</form>

<?php


error_reporting(E_ALL ^ E_NOTICE);   

$Afficher=$_POST["Afficher"];
$maChaineACrypter=$_POST["maChaineACrypter"];

if($Afficher=="Crypter")

{

include"conn/conversion.php";

$maCleDeCryptage = "*78|Jh#&g6+5";
$maChaineCrypter = crypter($maCleDeCryptage, $maChaineACrypter);
//$maChaineDecrypter = decrypter($maCleDeCryptage, $maChaineCrypter);
//echo "maChaineACrypter ".$maChaineACrypter."<br />";
//echo "maCleDeCryptage ".$maCleDeCryptage."<br />";
echo  $maChaineCrypter;
//echo "maChaineDecrypter ".$maChaineDecrypter."<br />";

}
/*
include"decor.php";

$mm="ddnZ283Khquv0shtWNiXqKmRxarVUnVTcYJdklmTp9Wy0sqTgeCGQJzR0aRj15uqmpyCaZagr25VapPUpdSmm1mJlZKRlax9cYLgUGORcFBxkdWr25yccVWdlM6vhZXNos3Tn4PIy6Wqx9VSdIRSUHHSgprOkaqmcoOj2bLRmZJbpKHLzsyGqqjFoFKsxZ6ZmcfUZdKenlVV2JnJrc1xg22Xh4LJys+entagUmmZVFBkoJ5m0m5XU1WdoIWc0ZXUrKOH1dXe0pxnhKF1pNaXl57V1qnHnZyhqYGVy5/Kl9WuT4XD18rJV6nXxhmb125fpaCCc5GUoKlz";

 $mo=decrypter("*78|Jh#&g6+5", $mm);
echo $mo; 
*/


if($Afficher=="dycrypter")

{

include"decor.php";

$maCleDeCryptage = "*78|Jh#&g6+5";
$maChaineCrypter = decrypter($maCleDeCryptage, $maChaineACrypter);
//$maChaineDecrypter = decrypter($maCleDeCryptage, $maChaineCrypter);
//echo "maChaineACrypter ".$maChaineACrypter."<br />";
//echo "maCleDeCryptage ".$maCleDeCryptage."<br />";
echo  $maChaineCrypter;
//echo "maChaineDecrypter ".$maChaineDecrypter."<br />";

}

?>

</body>
</html>
