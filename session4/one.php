<?php
session_start();
$x=5;
$_SESSION['x']=$x;
$_SESSION['arr']=[1,2,20,21];
$_SESSION['str']="ahmed";
echo $_SESSION['y'];
echo "x is created";

session_destroy();