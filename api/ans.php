<?php
session_start();

// if($_SESSION['ans']==$_GET['ans']){
//     echo 1;
// }else{
//     echo 0;
// }

echo ($_SESSION['ans']==$_GET['ans'])?1:0;