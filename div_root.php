
  <style type="text/CSS">
  .fond {
  background-color:#EFEFEF;
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
border-width:1px 0;
border-style:solid;
border-color:black;
clear:both;
}
#menu1, #menu2 {
width:150px;
color:#800080;
background-color:#EFEFEF;
}

#menu1  {
float:right;
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
  </style>
<link href="styles.css" rel="stylesheet" type="text/css">
<script type='text/javascript' src='jquery-1.10.2.min.js'></script>
<script type='text/javascript' src='menu_jquery.js'></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


 <style type="text/css">
<!--
.style3 {color: #707070; }
-->
 </style>
 <div class="fond">
<div id="entete1">
  <table width="100%">
    <tr>
      <td width="9%" rowspan="5"><img src="logo/9.jpg" width="132" height="114" /></td>
      <td width="24%"><div align="left" class="style3"><?php echo $pays; ?></div></td>
      <td colspan="2" rowspan="2"><div align="center" class="style3">برنامج تسيير  مصلحة الحالة المدنية  سيفيل بروكرما 

</div>
          <div align="center" class="style3">
            <div align="center" class="style3"></div>
          </div></td>
      <td width="21%"><div align="right" class="style3"><?php echo $pays1; ?></div></td>
      <td width="10%" rowspan="5"><div align="right"><img src="logo/9.jpg" width="132" height="114" /></div></td>
    </tr>
    <tr>
      <td><div align="left" class="style3"><?php echo $ministre; ?></div></td>
      <td><div align="right" class="style3"><?php echo $ministre1; ?></div></td>
    </tr>
    <tr>
      <td><div align="left" class="style3">Province / Préfécture : <?php echo $province; //echo" - $section"; ?></div></td>
      <td colspan="2"><div align="center"><span class="style3">المستعمل : <?php echo $idf; ?></span></div></td>
      <td><div align="right" class="style3">عمالة أو إقليم : <?php echo $province1; //echo " -  "; echo $section1; ?></div></td>
    </tr>
    <tr>
      <td class="style3"><?php echo $region; ?> : <?php echo $section; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="right" class="style3"><?php echo $region1; ?> : <?php echo $section1; ?></div></td>
    </tr>
    <tr>
      <td><div align="left" class="style3"><?php echo $annexe; ?></div></td>
      <td width="17%"><div align="center"><a href="connex.php" style="text-decoration:none">خروج</a></div></td>
      <td width="19%"><div align="center"><a href="index_root.php" style="text-decoration:none">الصفحة الرئيسية</a></div></td>
      <td><div align="right" class="style3"><?php echo $annexe1; ?></div></td>
    </tr>
  </table>
</div>
<div id="cssmenu" class="align-right">
  <ul>
   <li class='has-sub'><a href='#'><span> تصاريح الولادات</span> </a>
      <ul>
               <li><a href="recherche_root.php?type=8&table=naissance&affiche=نسخة موجزة و كاملة من رسم الولادة"><span>نسخة موجزة من رسم الولادة</span></a></li>
               <li><a href="recherche_root.php?type=8&table=naissance&affiche=نسخة موجزة و كاملة من رسم الولادة"><span>نسخة كاملة من رسم الولادة</span></a></li>
           
      </ul>
   </li>
   
   
   <li class='has-sub'><a href='#'><span> تصاريح الوفيات&nbsp; </span> </a>
      <ul>
	  


               <li><a href="recherche_root.php?type=9&table=deces&affiche=نسخة موجزة و كاملة من رسم الوفاة"><span>نسخة موجزة من رسم الوفاة</span></a></li>
               <li><a href="recherche_root.php?type=9&table=deces&affiche=نسخة موجزة و كاملة من رسم الوفاة"><span>نسخة كاملة من رسم الوفاة</span></a></li>
               <li><a href="recherche_root.php?type=9&table=deces&affiche=رسم الوفاة الاصلي (Scan)"><span>رسم الوفاة الاصلي (Scan)</span></a></li>
      </ul>
   </li>
   
  
	
   
   <li class='has-sub'><a href="#"><span>ارساليات</span></a>
     <ul>
         <li><a href='messagerie.php?pag=1&acces=root'><span>رسالة جديدة</span></a></li>
         <li><a href='messagerie.php?pag=2&acces=root'><span>علبة رسائل </span></a></li>
         <li><a href='messagerie.php?pag=3&acces=root'><span> رسائل مرسلة </span></a></li>
      </ul>
   </li>
   
   
      <li><a href="c_password1.php?type=0&acces=root"><span>تغيير كلمة السر</span></a></li>
  </ul>
  </div>
</div>
</body></html>
