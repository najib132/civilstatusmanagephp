
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
     <td width="10%" rowspan="5"><img src="logo/9.jpg" width="132" height="114" /></td>
     <td width="27%"><div align="left" class="style3"><?php echo $pays; ?></div></td>
     <td colspan="2" rowspan="2"><div align="center" class="style3">برنامج تسيير  مصلحة الحالة المدنية  سيفيل بروكرما 

</div>       
     <div align="center" class="style3"> 
         <div align="center" class="style3"></div>
       </div></td>
     <td width="21%"><div align="right" class="style3"><?php echo $pays1; ?></div></td>
     <td width="11%" rowspan="5"><div align="right"><img src="logo/9.jpg" width="132" height="114" /></div></td>
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
     <td width="12%"><div align="center"><a href="connex.php" style="text-decoration:none">خروج</a></div></td>
     <td width="19%"><div align="center"><a href="index_civil.php" style="text-decoration:none">الصفحة الرئيسية</a></div></td>
     <td><div align="right" class="style3"><?php echo $annexe1; ?></div></td>
   </tr>
 </table>
 </div>
<div id="cssmenu" class="align-right">
  <ul>
   <li class='has-sub'><a href='#'><span> تصاريح الولادات</span> </a>
      <ul>
         <li><a href="naissance11t.php?affiche=1&cat=المولود&affiche=صفحة إضافة تصاريح الولادات"><span>اضافة تصريح</span></a></li>
         <li><a href="naissance11.php?affiche=1&cat=المولود&affiche=صفحة إضافة تصريح الولادة"><span> اضافة تصريح مع الترجمة </span></a></li>
		 <li><a href="recherche.php?type=2&table=naissance&affiche=لائحة تصاريح الولادات"><span>اطلاع</span></a></li>
         <li><a href="recherche.php?type=13&table=naissance&affiche=ترجمة تصريح"><span> ترجمة تصريح </span></a></li>
		 
         <li class='last'><a href="faute.php?type=1&table=naissance&affiche=البحث عن الأخطاء في الرسوم"><span>البحث عن الأخطاء في الرسوم</span></a></li>
			   
			   
			   
         <li class='has-sub'><a href='#'><span>وثائق</span></a>
            <ul>
               <li><a href="recherche.php?type=2&table=naissance&affiche=نسخة موجزة و كاملة من رسم الولادة"><span>نسخة موجزة من رسم الولادة</span></a></li>
               <li><a href="recherche.php?type=3&table=naissance&affiche=نسخة موجزة و كاملة من رسم الولادة"><span>نسخة كاملة من رسم الولادة</span></a></li>
               <li class='last'><a href="recherche.php?type=1&table=naissance"><span>وثائق أخرى مرافقة للرسم</span></a></li>
               <li class='last'><a href="recherche.php?type=1&table=naissance&affiche=ورقة التصريح -- المسودة"><span>ورقة التصريح -- المسودة</span></a></li>
			   
			   
            </ul>
         </li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span> تصاريح الوفيات&nbsp; </span> </a>
      <ul>





		 
		          <li><a href="deces11t.php?affiche=3&cat=المتوفى&affiche=اضافة تصريح وفاة "><span>اضافة تصريح</span></a>
		          <li><a href="deces11.php?affiche=3&cat=المتوفى&affiche=اضافة تصريح وفاة "><span>اضافة تصريح مع الترجمة</span></a>
				  
		 <li><a href="recherche.php?type=9&table=deces&affiche=لائحة تصاريح الوفيات"><span>اطلاع</span></a></li>
         <li><a href="recherche.php?type=12&table=deces&affiche=ترجمة تصريح"><span> ترجمة تصريح </span></a></li>
               <li class='last'><a href="faute.php?type=1&table=deces&affiche=البحث عن الأخطاء في الرسوم"><span>البحث عن الأخطاء في الرسوم</span></a></li>
			   
		 

         <li class='has-sub'><a href='#'><span>وثائق</span></a>
            <ul>
               <li><a href="recherche.php?type=9&table=deces&affiche=نسخة موجزة و كاملة من رسم الوفاة"><span>نسخة موجزة من رسم الوفاة</span></a></li>
               <li><a href="recherche.php?type=4&table=deces&affiche=نسخة موجزة و كاملة من رسم الوفاة"><span>نسخة كاملة من رسم الوفاة</span></a></li>
               <li><a href="recherche.php?type=1&table=deces"><span> وثائق أخرى مرافقة للرسم </span></a></li>
               <li class='last'><a href="recherche.php?type=1&table=deces&affiche=ورقة التصريح -- المسودة"><span>ورقة التصريح -- المسودة</span></a></li>
			   
            </ul>
         </li>
      </ul>
   </li>
   
    <li class='has-sub'><a href='#'><span>بطائق شخصية</span></a>
      <ul>
         <li><a href="carnet.php"><span>اضافة</span></a></li>
         <li><a href="recherche.php?type=6&affiche=بطائق شخصية"><span>اطلاع</span></a></li>
      </ul>
   </li>
   
  
   
   <li class='has-sub'><a  href="#"><span>البينات الهامشية</span></a>
   
          <ul>
		  
		  
         <li class='has-sub'><a href='#'><span>التي تتعلق برسوم الولادات</span></a>
		 <ul>
         <li><a href="recherche.php?type=7&affiche=إضافة البينات الهامشية التي تتعلق برسوم الولادات "><span>اضافة بيان</span></a></li>
         <li><a href="recherche.php?type=7&affiche=تحميل النسخة الأصلية "><span>تحميل النسخة الأصلية </span></a></li>
		   </ul> </li>
		   
		   
         <li class='has-sub'><a href='#'><span> التي تتعلق برسوم الوفيات</span></a>
		 <ul>
         <li><a href="recherche.php?type=11&affiche=إضافة البينات الهامشية التي تتعلق برسوم الوفيات "><span>اضافة بيان</span></a></li>
         <li><a href="recherche.php?type=11&affiche=تحميل النسخة الأصلية "><span>تحميل النسخة الأصلية </span></a></li>
		   </ul> </li>


		 
      </ul>
   </li>
   
   
   
   <li class='has-sub'><a href='#'><span>نقل الرسوم </span></a>
       <ul>
         <li><a href="naissance11.php?cat=المولود&trans=1&affiche=صفحة إضافة نقل الرسوم"><span>اضافة نقل</span></a></li>
         <li><a href="recherche.php?type=5&table=naissance&affiche=المعنيين الذين نقلو رسومهم "><span>اطلاع</span></a></li>
      </ul>
	</li>
	
   <li class='has-sub'><a href='#'><span>الشواهد و الوثائق</span></a>
   
         <ul>
		 
   <li class='has-sub'><a href='#'><span>المسجلين</span></a>	
            <ul>
	 
		 


         <li><a href="recherche.php?type=10&table=naissance&affiche=شواهد تتعلق بالأحياء"><span>شواهد تتعلق بالأحياء</span></a>
         <li><a href="recherche.php?type=10&table=deces&affiche=شواهد تتعلق بالمتوفيين"><span>شواهد تتعلق بالمتوفين</span></a>
         <li><a href="cvc.php?affiche=إعداد شهادة الحياة الجماعية"><span>شهادة الحياة الجماعية</span></a></li>
		 
		 
      </ul></li>
	  
	 

   <li class='has-sub'><a href='#'><span>الغير المسجلين</span></a>	
        <ul>
      <li><a href="non_declarer.php?type=10&table=naissance&affiche=شواهد تتعلق بغير المسجلين"><span>إضافة شهادة</span></a></li>
      <li><a href="reche_non_declarer.php?affiche=بحث في أرشيف شواهد الغير المسجلين"><span>البحث في الأرشيف</span></a></li>
	  </ul>
      </ul></li>
   
   
   
   
   
   
   
   <li class='has-sub'><a href='#'><span>اللوائح </span></a>
   
   
         <ul>
         <li><a href="etat.php?type=10"><span>لائحة المواليد</span></a></li>
         <li><a href="etat.php?type=3"><span>الاطفال البالغين سن التمدرس</span></a></li>
         <li><a href="etat.php?type=12"><span>لائحة بحسب البيانات الهامشية</span></a></li>
		 
         <li><a href="etat.php?type=11"><span>لائحة الوفيات المصرح بهم</span></a></li>
        </ul>
    </li>
   
   
   
   
   
      <li class='has-sub'><a href='#'><span>الإحصائيات </span></a>
   
   
         <ul>
		 
         <li><a href="etat.php?type=14"><span> الحصيلة</span></a></li>
         <li><a href="etat.php?type=15"><span>الوفيات حسب العمر</span></a></li>
         <li><a href="etat.php?type=17"><span>رتبة الولادة</span></a></li>

         <li><a href="etat.php?type=13"><span>الوفيات حسب الحرفة</span></a></li>

         <li><a href="etat.php?type=16"><span>الولادات حسب مكان الإقامة</span></a></li>
         <li><a href="etat.php?type=18"><span>الزواج حسب السن </span></a></li>
         <li><a href="etat.php?type=19"><span> الوفيات حسب مكان الإقامة </span></a></li>
         <li><a href="etat.php?type=20"><span> الولادات حسب سن الاب </span></a></li>
         <li><a href="etat.php?type=21"><span> المسجلين الأحياء حسب العمر</span></a></li>
		 
		

        </ul>
    </li>

   
   
   
   
   
   
   <li class='has-sub'><a href='#'><span>الرسوم المبيانية</span></a>
      <ul>
         <li><a href="etat.php?type=1"><span>الولادات</span></a></li>
         <li><a href="etat.php?type=2"><span>الوفيات</span></a></li>
   <li class='has-sub'><a href='#'><span>احصائيات لفترة 10 سنوات</span></a>
      <ul>
	  
	  

         <li><a href="etat.php?type=4"><span>الولادات</span></a></li>
         <li><a href="etat.php?type=5"><span> الوفيات</span></a></li>
		 

         <li><a href="etat.php?type=6"><span> الزواج</span></a></li>
         <li><a href="etat.php?type=7"><span> الطلاق</span></a></li>

		 
         <li><a href="etat.php?type=8"><span> أحكام الولادات</span></a></li>
         <li><a href="etat.php?type=9"><span> أحكام الوفيات</span></a></li>
	        </ul>
      </ul>
   </li>
   
 <!--  <li><a href='#'><span>الوثائق المرافقة للسجل</span></a></li> //-->
   
      
  <!--  
   <li class='has-sub'><a href='#'><span>مختلفات</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>الزواج</span></a></li>
         <li class='has-sub'><a href='#'><span>الطلاق</span></a></li>
      </ul>
   </li>
   
   //-->
   
   <li class='has-sub'><a href="#"><span>ارساليات</span></a>
     <ul>
         <li><a href='messagerie.php?pag=1&acces=officier'><span>رسالة جديدة</span></a></li>
         <li><a href='messagerie.php?pag=2&acces=officier'><span>علبة رسائل </span></a></li>
         <li><a href='messagerie.php?pag=3&acces=officier'><span> رسائل مرسلة </span></a></li>
      </ul>
   </li>
   
   
      <li><a href="c_password1.php?type=1&acces=officier"><span>تغيير كلمة السر</span></a></li>
  </ul>
  </div>
</div>
</body></html>
