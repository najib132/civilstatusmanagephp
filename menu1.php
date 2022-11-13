 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style type="text/CSS">
  .fond {
  background-color:#FFFFFF;
  }
  h1 {
color:#4E632C;
text-align:center;
}
#entete1, #entete2 {
text-align:center;
border-width:1px 0;
border-style:solid;
border-color:black;
}

#footer1, #footer2 {
text-align:center;
border-width:2px 0;
height:inherit:9px;
border-style:solid;
border-color:black;
background-color:#FFFFFF;
clear:both;
}
#menu1, #menu2 {
border-width:2px 0;
width:225px;
color:#000000;
background-color:#FFFFFF;
}

#menu1  {
float:left;
}
#contenu1 {
margin-left:155px;
}
#menu2 {
float:right;
}
#contenu2 {
margin-right:155px;
}
  .style31 {color: #000000;
	font-weight: bold;
	font-size: 17px;
}
.style53 {font-size: 16px}
.style54 {color: #660000; font-size: 16px; }
.style55 {font-size: 18px}
.style57 {font-size: 16px; color: #000000; }
.style58 {color: #660000}
.style59 {font-size: 17px; color: #000000;}
.style60 {font-size: 18}
</style>

<div id="entete1">
  <div align="left">
    <table width="80%">
      <tr>
        <td width="11%" rowspan="2"><p class="style31"><img src="../<?php 
		$entreprise=$_SESSION["entreprise"];       $entreprise1=$_SESSION["entreprise1"];  
		echo $entreprise1; ?>.jpg" width="103" height="91" /></p></td>
        <td width="89%" height="48"><span class="style59"><span class="style57"><span class="style58">Entreprise </span></span></span><span class="style31"><span class="style57">: <span class="style35 style55"> <?php echo $entreprise1; ?></span></span></span></td>
      </tr>
      <tr>
        <td height="52"><span class="style54">Adresse IP  :</span> <span class="style53">
          <?php
		 $ip=$_SERVER['REMOTE_ADDR'];
echo $ip;
		 ?>
        </span></td>
      </tr>
    </table>
  </div>
</div>
 <div id="menu1">
 
 
 
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
	
<!-- Start css3menu.com BODY section -->
<span class="topmenu"><a href="../connex.php" style="width:195px;"></a></span>
<ul id="css3menu1" class="topmenu">
	
	
<li class="toplast2"><a href="#">Les naissances </a>
<ul>
   <li class="toplast2"><a href="naissance1.php?cat=المولود">Naissances </a></li>
   <li class="toplast2"><a href="recherche.php?type=1&amp;table=naissance">Les pi&egrave;ces jointes </a></li>
   <li class="toplast2"><a href="recherche.php?type=2&amp;table=naissance">Consulter</a></li>
   <li class="toplast2"><a href="recherche.php?type=8&table=naissance">نسخة موجزة وكاملة </a></li>
</ul>
</li>


<li class="toplast2"><a href="#">Les Deces </a>
  <ul>
   <li class="toplast2"><a href="naissance1.php?cat=المتوفى">Declarer une deces non enregistrer </a></li>
   <li class="toplast2"><a href="recherche.php?type=3&amp;table=deces">D&eacute;c&eacute;s normale </a></li>
   <li class="toplast2"><a href="recherche.php?type=4&amp;table=deces">D&eacute;c&egrave;s enregistrer externe </a></li>
   <li class="toplast2"><a href="recherche.php?type=9">Les pi&egrave;ces jointes </a></li>
   <li class="toplast2"><a href="recherche.php?type=9">Consulter</a></li>
   <li class="toplast2"><a href="recherche.php?type=9">نسخة موجزة وكاملة </a></li>
   
   
</ul>
</li>


<li class="toplast2"><a href="#">Transcription </a>
  <ul>
   <li class="toplast2"><a href="naissance1.php?cat=المولود&trans=1">Declarer une transcription </a></li>
   <li class="toplast2"><a href="recherche.php?type=5&amp;table=naissance">Consulter</a></li>
   
      <li class="toplast2"><a href="recherche.php?type=1&amp;table=naissance">Les pi&egrave;ces jointes </a></li>
</ul>
</li>


<li class="toplast2"><a href="#">بطائق شخصية </a>
  <ul>
   <li class="toplast2"><a href="carnet.php">إضافة </a></li>
   <li class="toplast2"><a href="recherche.php?type=6">Consulter</a></li>
  </ul>
</li>


<li class="toplast2"><a href="recherche.php?type=7">بيانات هامشية</a></li>

<li class="toplast2"><a href="#">الإحصائيات</a>
  <ul>
   <li class="toplast2"><a href="etat.php?type=1">الولادات</a></li>
   <li class="toplast2"><a href="etat.php?type=2">الوفيات</a></li>
   <li class="toplast2"><a href="etat.php?type=3">الأطفال</a></li>
   <li class="toplast2"><a href="statistique.php">إحصائيات عامة</a></li>
  </ul>

</li>

<li class="toplast2"><a href="c_password1.php">Changer mot de pass</a></li>
<li class="toplast2"><a href="messagerie.php" class="style60">Messagerie</a></li>
<li class="toplast2"><a href="connex.php">D&eacute;connecter</a></li>


<!-- En
<ul class="topmenu">
  <li class="toplast2"><a href="connex.php">D&eacute;connecter</a> </li>
</ul>
<p>&nbsp;</p>
 css3menu.com BODY section -->


   <p>&nbsp;</p>
 </div> 
  
