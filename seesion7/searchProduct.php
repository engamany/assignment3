<?php
require_once "dbConnection.php";
 if($_SERVER['REQUEST_METHOD']="GET"){
     $URI=$_SERVER['REQUEST_URI'];
     $uriArray=explode("/",$URI);
     $term=end($uriArray);

     $query="SELECT *FROM `PRODUCTS` WHERE `name` LIKE '%$term%'";
     $runQuery=mysqli_query($conn,$query);

     if(mysqli_num_rows($runQuery)>0){
         $searchResult=mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
         $jsonData=json_encode($searchResult);
         print_r($jsonData);

     }
     else{
         echo json_encode(["msg"=>'not found']);
     }
 }
 else{
     http_response_code(404);
 }
 ?>