

<?php 

error_reporting(E_ALL ^ E_NOTICE);      include"conn/connexion.php";
 
 
 ?>

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

  <h2 align="center">&nbsp;</h2>
  <p align="center">&nbsp;</p>
  <div align="center">
      <p>
        <?php 
		  
	$Requete3 = "select login,password from administration ";
	

$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


	$row = mysql_fetch_array($result3);
		  

?>
      </p>
      <p>Login : <?php echo $row[login] ?>    </p>
      <p>Mot de pass : <?php echo $row[password] ?></p>
  </div>
</body>
</html>



</body>
</html>


