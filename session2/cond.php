<?php

$grade=50;

if($grade>=0 && $grade<50){
    echo "fail";

}
elseif($grade>=50 && $grade<70){
    echo "pass";
}
elseif($grade>=70 && $grade<=100){
    echo "good";
}
else{
    echo "not valid";
}
echo "<br>";

$data =[1,2,3];
if( is_array($data)){
    echo "data is array"."<br>"."the length is ". count($data) ;
    
}
elseif(is_string($data)){
    echo " data is string"."<br>".strlen($data);
    
}
else
echo "data is not array or string";

?>