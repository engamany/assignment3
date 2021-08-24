<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $img=$_FILES['img'];
    print_r($img);


$imgName=$img['name'];
$imgType=$img['type'];
$imgTmpName=$img['tmp_name'];
$imgError=$img['erorr'];
$imgSize=$img['size'];

$randStr=uniqid();
$ext=pathinfo($imgName,PATHINFO_EXTENSION);
$date=time();
$imgNewName="$date$randStr.$ext";
move_uploaded_file($imgTmpName,"uploads/$imgName");

}
?>