<?php
//concatination
$firstName="Amany";
$lastName="Reda";
$fullName=$firstName.' '.$lastName;
echo $fullName;

echo"<br/>";
//بندور ع ابره ف كوم قش
$messege="Lorem ipsum dolor sit amet,Quia exercitationem impedit architecto quisquam nulla? Quasi laborum, dolor eos nemo saepe quo,  illum molestias quas. Veritatis, voluptatibus voluptate ab quisquam possimus inventore minima itaque" ;

echo strpos($messege,"amet");
echo"<br/>";
echo str_replace("Lorem","Amany", $messege);

$x="                  hassan             ";
echo"<br/>";
//dah by7sp el masafat
echo strlen($x);

//dah mesh byhsp el masafat
$afterTrim= trim($x);
echo"<br/>";
echo strlen($afterTrim);

?>
