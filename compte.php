<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);      include"conn/connexion.php";

$permission=$_SESSION["permission"];                                                                 $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  


$pays=$_SESSION["pays"];      
$pays1=$_SESSION["pays1"];  

$ministre=$_SESSION["ministre"];      
$ministre1=$_SESSION["ministre1"];      

$province=$_SESSION["province"];      
$province1=$_SESSION["province1"];      

$annexe=$_SESSION["annexe"];      
$annexe1=$_SESSION["annexe1"];     $region=$_SESSION["region"];  $region1=$_SESSION["region1"];      

   
 include"accesclient1.php";
if ($permission==securite4($tim4)) { include("div_admin.php");  

ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);

?>

<?php

include"conn/conversion.php";


$valider=$_POST["valider"];
if ($valider!="إضافة") { ?>



 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      
<script type="text/javascript" src="js/arabic.js"></script>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>


</head>

<body>

  
  <div id="Layer1">
  
          <div id="background" class="background" style="display: none;"></div>
        <div id="clv_arb" class="clv_arb" style="display: none;"></div>

  
  </div>
  <script type="text/javascript">

function Validerfrm()
{

var nom = document.form1.nom.value;
var prenom = document.form1.prenom.value;
var cin = document.form1.cin.value;
var email = document.form1.email.value;
var password = document.form1.password.value;

var prenom_f = document.form1.prenom_f.value;
var nom_f = document.form1.nom_f.value;

		
if(nom=="") 
		{ 
		
        alert ('Vérifier le Champ NOM'); 
        document.form1.nom.focus(); 
        return false; 
    	} 
		
if(prenom=="") 
		{ 
        alert ('Vérifier le Champ PRENOM'); 
        document.form1.prenom.focus(); 
        return false; 
    	} 
		
if(cin=="" || !isNaN(cin)) 
		{ 
        alert ('Vérifier le Champ CIN'); 
        document.form1.cin.focus(); 
        return false; 
    	} 
		
		
						
	if(email == "") 
		{ 
        alert ('Vérifier le Champs TEL ou GSM'); 
        document.form1.email.focus(); 
        return false; 
    	} 
		
			if(password == "") 
		{ 
        alert ('Vérifier le Champs mot de pass'); 
        document.form1.password.focus(); 
        return false; 
    	} 



if(nom_f=="" || nom_f=="Nom famille") 
		{ 
		
        alert ('Vérifier le Champ nom_f'); 
        document.form1.nom_f.focus(); 
        return false; 
    	} 
		
if(prenom_f=="" || nom_f=="Prénom") 
		{ 
        alert ('Vérifier le Champ PREnom_f'); 
        document.form1.prenom_f.focus(); 
        return false; 
    	} 


	
				
 }
		
		
///////////////////////////////////

    </script>
  <h2 align="center">اضافة حساب</h2>
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return Validerfrm()">
  <p align="center">
  
  <table width="47%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">
    <tr bgcolor="#FFFF66">
      <td height="23" bgcolor="#FFFFFF"><div align="center"><strong>
        <input name="nom_f" type="text" id="nom_f" value="Nom famille" size="25" maxlength="25" />
      </strong></div></td>
      <td bgcolor="#FFFFFF"><div align="center"><strong>
        <input name="nom" type="text" id="nom" dir="rtl" size="25" maxlength="25" />
      </strong> <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom')" /> </div></td>
      <td bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    </tr>
    <tr bgcolor="#FFFF66">
      <td height="23" bgcolor="#FFFFFF"><div align="center"><strong>
        <input name="prenom_f" type="text" id="prenom_f" value="Prénom" size="25" maxlength="25" />
      </strong></div></td>
      <td bgcolor="#FFFFFF">
	  
	  
	  
	  
	  
	  
        <div align="center"><strong>
          <input name="prenom" type="text" id="prenom" dir="rtl" size="25" maxlength="25" />
      </strong> <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prenom')" /> </div></td>
      <td bgcolor="#EFEFEF"><div align="center">&#1575;&#1604;&#1575;&#1587;&#1605; &#1575;&#1604;&#1588;&#1582;&#1589;&#1610; *</div></td>
    </tr>
    <tr bgcolor="#FFFF66">
      <td height="23" bgcolor="#FFFFFF"><div align="center"></div></td>
      <td bgcolor="#FFFFFF"><div align="center"><strong>
        <input name="cin" type="text" id="cin" size="25" maxlength="14" />
      </strong></div></td>
      <td bgcolor="#EFEFEF"><div align="center">&#1585;&#1602;&#1605; &#1575;&#1604;&#1576;&#1591;&#1575;&#1602;&#1577; &#1575;&#1604;&#1608;&#1591;&#1606;&#1610;&#1577;*</div></td>
    </tr>
    <tr bgcolor="#FFFF66">
      <td height="23" bgcolor="#FFFFFF"><div align="center"></div></td>
      <td bgcolor="#FFFFFF"><div align="center">
        <input name="email" type="text" id="email" size="25" maxlength="25" />
      </div></td>
      <td bgcolor="#EFEFEF"><div align="center">&#1585;&#1602;&#1605; &#1575;&#1604;&#1607;&#1575;&#1578;&#1601;</div></td>
    </tr>
    <tr bgcolor="#FFFF66"> 
      <td width="221" height="23" bgcolor="#FFFFFF"><div align="center"></div></td>
      <td width="220" bgcolor="#FFFFFF">
        <div align="center">
          <input name="password" type="password" id="password" size="25" maxlength="25" />
      </div></td>
      <td width="162" bgcolor="#EFEFEF"><div align="center">&#1603;&#1604;&#1605;&#1577; &#1575;&#1604;&#1587;&#1585; </div></td>
    </tr>
    <tr bgcolor="#FFFF66">
      <td height="23" bgcolor="#FFFFFF"><div align="right">
        عون أو مساعد
          <input name="type" type="radio" value="0">
      </div></td>
      <td bgcolor="#FFFFFF"><div align="right">
          ضابط أو ضابط بالتفويض
          <input name="type" type="radio" value="1" checked>
        </div>
      </label></td>
      <td bgcolor="#EFEFEF"><div align="center">صفة المستعمل</div></td>
    </tr>
    <tr bgcolor="#FFFF66">
      <td height="23" bgcolor="#FFFFFF"><div align="right">لا
        <input name="supprimer" type="radio" value="1">
      </div></td>
      <td bgcolor="#FFFFFF"><div align="right"> نعم
        <input name="supprimer" type="radio" value="0" checked>
        </div>
          </label></td>
      <td bgcolor="#EFEFEF"><div align="right">إعطاء حق حذف الرسوم و البيانات الهامشية</div></td>
    </tr>
  </table>
  
            	


  <div align="center"><span class="style31">ملاحظة</span> : العون أو المساعد لايعطى له إلا حق الطباعة  </div>
  <div align="center">
    <p>
      <input name="valider" type="submit" class="style30" id="valider" value="إضافة"/>
    </p>
  </div>
  </form>
  
  
  <div align="center">
    <table width="66%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">
      <tr>
        <td width="181" height="23" bgcolor="#CCCCCC"><div align="center">&#1585;&#1602;&#1605; &#1575;&#1604;&#1607;&#1575;&#1578;&#1601;</div></td>
        <td width="161" bgcolor="#CCCCCC"><div align="center">&#1585;&#1602;&#1605; &#1575;&#1604;&#1576;&#1591;&#1575;&#1602;&#1577; &#1575;&#1604;&#1608;&#1591;&#1606;&#1610;&#1577;*</div></td>
        <td width="242" bgcolor="#CCCCCC"><div align="center">الإسم الكامل بالأحرف اللاتينية</div></td>
        <td width="187" bgcolor="#CCCCCC"><div align="center">الإسم الكامل بالأحرف العربية</div>          <div align="center"></div></td>
        <td width="75" bgcolor="#CCCCCC"><div align="center"><span class="style34">تشغيل او اقفال  <a href='ip.php'></a></span></div></td>
      </tr>
      <?php 
		$page = isset($_GET['page']) ? $_GET['page'] : ''; 

 $Req =  " SELECT COUNT(id) as nbr  FROM `utilisateurs`  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $enfant=$detail['nbr'];

	//echo $Requete3;

// Variable codebre d'enreg par page
$limit=25;
if($debut==""){$debut=0;}
$debut=$page*$limit;
// Compte le codebre de champ
$nb_total=$enfant;
// Requete
$limite=mysql_query("$requete limit $debut,$limit");


// Affiche le page par page avec ses liens
if ($page>0) {
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

		  
	$Requete3 = "select actif,gsm,cin,nom_f,prenom_f,nom,prenom,id from utilisateurs  order by id desc $limit_str  ";
	
	mysql_query("SET NAMES 'UTF8' ");

$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


	$row = mysql_fetch_array($result3);
		  
	$table="annexe";
		while($row!="")
	
	   {
	   if($row[actif]==0) $color="#FFFFFF"; else $color="red";
	   	
	   $N=$row[id];
	echo"
	        <tr bgcolor=$color>
		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[gsm]."</div></td>
		  		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[cin]."</div></td>
		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[nom_f]." ".$row[prenom_f]."</div></td>
		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[nom]." ".$row[prenom]."</div></td>
 <td><div align=\"center\"><a href=\"debloque.php?N=$N\"><img src=\"icone/cle.PNG\"border=0 height=30 width=30></div></td>	
        </tr>";
	$row = mysql_fetch_array($result3);
	      }
?>
    </table>
  </div>
</body>
</html>
<?php }else
	
{


$cin=addslashes($_POST["cin"]);
$nom=addslashes($_POST["nom"]);
$prenom=addslashes($_POST["prenom"]);
$email=addslashes($_POST["email"]);
$password=addslashes($_POST["password"]);


$type=addslashes($_POST["type"]);
$nom_f=addslashes($_POST["nom_f"]);
$prenom_f=addslashes($_POST["prenom_f"]);


$supprimer=addslashes($_POST["supprimer"]);


$password=crypter("*78|Jh#&g6+5",$password);


$Requete11 =  "SELECT id  FROM `utilisateurs` WHERE `cin`='".$cin."' and `type`='".$type."'  ";
$result111 = @mysql_query($Requete11,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

$nnn1=mysql_num_rows($result111);


$Requete11 =  "SELECT id  FROM `utilisateurs` WHERE `cin`='".$cin."' and `password`='".$password."' and `type`='".$type."'  ";
$result111 = @mysql_query($Requete11,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

$nnn=mysql_num_rows($result111);

	
if($nnn1!=0 || $nnn!=0)
{

echo "<font color=#FF0000><div align=\"center\"><span class=\"style9\"><b></b></span><BR></font>";
include"aces2.php";
				
}	
else{				
								
										
$Requete =  "INSERT INTO `utilisateurs`(`nom`,`cin`,`prenom`,`gsm`,`password`,`nom_f`,`prenom_f`,`type`,`supprimer`) 
 VALUES ('$nom','$cin','$prenom','$email','$password','$nom_f','$prenom_f','$type','$supprimer');"; 
 
 	mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Problme d'execution de la requete <br>".mysql_error()); 
	


include"aces1.php";
		echo "<div align=\"center\"><a href=\"compte.php\">retour</a>";
  
  }

}

?>



</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>


