<?php
$conn=mysqli_connect("localhost","root","","session5");
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
$query="SELECT *FROM `customers`";
$runQuery=mysqli_query($conn,$query);
$result=mysqli_fetch_all($runQuery,MYSQLI_ASSOC);

echo '<pre>';
print_r($result);
echo '<pre>';
?>