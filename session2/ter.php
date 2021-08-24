<?php
// ternary  ده لو عندي شرط اجابته ياه يالا بستخدم النوع ده

$age =20;
if($age ==20){
    echo "legal age";

}
else{
    echo "not legal";
}

//فيخ نوع تاني اسمه ternary ف سطر واحد
$msg=($age>=21)?'llegal age ' :'not legal';
echo $msg;
?>