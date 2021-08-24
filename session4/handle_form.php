<?php
session_start();
if(isset($_POST['submit'])){
    $userName=$_POST['userName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];

//username riquired| string |max-length

$errors=[];
if(empty($userName)){
    $errors[]="username is required";
    echo "<br>";
}
elseif(is_numeric($userName)){
    $errors[]="username must be string";

}
elseif(strlen($userName)<5 ||strlen($userName)>50){
    $errors[]="min length 5 & max length 50";

}

//email required |email
if(empty($email)){
    $errors[]="email is required";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors[]="must be valid email";

}
// password required| range
if(empty($password)){
  $errors[]="password is required";
}
elseif(strlen($password)<8 || strlen($password)>50){
    $errors[]="password must be length [8-50]";
}
//age required |number
if(empty($age)){
    $errors[]="age is required";
}
if(!is_numeric($age)){
    $errors[]="age must be number";
}
//gender required |male or female only
if(empty($gender)){
    $errors[]="gender is required";
}
elseif(!in_array($gender,['male','female'])){
    $errors[]="gender must be male or female only";
}

if(empty($errors)){
    print_r($_POST);
}
else{
    print_r ($errors);
    $_SESSION['errors']=$errors;
    header("location:form.php");
}
}