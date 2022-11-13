<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);     include"conn/connexion.php";
$fichier="../../prog"; //OUVRE LE FICHIER compteur.txt
if((file_exists($fichier)==FALSE))
{
include"toping.php";
}
else{

?>

<?php 
date_default_timezone_set('GMT');      $heure=date("H");

// DEMARRE LA SESSION

		
    

// S&eacute;curit&eacute;

$Rca = "SELECT date from administration  ";
$result3 = @mysql_query($Rca,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);
if($n==0)
{ include"ajout_cha.php";
}
else
{
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>    
<meta name="description" content="Logiciel d'état civil, Programa civil, bureaux état civil " />
<meta name="keywords" content="Logiciel d'état civil, برنامج تسيير مكاتب الحالة المدنية, Programa civil, bureaux état civil, تصاريح الولادات, تصاريح الوفيات, البطائق الشخصية, البيانات الهامشية, النسخ الكاملة,نقل الرسوم, Sud programa, état Civil" />
<meta name="y_key" content="54f0b2304b9ae30e"  />
<meta name="Robots" content="index, follow, all" />
<meta name="revisit-after" content="7 days" />

  <?php   

$Submit=$_POST["Submit"];
//echo $Submit;
if ($Submit!="--------فتح البرنامج--------")

 { 
 


 ?>
  <style type="text/css">
<!--
.style31 {font-weight: bold}
.style32 {font-weight: bold}
.style33 {color: #676760}
-->
  </style>


  
 

<style type="text/css">
<!--
.style10 {color: #FFFFFF; font-weight: bold; }
.style24 {font-size: 18px}
.style13 {font-size: 14px}
.style25 {
	color: #707070;
	font-style: italic;
	font-size: 15px;
}
.style27 {
	font-size: 30px;
	color: #676767;
	font-weight: bold;
}
.style29 {font-size: 16px}
-->
</style>
</head>

<body>
<div align="center">
  <table width="1000">
    <tr>
      <td width="170"><div align="center"><img src="logo/2.jpg" width="170" height="130"></div></td>
      <td width="741"><img src="Programa Civil.bmp" alt="Programa civil" width="650" height="130"></td>
      <td width="167"><div align="center"><img src="logo/2.jpg" width="170" height="130"></div></td>
    </tr>
  </table>
  
  
  <table width="1000">
    <tr>
      <td bgcolor="#EFEFEF"><div align="center"><span class="style25 style13"> Civil Programa : Ce Produit est prot&eacute;g&eacute; contre toute forme de piratage conform&eacute;ment &agrave; la loi  du 14 f&eacute;vrier 2006 article 60 N&deg; 34.05</span></div></td>
    </tr>
  </table>
  <table width="1000">
    <tr>
      <td bgcolor="#EFEFEF"><div align="center">
        <table width="1000">
          <tr>
            <td width="165" height="611" bgcolor="#EFEFEF">
              <div align="center">
                <div align="left">
                  <div align="left">
                    <p><img src="Images/ligne.jpg" width="150" height="1"><img src="Album/rubriqu.jpg" width="150" height="17"></p>
                  </div>
                  <table width="150" border="0" cellpadding="0" cellspacing="5">
                    <tr valign="top">
                      <td align="left" width="15"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td align="left" width="105"><span class="style13">Déclarations naissances</span> </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5">
                    <tr valign="top">
                      <td align="left" width="15"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td align="left" width="105"><span class="style13">Déclaration Décès </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5">
                    <tr valign="top">
                      <td align="left" width="15"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="105" align="left"><span class="style13">Fiches individuelles </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5" bgcolor=""#EFEFEF">
                    <tr valign="top">

                      <td align="left" width="15"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="105" align="left" bgcolor=""#EFEFEF"><p class="style13">Mentions marginales </p></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5" bgcolor=""#EFEFEF">
                    <tr valign="top" align="left">
                      <td width="15"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="105" bgcolor=""#EFEFEF"><p class="style13">Jugements </p></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5" bgcolor=""#EFEFEF">
                    <tr valign="top">
                      <td align="left" width="15"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="105" align="left" bgcolor=""#EFEFEF><span class="style13">Transcriptions</span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5" bgcolor=""#EFEFEF">
                    <tr valign="top">
                      <td align="left" width="15"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="105" align="left" bgcolor=""#EFEFEF><span class="style13">Les pièces jointes </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5" bgcolor=""#EFEFEF">
                    <tr valign="top">
                      <td width="15" align="left" bgcolor=""#EFEFEF"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="105" align="left" bgcolor=""#EFEFEF><span class="style13">Les extraits  </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5" bgcolor=""#EFEFEF">
                    <tr valign="top">
                      <td align="left" width="15"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="105" align="left" bgcolor=""#EFEFEF"><span class="style13">Les copies intégrales </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5" bgcolor=""#EFEFEF">
                    <tr valign="top">
                      <td align="left" width="15"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="105" align="left" bgcolor=""#EFEFEF"><span class="style13">Les Listes </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5" bgcolor=""#EFEFEF">
                    <tr valign="top">
                      <td align="left" width="15"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="105" align="left" bgcolor=""#EFEFEF"><span class="style13">Les attestations </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5" bgcolor=""#EFEFEF">
                    <tr valign="top">
                      <td align="left" width="15"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="105" align="left" bgcolor=""#EFEFEF"><span class="style13">Les rapports </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5" bgcolor=""#EFEFEF">
                    <tr valign="top">
                      <td width="17" align="left" bgcolor=""#EFEFEF"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="128" align="left" bgcolor=""#EFEFEF"><span class="style13">Statistiques  </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5" bgcolor=""#EFEFEF">
                    <tr valign="top">
                      <td width="17" align="left" bgcolor=""#EFEFEF"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="128" align="left" bgcolor=""#EFEFEF"><span class="style13">Fiches de dépouillement </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5">
                    <tr valign="top">
                      <td align="left" width="17"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="128" align="left"><span class="style13">Hiérarchie administrative </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5">
                    <tr valign="top">
                      <td align="left" width="17"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="128" align="left"><span class="style13">Gestion des annexes </span></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellpadding="0" cellspacing="5">
                    <tr valign="top">
                      <td align="left" width="17"><p align="left"><img src="Album/fleche2.jpg" width="15" height="15"></p></td>
                      <td width="128" align="left"><span class="style13">Sauvegarde de la base de données </span></td>
                    </tr>
                  </table>
                </div>
              </div>
              </td>
            <td width="654" bgcolor="#FFFFFF"><div align="center">
              <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return Validerfrm()">
                <div align="center">
                  <p>&nbsp;</p>
                  <p class="style27 style33">برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما</p>
                  <table width="524" border="1" cellpadding="0" cellspacing="0" bordercolor="#A8A8A8" bgcolor="#EFEFEF">
                    <tr>
                      <td colspan="3" bgcolor="#FFFFFF"><div align="center" class="style29"><strong><span class="style10">
                          <input name="login" type="text" id="login" value="1">
                      </span></strong></div></td>
                      <td width="170" bgcolor="#FFFFFF"><div align="center" class="style29"><strong> (CIN) &#1573;&#1587;&#1605; &#1575;&#1604;&#1605;&#1587;&#1578;&#1593;&#1605;&#1604;</strong></div></td>
                    </tr>
                    <tr>
                      <td colspan="3" bgcolor="#FFFFFF"><div align="center" class="style29"><strong>
                          <input name="password" type="password" id="password" autocomplete="off" value="1" />
                      </strong></div></td>
                      <td bgcolor="#FFFFFF"><div align="center" class="style29"><strong>&#1603;&#1604;&#1605;&#1577; &#1575;&#1604;&#1605;&#1585;&#1608;&#1585;</strong></div></td>
                    </tr>
                    <tr>
                      <td width="128" bgcolor="#FFFFFF"><div align="right" class="style29"><strong>
                        عون أو مساعد
                              <input name="champs" type="radio" value="0">
                      </strong></div></td>
                      <td width="91" bgcolor="#FFFFFF"><div align="center" class="style29 style31">
                        <div align="right">ضابط
                          <input name="champs" type="radio" value="1" checked>
                        </div>
                      </div></td>
                      <td width="125" bgcolor="#FFFFFF"><div align="right"><strong> رئيس المصلحة
                            <input name="champs" type="radio" value="2">
                      </strong></div></td>
                      <td bgcolor="#FFFFFF"><div align="center" class="style29"><strong>المسؤول</strong></div></td>
                    </tr>
                    <tr>
                      <td colspan="3" bgcolor="#FFFFFF"><div align="center" class="style29 style32">
                        <div align="center">
                          <select name="bureau" id="bureau">
                            <?php   
			   	$Requete3 = "select annexe1, id from annexe  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                            <option value="<?php echo $row[1]; ?>"><?php echo $row[0]; }?></option>
                          </select>
                        </div>
                      </div></td>
                      <td bgcolor="#FFFFFF"><div align="center" class="style29"><strong>&#1575;&#1604;&#1605;&#1603;&#1578;&#1576;</strong></div></td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#FFFFFF"><div align="center" class="style29"><strong><font color="#000000">
                          <input name="Submit" type="submit" class="style29" id="Submit" value="--------فتح البرنامج--------" />
                        </font></strong></div>
                          <div align="center" class="style29"></div></td>
                    </tr>
                  </table>
                  <p><font color="#000000">
                  <label></label>
                      </font></p>
                  </div>
              </form>
            </div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p></td>
            <td width="157" bgcolor="#EFEFEF"><div align="center">
              <div align="left">
                <div align="left">
                  <p><img src="Album/rubriqu.jpg" width="150" height="17"></p>
                </div>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="113"><p align="right" class="style29">تصاريح الولادات</p></td>
                    <td align="left" width="22"><div align="center"><img src="Album/fleche.jpg" width="15" height="15"></div></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="119"><p align="right" class="style29">تصاريح الوفيات</p></td>
                    <td align="left" width="16"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29">البطائق الشخصية</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right"><span class="style29"></span>البيانات الهامشية</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29">الأحكام</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29">نقل الرسوم</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29">الوثائق المرافقة للرسم</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29">النسخ الموجزة</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29">النسخ الكاملة</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29">الشواهد المختلفة</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29">التقارير</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29">اللوئح</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29">احصائيات</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29"><span class="style29">جدادة الفرز</span></p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><p align="right" class="style29">السلم الإداري</p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td align="left" width="117"><div align="right"><span class="style29">الرسوم المبيانية</span></div></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td width="117" height="19" align="left"><p align="right" class="style29">نظام الملحقات التابعة للمركز<br>
                    </p></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                <table width="150" border="0" cellpadding="0" cellspacing="5">
                  <tr valign="top">
                    <td width="117" height="19" align="left"><div align="right">تسجيل قاعدة البيانات</div></td>
                    <td align="left" width="18"><img src="Album/fleche.jpg" width="15" height="15"></td>
                  </tr>
                </table>
                </div>
            </div></td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
  <table width="1008" bgcolor="#EFEFEF">
    <tr bgcolor="#006aff" height="27">
      <td height="34" bgcolor="#EFEFEF"#EFEFEF"><div align="center"><span class="style13 class1"><em><span class="class1 style24 style13">Soci&eacute;t&eacute; SUD Programa Rue Hassan II, App Elkhalil N&deg; 48 &eacute;tage 5 G&eacute;uliz Marrakech - Maroc<br />
      TEL: 0524 432 173 GSM : 0666 30 47 47 - E-Mail: sudprograma@gmail.com. Site: <a href="http://sudprograma.com" target="_blank">www.sudprograma.com</a></span></em></span></div></td>
    </tr>
  </table>
</div>
</body>
</html>
<?php }else{

//


$password=$_POST["password"];
$login=$_POST["login"];
$bureau=$_POST["bureau"];
$champs=$_POST["champs"];


	 include"conn/conversion.php";
	 
$password=crypter("*78|Jh#&g6+5",$password);


 $ip=$_SERVER['REMOTE_ADDR'];
$pu=0;
$now=date("Y-m-d");


		$Requete3 = "SELECT nombre from ip where `data`='".$champs."' and `ip`='".$ip."' and `date`='".$now."' ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me fflors de lagg1 lecture de la table <br>".mysql_error());
	$row3 = mysql_fetch_array($result3);
			$n11=mysql_num_rows($result3);
if($n11==0)
{
$date=date("Y-m-d");
	$Requete =  "INSERT INTO `ip` (`ip`,`heure`,`nombre`,`date`,`data`) VALUES ('$ip','$heure','$pu','$date','$champs');"; 
	$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;megg d'execution2 de la requete <br>".mysql_error()); 	

}

$Requete =  "DELETE FROM ip where  `date`!='$now'  and `ip`='".$ip."' and `data`='".$champs."' ;";
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution wwde3 la requete d'identification<br>".mysql_error()); 


	

$hh=$row3[nombre];

if($hh>4)
{ include"bloque.php";
}
else
{

if($champs==2) $Requete=" SELECT login FROM administration WHERE `password`='$password' and `login`='$login' ; "; //ADM
if($champs==1 || $champs==0) $Requete=" SELECT id, cin,nom,prenom, nom_f, prenom_f,type FROM utilisateurs WHERE `password`='$password' and `cin`='$login' and `type`='".$champs."' and `actif`=0 ;  "; //UTILISATEUR

 	mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me 4d'execution de la requete <br>".mysql_error());
$lignes = mysql_num_rows($result);

	$ro = mysql_fetch_array($result);
	$idf="$ro[nom] $ro[prenom]";
	$idf_f="$ro[nom_f] $ro[prenom_f]";
	$cin=$ro[cin];
	$idf_m=$ro[id];
	$resp=$ro[type];
	
if ($lignes<1)
{
 $ip=$_SERVER['REMOTE_ADDR'];
	
 $date=date("Y-m-d");


		$Requete3 = "SELECT nombre from ip where `data`='".$champs."' and `ip`='".$ip."' and `date`='".$date."'  ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me5 lors de lagg lecture de la table <br>".mysql_error());
	$row3 = mysql_fetch_array($result3);
$pu=$row3[nombre];
$pu=$pu+1;

$Requete =  "UPDATE ip SET  `nombre`='$pu' where `ip`='$ip' and `date`='$date' and `data`='$champs' ;";
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me 6d'execution de la requete <br>".mysql_error()); 

 echo"<center><font color=\"#FF0000\"><b>هناك خطأ في اسم المستعمل او في كلمة المرور<br>حاول مرة أخرى</b></font><br><br></center>";
}

else{

 $Requete3 = "select nom_resp,nom_resp_a,cercle1,cercle,pays,pays1,ministre,ministre1,province,province1,section,section1,region,region1 from administration  ";
 	mysql_query("SET NAMES 'UTF8' ");

$res = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me 7lors de la lecture de la table<br>".mysql_error());
	$ros = mysql_fetch_array($res);

$_SESSION['pays'] = $ros[pays];
$_SESSION['pays1'] = $ros[pays1];

$_SESSION['ministre'] = $ros[ministre];
$_SESSION['ministre1'] = $ros[ministre1];

$_SESSION['province'] = $ros[province];
$_SESSION['province1'] = $ros[province1];

$_SESSION['region'] = $ros[region];
$_SESSION['region1'] = $ros[region1];

$_SESSION['section'] = $ros[section];
$_SESSION['section1'] = $ros[section1];

$_SESSION['cercle'] = $ros[cercle];
$_SESSION['cercle1'] = $ros[cercle1];


$_SESSION['redaction'] = $ros[nom_resp];
$_SESSION['redaction_a'] = $ros[nom_resp_a];


if($ros[region1]=="الجماعة القروية") $_SESSION['section2'] = "للجماعة القروية";
if($ros[region1]=="بلدية") $_SESSION['section2'] = "لبلدية";


//$_SESSION['section'] = $ros[section];
//$_SESSION['section1'] = $ros[section1];


 $Requete3 = "select annexe,annexe1,officier,officier_a from annexe where `id`='".$bureau."' ";
 	mysql_query("SET NAMES 'UTF8' ");

$res = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me844 lors de la lecture de la table<br>".mysql_error());
	$ross = mysql_fetch_array($res);


$_SESSION['annexe'] = $ross[annexe];
$_SESSION['annexe1'] = $ross[annexe1];
$_SESSION['off'] = $ross[officier];
$_SESSION['off1'] = $ross[officier_a];



$_SESSION['idf_m'] = $idf_m;
$_SESSION['idf'] = $idf;
$_SESSION['idf_f'] = $idf_f;
$_SESSION['cin'] = $cin;


if($champs==2)
{
        $permission=md5("c-**#mamapc-**#");
				
$_SESSION['permission'] = $permission;

 include"index_adm.php";
 }
if($champs==1) 
{
        $permission=md5("c-**#bobom#**-c");
				
$_SESSION['permission'] = $permission;
 include"index_civil.php";


}


if($champs==0) 
{
        $permission=md5("M-**#bobom#**-M");
				
$_SESSION['permission'] = $permission;
 include"index_root.php";


}




}}}

?>

<?php

}}
?>