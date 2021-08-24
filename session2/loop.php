<?php

$names =['hassan','hassan','hassan','mahamed','ahmed','kareem'];
/*
for($i=0;$i<count($names);$i++){
    if($names[1]=='a'){
        echo $names;
    }
    else{
       unset($names);
    }
}

foreach($names as $index=> $value){
    echo $value."<br>";
    if($value[1]!="a"){
        unset($names[$index]);
    }
}
print_r ($names);

$count=0;
foreach($names as $index=> $name){
    if($name=='hassan' ){
     
        $count++;
  
    }
}
echo $count;

$arr=[0,2,5,6,7,8,3,1,4,9,10];
foreach($arr as $index=> $value){
    if($value%2==0){
       continue;
       echo $value;
    }
    else{
        echo $value;
        echo "<br>";
        print_r($arr);
        echo"<br>";
    }
}

*/
$arrSum=[12,32.21,36,98];
$sum=0;
$avge=0;
foreach($arrSum as $index=> $value){
$sum+=$value;
$avge=$sum/count($arrSum);

}
echo $sum."<br>";

echo $avge;
?>
