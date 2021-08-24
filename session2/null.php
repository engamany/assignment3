<?php
$data="Amany";
if($data!=null){
    echo "feha 7aga"."<br>";
}
else{
    echo " mafehash 7aga" ."<br>";
}
/// فيه نوع تاني باستخدمه ف سطر واحد
echo $data ?? 'mafehosh 7aga';

?>