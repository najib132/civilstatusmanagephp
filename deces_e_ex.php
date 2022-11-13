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

   $idf=$_SESSION["idf"];
   $idf_m=$_SESSION["idf_m"];
   
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { include("div.php");  

$cat=$_GET["cat"];

$annee_declaration=addslashes($_GET["annee_declaration"]);
$code=addslashes($_GET["code"]);
$sex=addslashes($_GET["sex"]);



?>


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>





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




  <script type="text/javascript">

function Validerfrm()
{

var date_m = document.formulaire_envoi_fichier.date_m.value;

var long=formulaire_envoi_fichier.date_m.value.length;
var mois=date_m.substring(3,5);
var jour=date_m.substring(0,2);
var annee=date_m.substring(6,10);

	

if(date_m == "" || long!=10 || date_m.substring(2,3)!="/" || date_m.substring(5,6)!="/" || mois>12 || jour>31 || isNaN(jour) || isNaN(mois) || isNaN(annee) ) 
		{ 
        alert ('Vérifier le Champ date de Décès'); 
		//alert(date_m.substring(5,7))
		//alert(date_m.substring(0,4))
        document.formulaire_envoi_fichier.date_m.focus(); 
        return false; 
    	} 
	
				
 }
		
		
///////////////////////////////////

    </script>





<form name="formulaire_envoi_fichier" id="formulaire_envoi_fichier" enctype="multipart/form-data" method="get" action="deces_e_ex1.php" onSubmit="return Validerfrm()">
  <div align="center">
    <p>
      <label></label></p>
    <table width="200">
      <tr>
        <td><fieldset style="width:400px">
          <legend class="style39" align="right">معلومات عن الوفاة</legend>
		  
		  
		  	    <fieldset style="width:380px">
        <legend align="right"><span class="style39"> تاريخ الوفاة الميلادي</span></legend>


        <table width="380" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">
              <label></label>
              <input name="date_m" type="text" id="date_m" value="<?php echo date("d/m/Y");	?>" size="30" maxlength="10">
              <button id="trigger1"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
              <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "date_m",
		        button            : "trigger1",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
            </div>              </td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
              <script type="text/javascript">
                <!--
                        function open_infos()
                        {
                                width = 520;
                                height = 450;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
         window.open('esss.php?convert=1&ch=date_mlf&ch1=date_mla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>


		          <a href="#null" onClick="javascript:open_infos();">
		          <input name="date_mla" type="text" id="date_mla" value="بالحروف العربية"  dir="rtl" size="40">
		          <img src="icone/convertisseur.PNG" width="20" height="20"></a>



			
			</div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
              <script type="text/javascript">
                <!--
                        function open_infosss()
                        {
                                width = 520;
                                height = 450;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
                                window.open('esss.php?convert=1&ch=date_mlf&ch1=date_mla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>

<!--
		          <a href="#null" onClick="javascript:open_infosss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>
 -->
 
 En français
 <input name="date_mlf" type="text" id="date_mlf" size="35">
            </div> </td>
          </tr>
        </table>
	    </fieldset>

	
	
	
		    <fieldset style="width:380px">
        <legend class="style39" align="right">تاريخ الوفاة الهجري</legend>


        <table width="380" border="1" cellpadding="0" cellspacing="0">
          
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">
              <script type="text/javascript">
                <!--
                        function open_infoss()
                        {
                                width = 520;
                                height = 450;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
                                 window.open('esss.php?convert=2&ch=date_hlf&ch1=date_hla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>


		          <a href="#null" onClick="javascript:open_infoss();">
		          <input name="date_hla" type="text" id="date_hla" value="بالحروف العربية"  dir="rtl" size="35">
		          <img src="icone/convertisseur.PNG" width="20" height="20"></a>				  

			  
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
              <script type="text/javascript">
                <!--
                        function open_infossss()
                        {
                                width = 520;
                                height = 450;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
                                window.open('esss.php?convert=2&ch=date_hlf&ch1=date_hla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>

<!--
		          <a href="#null" onClick="javascript:open_infossss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>
	-->		  
			  En français
			  <input name="date_hlf" type="text" id="date_hlf" size="35">
            </div></td>
          </tr>
        </table>
	    </fieldset>







  <div align="center">
		                      <table width="380" border="1" cellpadding="0" cellspacing="0">

                                <tr>
                                  <td width="187" bgcolor="#EFEFEF"><div align="center">
                                      <input name="cin" type="text" id="cin" size="14" maxlength="14">
                                  </div></td>
                                  <td width="187" bgcolor="#EFEFEF"><div align="center"><span class="style39">رقم البطاقة الوطنية</span></div></td>
                                </tr>
            </table>
          </div>





		  
                </fieldset>
		  
		    
		  
		  
            <p align="center">
              <input name="sex" type="hidden" id="sex" value="<?php echo $sex; ?>">
              <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
              <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
              <input name="valider" type="submit" id="valider" value="تابع إضافة بيان الوفاة"/>
            </p>
			
			
			
			
		</td>
      </tr>
    </table>
    <p><br>
      <br>
    </p>
  </div>
</form>


</div>
</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

