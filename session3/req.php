<?php

if(isset($_GET['submit'])){
    print_r($_GET);
    echo calc($_GET['num1'],$_GET['num2'],$_GET['opr']);
 
}
else {
   
        header("location:handle_user.php");

}

function calc( int|float $x,  int|float $y,$oper) :int|float{
    if($oper=='add'){
        return $x+$y;

    }
    elseif($oper== 'sub'){
        return $x-$y;
    } 
    elseif($oper== 'mul'){
        return $x*$y;
    } 
    elseif($oper== 'div'){
        return $x/$y;
    } 
    else {
        return 0;
    }
}
?>