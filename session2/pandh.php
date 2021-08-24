<?php
$userData = [
    'name' => 'kareem',
    'job' => 'backend',
    'language' => 'php',
    'framework' => 'laravel',
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
    <?php
    foreach($userData as $key=> $value){
    ?>
    <li><?= $key." is ".$value ?></li>

<?php }?>
</ul>
</body>
</html>