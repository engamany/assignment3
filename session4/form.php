<?php
session_start();
if(isset($_SESSION['errors'])){
    foreach($_SESSION['errors'] as $value){
        echo $value;
    }
}
unset($_SESSION['errors']);
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
    <form action="handle_form.php" method="post">
        <br>
        <input type="text" name="userName" >
        <br>
        <input type="text" name="email" >
        <br>
        <input type="password" name="password" >
        <br>
        <input type="text" name="age" >
        <br>
        <input type="radio" value="male"  name="gender" checked >Male
        <input type="radio" value="female"  name="gender">Female
        <br>
        <button type="submit" name="submit">Rigistration</button>
    </form>
</body>
</html>