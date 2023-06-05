<?php
include_once "../base.php";

// dd($_POST);

$_POST['no']=rand(100000,999999);
if(isset($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['tmp_name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
}
// dd($_POST);
$Goods->save($_POST);
to('../back.php?do=th')
?>