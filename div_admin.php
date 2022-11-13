
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
width:200px;
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
      <td colspan="2"><div align="center"></div></td>
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
      <td width="19%"><div align="center"><a href="index_adm.php" style="text-decoration:none">الصفحة الرئيسية</a></div></td>
      <td><div align="right" class="style3"><?php echo $annexe1; ?></div></td>
    </tr>
  </table>
</div>
<div id="cssmenu" class="align-right">
  <ul>
   <li><a href='administration.php'><span> اعدادات&nbsp; </span> </a></li>
   <li><a href='annexe.php'><span>  اضافة ملحقة أو مكتب</span> </a></li>
   <li><a href='c_password.php'>تغيير كلمة السر</a></li>
   <li><a href='compte.php'><span> اضافة حساب &nbsp; </span> </a></li>
   <li><a href='annee.php?type=0'><span> إضافة السنة الميلادية</span> </a></li>
   <li><a href='annee.php?type=0'><span> فتح السجلات</span> </a></li>
  
   <li><a href='mention.php'><span> البيانات الهامشية &nbsp; </span> </a></li>
   
   
   <li><a href='prof.php?type=admin'><span> إضافة القطاع المهني </span> </a></li>
   <li><a href='province.php?type=admin'><span> إضافة عمالة أو إقليم </span> </a></li>
   
   <li><a href='sauvegarde.php?web=1'><span> تسجيل قاعدة البيانات &nbsp; </span> </a></li>
   <li><a href='ip.php'><span> تشغيل او اقفال عنوان</span></a></li>
   <li><a href='nbr.php'><span> عدد الرسوم حسب المستعمل </span></a></li>
  </ul>
  <p>&nbsp;</p>
</div>
</div>
</body></html>
