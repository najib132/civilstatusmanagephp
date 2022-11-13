<?php 


$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

 $newphrase = str_replace($healthy, $yummy, $phrase);
 
// ("وضابط الحالة المدنية","بوحاميدي محمد بن الشريف خليتة رئس المركز وضابط الحالة المدنية لتاديغوست",6 );

echo strstr ("بوحاميدي محمد بن الشريف خليتة رئس المركز وضابط الحالة المدنية لتاديغوست","gg");
//echo strrchr ("ABCDEFG","D");

//echo "وضابط الحالة المدنية لتاديغوست";

?>