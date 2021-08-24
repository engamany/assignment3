
<?php
session_start();
if(isset($_SESSION['email'])){
    header("location:dash.php");
}
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
    <form action="handle_login.php" method="post">
        <input type="text" name="email" >
        <br>
        <input type="password" name="password" >
        <br>
        <button type="submit" name="submit">log in</button>
    </form>
</body>
</html>