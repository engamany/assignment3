<?php
//numeric Array
$numericArr=["ahmed",6,7,5,9];
echo ($numericArr[0]);
echo"<br>";
print_r ($numericArr);

echo"<br>";
$numericArr[]=2000;
print_r($numericArr);

//associative Array
$assArr=[
    "name"=>"Amany",
    "age"=>"20",
    "salary"=>"20000"
];
echo"<br>";
print_r ($assArr);
echo"<br>";
$assArr['keygded']="done";
print_r($assArr);
echo"<br>";
echo $assArr["salary"];
echo"<br>";
echo array_key_exists("nameee",$assArr);//هنا مش هيظهر حاجه عشان طالعه بفولس والفولس مش بيطلع له قيمه
echo array_key_exists("name",$assArr);

echo"<br>";
 unset($assArr["keygded"]);
 print_r ($assArr);


?>