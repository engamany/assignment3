<?php
/*
echo '<pre>';
print_r ($_POST);
echo '<pre'; 
*/
if(isset($_POST['submit'])){
    $userEmail=$_POST['email'];
    $userPassword=$_POST['password'];
    echo "hello your name is $userEmail";
}
else{
    header("location: userName.php");
}
?>