<?php
//error_reporting(0);
//task1
echo "task1";
echo "<br>";
echo "<br>";

$names=['Ahmed','hassan','Eslam','Amany','Alaa'];

foreach($names as $name){

}
echo max($names);
echo "<br>";
echo "<br>";

//task2

echo "task2";                  //data structure   //algorithm
echo "<br>";
echo "<br>";

  $myinfo = ["Amany","reda","amany@gmail.com","Meto","Female","2021-08-2"];

     foreach ($myinfo as $k => $v) {
     
          unset($myinfo[3]);
          $myinfoo = array_values($myinfo);
        }

        echo "<pre>";
        print_r($myinfo);
        print_r($myinfoo);
       echo "</pre>";

//task3
echo "task3";
echo "<br>";
echo "<br>";

$salaries =[1.2,4,15555.5,352789253.7,7.5];
foreach($salaries as &$value){
  $x=round($value);
echo number_format($x),"<br>";
}


//task4
echo "task4";
echo "<br>";
echo "<br>";

$AllChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+-/=+-_)(&\|^%$#@!~`}]{[/';:><?.";
    print_r(substr(str_shuffle($AllChars),0,20));


echo "<br>";
echo "<br>";
//task5
echo "task5";
echo "<br>";
echo "<br>";

$Pronouns = ["I", "He", "She", "It",
             "We", "They", "You"];
$n = count($Pronouns) ;
   for($i =$n-1 ; $i>0; $i--)
    {
        $j = rand(0,$i);
        $tmp = $Pronouns[$i];
        $Pronouns[$i] = $Pronouns[$j];
        $Pronouns[$j] = $tmp;
    }
    for($i = 0; $i <$n; $i++){
    echo $Pronouns[$i]." ";

}
echo "<br>";
echo "<br>";

//task6
echo "task6";
echo "<br>";
echo "<br>";

$n =2082000;
$count = 0;
    while ($n != 0)
    {
        $n = round($n / 10);
        ++$count;
    }
   echo $count;

echo"<br>";
echo"<br>";


echo "task7";
echo "<br>";
echo "<br>";
$engs = ['ahmed', 'mohammed', 'hasan'];



echo "task8";
echo "<br>";
echo "<br>";
$instructors = [
    'kareem fouad' => [
        'job' => 'backend developer',
        'track' => 'php',
    ],
    'ahmed bahnasy' => [
        'job' => 'frontend developer',
        'track' => 'angular',
    ],
    'ahmed nasr' => [
        'job' => 'backend developer',
        'track' => '.net',
    ],
];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($engs as $eng) { ?>

            <li><?= $eng ?></li>
        <?php } ?>
    
    </ul>







    <ul>
        <?php 
        foreach($instructors as $key=> $value){
            foreach($value as $k=> $v){

        ?>
         
         <li><?= $key ?>
         <ul>
         <li><?= $k.':'.$v ?></li>
         </ul>
        </li>
       
        <?php }?>
        <?php }?>
    </ul>
    
</body>
</html>

