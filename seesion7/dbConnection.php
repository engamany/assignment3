<?php
header("Access-Control-Allow-Origin: *");
header(("Content-Type: Application/json; charset=UTF-8"));
$conn= mysqli_connect("localhost","root","","wedapi");

if(!$conn){
    echo "Error in Connection";
    die();
}

?>