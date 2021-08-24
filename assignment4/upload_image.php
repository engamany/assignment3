<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handle_upload_image.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name">
   <br>
    <input type="file" name="upload_image" >
    <br>
    <button type="submit" name="submit">upload</button>

    </form>

    <?php
   
    $files = scandir("uploads",SCANDIR_SORT_NONE);
    /*
    echo '<pre>';
    print_r ($files);
    echo '<pre>';
    */
    for($i=2;$i<count($files);$i++){
        ?>
  <a href="uploaded-image/<?php echo $files[$i]?>" download="" > <?php echo $files[$i] ?></a> 
  <br>


   <?php }?>
  
    
</body>
</html>

