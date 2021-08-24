<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $upload_image=$_FILES['upload_image'];
    print_r($upload_image);


    $upload_image_name = $upload_image['name'];
    $upload_image_type = $upload_image['type'];
    $upload_image_tmp_name = $upload_image['tmp_name'];
    $upload_image_error = $upload_image['error'];
    $upload_image_size = $upload_image['size'];
    $imgSizemb=$upload_image_size/(1024**2);
    $ext=pathinfo($upload_image_name,PATHINFO_EXTENSION);


    $randStr=uniqid();
    $imgWithout_ext=pathinfo($upload_image_name,PATHINFO_FILENAME);
    $date=time();
    $imgNewName="$imgWithout_ext.$date$randStr.$ext";


    move_uploaded_file($upload_image_tmp_name,"uploads/$imgNewName");

    //validation   error   ext  size
    $errors=[];
    if($upload_image_error>0){
        $errors[]="there is error while uploading";
    }
    elseif(!in_array($ext,['jpg','png','jpeg','gif'])){
        $errors[]="must be image";
    }
    elseif( $imgSizemb>1){
        $errors[]="must be less than 1mb";
    }

    if(empty($errors)){
        $randStr=uniqid();
    $imgWithout_ext=pathinfo($upload_image_name,PATHINFO_FILENAME);
    $date=time();
    $imgNewName="$imgWithout_ext.$date$randStr.$ext";

    }
    else{
        print_r($errors);
    }


}


?>