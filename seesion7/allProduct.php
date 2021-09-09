<?php
require_once "dbConnection.php";

if($_SERVER['REQUEST_METHOD']=="GET"){
    $query="SELECT *FROM `PRODUCTS`";
    $runQuery=mysqli_query($conn,$query);
    $products=mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
    $jsonData =json_encode($products);
    print_r($jsonData);

}else{
    http_response_code(404);

}



?>