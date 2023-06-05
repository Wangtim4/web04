<?php
include_once "../base.php";

dd($_POST);


if(isset($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['tmp_name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
}
// 判斷是否為新增，還是編輯
if(!isset($_POST['id'])){
 $_POST['no']=rand(100000,999999);
    $_POST['sh']=1;
}
// dd($_POST);
$Goods->save($_POST);
to('../back.php?do=th');
?>